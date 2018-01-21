<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../app/Core/Ajax.php';
use App\Core\View;
use PayPal\Api\Payment;


//form data
if(isset($_POST['action']) && !empty($_POST['action'])){
	$action = new MainController;
	$action->$_POST['action']();
}


// require_once __DIR__ .'/../config/view.php';
//test
// $course = new model\courses\Course;
// $course->getCourse();

/**
* MainController
*/
class MainController
{
	private $view;
	private $apiContext;
	private $config = array();

	function __construct()
	{
		$view = new View;
		$this->view = $view;

		$config = require __DIR__ .'/../config/config.php';
		$this->config = $config;

		$this->apiContext = new \PayPal\Rest\ApiContext(
	        new \PayPal\Auth\OAuthTokenCredential(
	            'AcCfunYQ97Q3j4zxX9nmzTGpEgnUILqX27l9STKGkuRUjEwmJZpWiDsKh0raDLbiiURlrgAuWW-o1K_J',     // ClientID
	            'EOMswSWBNb1DU7Pa9Ehm2_bGLh0aUheLAMIvIWCEPuvQZJbroD4XrDX5v6X4_wxH4_tVR-Pq4BOuEeq0'      // ClientSecret
	        )
		);

		$this->apiContext->setConfig(
		  array(
		    'log.LogEnabled' => true,
		    'log.FileName' => 'PayPal.log',
		    'log.LogLevel' => 'DEBUG'
		  )
		);
	}

	/**
	* activation
	*/

	function view_activation()
	{	
		$getCourse = new Model\Courses\Active;
		$getCourses = $getCourse->getNotActiveCourse($_SESSION['user']['id']);
		echo $this->view->render('activation', array('getCourse' => $getCourses));
	}

	function active_course(){
		$active = new Model\Courses\Active;
		$active = $active->activeCourse($_POST['id_courses'], $_SESSION['user']['id'], $_POST['active_token']);
	}

	
	/**
	* Home
	*/

	function home()
	{
		$course = new Model\Courses\Course;
		$courses = $course->getCourseJoinAuthor();
		$category = $course->selectCategory();
		echo $this->view->render('index', array('courses' => $courses, 'category' => $category));
	}

	function get_category(){
		$course = new Model\Courses\Course;
		$category = $course->selectCategory();
		$data = array(
			'category' => $category
		);
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($data);
	}

	/**
	* About
	*/

	function about()
	{
		//$db = new model\database\dbconnect($this->config);
		return $this->view->render('about-us', array('foo' => 'bar'));
		// echo $this->view->render('course', array('foo' => 'bar'));

	}

	/**
	* Cart
	*/

	function create_cart()
	{

		$create_cart = new Model\Cart\Cart;
		$create_cart = $create_cart->create_cart($_POST['id_course'], 1);
		echo $create_cart;
		//header('Content-Type: application/json; charset=utf-8');
		//echo $json = json_encode($create_cart);
		//echo $this->view->render('cart', array('create_cart' => $create_cart));
	}

	function remove_cart(){
		$remove_cart = new  Model\Cart\Cart;
		$remove_cart = $remove_cart->remove_cart($_POST['id_course']);
		// $price_remove = array(
		// 	'price' => $remove_cart
		// );
		// header('Content-Type: application/json; charset=utf-8');
		// echo $json = json_encode($price_remove);
	}

	function update_cart(){
		$update_cart = new  Model\Cart\Cart;
		$update_cart = $update_cart->update_cart($_POST['id_course'], $_POST['quantity']);
		$quantity = array(
			'quantity' => $update_cart
		);
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($quantity);	
	}

	function cart()
	{
		echo $this->view->render('cart', array('foo' => 'bar'));
	}

	function pay_course(){
		$this->create_cart();
		$this->paypal_total();
	}

	// payment wwith paypal
	function paypal_total()
	{
		$paypal = new Model\Cart\Paypal;
		$get_link = $paypal->paypal($this->apiContext, $this->config['paypal']['success'], $this->config['paypal']['cancel']);

		$link = array(
			'link' => $get_link
		);
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($link);	
	}

	function paypal_success()
	{
		if (isset($_GET['uri']) && $_GET['uri'] == 'paypal-success' && $_GET['paymentId']) {
			
		    $paymentId = $_GET['paymentId'];
		    $payment = Payment::get($paymentId, $this->apiContext);

		    $execution = new \PayPal\Api\PaymentExecution();
		    $execution->setPayerId($_GET['PayerID']);


		    $transaction = new \PayPal\Api\Transaction();
		    $amount = new \PayPal\Api\Amount();
		    $details = new \PayPal\Api\Details();

		    
	    	$details->setShipping(0)
			        ->setTax(0)
			        ->setSubtotal($_SESSION['total_price_usd']);

		    $amount->setCurrency('USD');
		    $amount->setTotal($_SESSION['total_price_usd']);
		    $amount->setDetails($details);
		    $transaction->setAmount($amount);
		    
		    

		    $execution->addTransaction($transaction);

		    // $transactions = $payment->getTransactions();
		    // $transaction = $transactions[0];
		    // $relatedResources = $transactions->getRelatedResources();
		    // $relatedResource = $relatedResources[0];
		    // $order = $relatedResource->getOrder();

		   	$this->create_order($payment);

		   	$course = new Model\Courses\Active();
		   	$course->send();

		    echo $this->view->render('order', array('payment' => $payment));
		    // return $payment;
		    //exit();
		} else {
			echo $this->view->render('404');
		    //ResultPrinter::printResult("User Cancelled the Approval", null);
		    // exit;
		}
	}

	function paypal_cancel()
	{	
		if (isset($_GET['uri']) && $_GET['uri'] == 'paypal-cancel') {
			echo $this->view->render('cart');
		}
	}

	/**
	* Order
	*/

	function create_order($payment)
	{
		$_SESSION['order']['time'] = $payment->create_time;
		$_SESSION['order']['order_code'] = $payment->id;
		$order = new Model\Cart\Order;
		$order->create_order($_SESSION['user']['id'], $_SESSION['order']['order_code'], $_SESSION['order']['time']);
		//unset($_SESSION['order']);
		
	}

	function unset_order(){
		unset($_SESSION['cart_item'],$_SESSION['total_price'], $_SESSION['total_price_usd']);
	}

	/**
	* Category
	*/

	function category()
	{
		// $category = new model\courses\Course;
		// $categories = $category->selectCategory();
		echo $this->view->render('category', array('foo' => 'bar'));
	}

	/**
	* Content Course
	*/

	// function content_course(){
	// 	echo $this->view->render('content-course', array('foo' => 'bar'));
	// }

	function content_course_lession($slug)
	{

		$courses = new Model\Courses\Course;
		$course = $courses->getCourseSlug($slug);

		$infoCourse = new Model\Courses\Course;
		$infoCourse = $infoCourse->getInfoCourseId($course[0]['id_courses']);
		
		$note = $courses->showNote($course[0]['id_courses'], $_SESSION['user']['id']);
		
		$link = $courses->getLink( $_SESSION['user']['id'],$course[0]['id_courses']);

		if (count($course) == 0) {
			echo $this->view->render('404');
		}else{
			echo $this->view->render('content-course', array('course' => $course, 'infoCourse' => $infoCourse, 'note' => $note, 'link' => $link));
		}
		
	}

	function video_lession(){
		$courses = new  Model\Courses\Course;
		$course = $courses->getVideoLession($_POST['id_lession']);
		$get_data = array(
			'video_lession' => $course
		);
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($get_data);
	}

	/**
	* Course
	*/

	function course($slug)
	{

		$courses = new Model\Courses\Course;
		$course = $courses->getCourseSlug($slug);

		$infoCourse = new Model\Courses\Course;
		$infoCourse = $infoCourse->getInfoCourseId($course[0]['id_courses']);

		$comment = $courses->commentCourse($course[0]['id_courses']);

		// $userCourse = new Model\Users\Users;

		// if(isset($_SESSION['user'])){
		// 	$userCourse = $userCourse->checkUserHasCourse($_SESSION['user']['id']);
		// }
		

		if (count($course) == 0) {
			echo $this->view->render('404');
		}else{
			echo $this->view->render('course', array('course' => $course, 'infoCourse' => $infoCourse, 'comment' => $comment));
		}
		
	}


	/**
	* Faq
	*/

	function faq()
	{
		echo $this->view->render('faq', array('foo' => 'bar'));
	}

	/**
	* History
	*/

	function history()
	{
		echo $this->view->render('history', array('foo' => 'bar'));
	}

	/**
	* Payment
	*/

	function payment()
	{
		echo $this->view->render('payment', array('foo' => 'bar'));
	}

	/**
	* Policy
	*/

	function policy()
	{
		echo $this->view->render('policy', array('foo' => 'bar'));
	}

	/**
	* Teacher
	*/

	function teacher()
	{
		echo $this->view->render('teacher', array('foo' => 'bar'));
	}

	/**
	* User Course
	*/

	function user_course()
	{	
		$course = new Model\Users\Users;
		$category = new Model\Courses\Course;
		$categories = $category->selectCategory();
		$course = $course->getCourseCategories($_SESSION['user']['id']);
		
		echo $this->view->render('user-course', array('course' => $course, 'categories' => $categories));
	}



	/**
	* User
	*/

	function user()
	{
		echo $this->view->render('user', array('foo' => 'bar'));
	}


	/**
	* search
	*/

	function search()
	{
		return $this->view->render('search', array('foo' => 'bar'));
	}


	/**
	* Count Down
	*/

	function countdown()
	{
		$db = new Model\Database\Dbconnect($this->config);
		$select = "SELECT * FROM _coupon";
		$result = $db->query($select);
		$get_data = array();
		foreach ($result as $data) {
			// thêm phần tử vào cuối mảng $get_data[]
			if($data['active'] == 1 ){
				array_push($get_data, $data);
			}
			//var_dump($data);
		}
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($get_data);
		//return $json;
	}


	/**
	* Admin
	*/

	function admin()
	{
			echo $this->view->render('index@admin', array('foo' => 'bar'));
	}

	function login_user()
	{
		
		$get_user = new Model\Users\Users;
		$get_user = $get_user->getUserInstantName($_POST['username'], $_POST['password']);

		$user = new Model\Users\Users;
		$user = $user->loginUser($_POST['username'] , $_POST['password']);
		
		//check row from select query
		if($user == 1 && $get_user[0]['user_active'] == 1){
			$_SESSION['user'] = array(
				'id' => $get_user[0]['id_user'],
				'username' => $_POST['username'],
				'password' => $_POST['password'],
				'email' => $get_user[0]['user_email'],
				'address' => $get_user[0]['user_address'],
				'phone' => $get_user[0]['user_phone'],
				'active' => $get_user[0]['user_active']
			);

			$get_data = array(
				'login' => 'success',
				'username' => $_SESSION['user']['username']
			);
			header('Content-Type: application/json; charset=utf-8');
			echo $json = json_encode($get_data);
		}else{
			//echo $this->view->render('login@admin', array('foo' => 'bar'));
			$get_data = array(
				'login' => 'Tài khoản có thể chưa được kích hoạt hoặc chưa đăng ký'
			);
			header('Content-Type: application/json; charset=utf-8');
			echo $json = json_encode($get_data);
		}
	}

	function logout_user()
	{
		$_SESSION['user'] = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);

		unset($_SESSION['user'], $_SESSION['cart_item'],$_SESSION['total_price'], $_SESSION['total_price_usd']);
		echo $this->view->render('index');
	}

	function register_user(){
		parse_str($_POST['data'], $user);
		$add_user = new Model\Users\Users;
		$add_user = $add_user->addUser($user['username'],$user['email'],$user['password']);
		//var_dump($add_user);
		$sendMailActive = new Model\Users\Active;
		$sendMailActive->sendEmailButton($user['email']);
		$get_data = array(
			'register' => $add_user
		);
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($get_data);
	}

	function update_user(){
		$update_user = new Model\Users\Users;
		$update_user->userUpdate($_SESSION['user']['id'], $_POST['email'], $_POST['phone'], $_POST['password']);
		unset($_SESSION['user']['user_phone']);
		$get_user = new Model\Users\Users;
		$get_user = $get_user->getUserInstant($_SESSION['user']['id']);

		//var_dump($get_user);
		$_SESSION['user'] = array(
			'id' => $get_user[0]['id_user'],
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'email' => $get_user[0]['user_email'],
			'address' => $get_user[0]['user_address'],
			'phone' => $get_user[0]['user_phone']
		);
		
		header('Location:../user');
	}

	function view_payment(){
		if(isset($_SESSION['user'])){
			$action = array(
				'action' => 'payment'
			);
		}else{
			$action = array(
				'action' => 'login'
			);
		}
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($action);
	}


	/*
	** Active User
	*/
	function activeUser()
	{
		$_SESSION['user'] = array(
			'user_id' => $_POST['user_id'],
			'user_token' => $_POST['user_token'],
			'user_email' => $_POST['user_email']
		);

		$user = new Model\Users\Active;

		$user_email = $user->selectUserActive($_SESSION['user']['user_email']);
		$get_alert = array(
			'alertSuccess' => 'Email sent successfully',
			'alertError' => 'Email have been sent'
		);

		if($user_email){
			$user = $user->activeUser($_SESSION['user']['user_id'],$_SESSION['user']['user_email'],$_SESSION['user']['user_email']);
			
			echo json_encode($get_alert['alertSuccess']);
			
		}else{
			echo json_encode($get_alert['alertError']);
		}
		
	}	

	/**
	* Search
	*/
	function searchResult()
	{
		
			$search = new Model\Courses\Course;
			$category = $search->selectCategory();
			
			if(isset($_GET['param'])){
				echo $this->view->render('search', array('category' => $category));
			}

			if(isset($_POST['searchText']) && !empty($_POST['searchText'])){
				$searches = $search->searchCourse($_POST['searchText']);	
			
			// foreach($search as $key => $value ){
				
			// }
				echo $this->view->render('search', array('searches' => $searches, 'category' => $category));
			}else{
			
				$alert = "No result found";
				echo $this->view->render('search', array('alert' => $alert, 'category' => $category));
			}

		
	}


	/**
	* Category result
	*/
	function categoryResult()
	{
		
			$search = new Model\Courses\Course;
			$category = $search->selectCategory();
			$showAll = $search->getAllCourse();
			
			if(isset($_GET['param'])){
				$showCategory = $search->selectShowCategory($_GET['param']);
				// var_dump ($showCategory);
				echo $this->view->render('category', array('category' => $category, 'showAllCategory' => $showCategory));
				
			}else{
				echo $this->view->render('category', array( 'showAll' => $showAll ,'category' => $category));
			}
		
	}


	/**
	* Email Active
	*/
	function emailActive()
	{
		$emailActive = new Model\Courses\Active();
		$value = $emailActive->emailCoupon($_POST['email'], $_POST['fullname'], $_POST['phone']);
		//echo $value;
		if($value == true){
			$get_data = array(
				'success' => 'mail sent success',
			);
			
			header('Content-Type: application/json; charset=utf-8');
			
			echo $json = json_encode($get_data);
		}
		
		// echo $json;
	}

	/**
	* Categories search
	*/

	function categorySearch()
	{
		$courses = new Model\Courses\Course;
		$course = $course->searchCourseByCategory();
		$get_data = [];
		$get_data = $course;
		header('Content-Type: application/json; charset=utf-8');
		$json = json_encode($get_data);
		echo $json;
	}

	/**
	* Email Subrice
	*/
	function emailSub()
	{
		if(isset($_POST['email'])){
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$emails = new Model\Email\Subcribe;
				$email = $emails->subcribeMail($_POST['email']);
				$alert = "Email gửi thành công. Cảm ơn các bạn đã quan tâm đến e-learning";
				header('Content-Type: application/json; charset=utf-8');
				$json = json_encode($alert);
				echo $json;
			}else{
				echo $alert = "Email gặp sự cố !!!";
				header('Content-Type: application/json; charset=utf-8');
				$json = json_encode($alert);
				echo $json;
			}
		}
		
	}

	/**
	* Kích hoạt người dùng
	*/
	function userActive()
	{
		if(isset($_GET['codeActive']) && isset($_GET['emailActive'])){
			$active = new Model\Users\Active;
			$check = $active->checkUserActive($_GET['emailActive']);
			if($check){
				$actives = $active->activeUser($_GET['emailActive'], $_GET['codeActive']);
				echo $this->view->render('index');
			}else{
				echo $this->view->render('index');
			}
			
		}
	}

	function addComment()
	{
		$comment = new Model\Courses\Course();
		if(isset($_SESSION['user']['id'])){
			if(isset($_POST['content']) && isset($_POST['id_course']) && trim($_POST['content'] && !empty($_POST['content']))){
				$comments = $comment->addComment($_POST['content'], $_POST['id_course'], $_SESSION['user']['id'], $_POST['rank'] );
				
				$select = $comment->getLastComment();
				
				$show = $comment->comment($select[0]['id_comment']);

				$rank = explode ( '.', $show[0]['comment_rank'] );
				$icons = '';
				// CODE RANK 
				for($i = 0 ; $i < $rank[0] ; $i++){
					for($j = 0 ; $j < $rank[0] ; $j++){
						$icons .= "<i class='fa fa-star'></i>";
					}
					if(isset($rank[1]) && $rank[1] == '5')
						$icons .= "<i class='fa fa-star-half-o'></i>";
						
					break;
				}

				$html = "<div class='col-md-1'>
							<img class='img-fluid rounded-circle' src='public/images/". $show[0]['image'] ."'>
						</div>
						<div class='col-md-11'>
							<div>
								<h6 class='font-weight-bold'>" . $show[0]['user_name'] . "- <span class='color999'>" . $show[0]['comment_date'] . "</span></h6>
								<div class='el_box_icon_star'>
								". $icons ."
								</div>
								<p>" . $show[0]['comment_content'] . "</p>
							</div>
						</div>";
				echo $html;
				
				
			}	
		}else{
			$error = array("Vui lòng đăng nhập để bình luận");
			header('Content-Type: application/json; charset=utf-8');
			$json = json_encode($error);
			echo $json;
		}	
		
	}

	/**
	**	Ghi chú khóa học
	**/
	function insertNote()
	{
		$note = new Model\Courses\Course();
		if(isset($_POST['id_course']) && isset($_POST['content'])){
			$notes = $note->insertNote($_POST['content'],$_POST['id_course'], $_SESSION['user']['id']);
			$showNote = $note->getLastNote();
			echo $html = "<div class='mt-4 mb-3'>
			
					<span>Ngày Ghi Chú: ". $showNote[0]['date_note'] ." </span><i class='fa fa-times fa-fw pull-right size'></i>
					<p>". $showNote[0]['note_content']. "</p>
					
					<div class='clearfix'></div>
					</div>";
			// header('Content-Type: application/json; charset=utf-8');
			// $json = json_encode($html);
			// echo $json;
		}
	}

	function deleteNote()
	{
		$note = new Model\Courses\Course();
		if(isset($_POST['id_note'])){
			$delete = $note->deleteNote($_POST['id_note']);
		}
	}


}

