<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../app/Core/Ajax.php';
use App\Core\View;

//test
// $course = new model\courses\Course;
// $course->getCourse();


/**
* AdminController
*/
class AdminController
{
	private $view;
	private $config = array();
	function __construct()
	{
		$view = new View;
		$this->view = $view;

		$config = require __DIR__ .'/../config/config.php';
		$this->config = $config;
		//var_dump($config);
	}

	function view_login_admin(){
		unset($_SESSION['admin']);
		echo $this->view->render('login@admin', array('foo' => 'bar'));
	}

	function view_dashboard(){
		if(isset($_SESSION['admin'])){
			$courses = new  Model\Courses\Course;
			$authors = $courses->getAuthor();
			$categories = $courses->getCategory();

			echo $this->view->render('dashboard@admin', array(
								'authors' => $authors,
								'categories' => $categories
			));
		}
		else
			echo $this->view->render('404', array('foo' => 'bar'));

	}

	function login_dashboard(){
		$_SESSION['admin'] = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);

		$admin = new Model\Users\Users;
		$admin = $admin->loginAdmin($_SESSION['admin']['username'] , $_SESSION['admin']['password']);

		//check role admin, ajax data
		if($admin == 1){
			$get_data = array(
				'login' => 'success'
			);
			header('Content-Type: application/json; charset=utf-8');
			echo $json = json_encode($get_data);
		}else{
			//echo $this->view->render('login@admin', array('foo' => 'bar'));
			$get_data = array(
				'login' => 'fail'
			);
			header('Content-Type: application/json; charset=utf-8');
			echo $json = json_encode($get_data);
		}
			
	}

	//get all courses
	function showCourses(){
		$courses = new  Model\Courses\Course;
		$courses = $courses->getCourseJoinAuthor();

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($courses);
	}

	// delete course
	function DeleteCourse(){
		$id_course = $_POST['id_course'];

		$courses = new Model\Courses\Course;

		$delete_courses = $courses->deleteCourse($id_course);

		$alert = array(
			'alert' => 'Delete Success'
		);

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($alert);

	}

	function GetCourse(){
		$id = $_POST['id_course'];

		$course = new  Model\Courses\Course;

		$course = $course->getCourse($id);

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($course);

	}

	// update course
	function UpdateCourse(){
		$id_course = $_POST['id_course'];
		$course_name = $_POST['course_name'];
		$course_gallery = $_POST['course_gallery'];
		$course_describe = $_POST['course_describe'];
		$course_slug = $_POST['course_slug'];
		$course_token = $_POST['course_token'];
		$id_categories = $_POST['id_categories'];
		$id_authors = $_POST['id_authors'];
		$course_price = $_POST['course_price'];
		$course_start = $_POST['course_start'];

		$courses = new  Model\Courses\Course;

		$update_course = $courses->updateCourse($id_course, $course_name, $course_gallery, $id_authors, $course_price, $course_describe, $course_slug, $course_token, $id_categories);

	}


	// add course
	function AddCourse(){
		$course_name = $_POST['course_name'];
		$course_gallery = $_POST['course_gallery'];
		$course_describe = $_POST['course_describe'];
		$course_slug = $_POST['course_slug'];
		$id_categories = $_POST['id_categories'];
		$id_authors = $_POST['id_authors'];
		$course_price = $_POST['course_price'];
		// header('Content-Type: image/png');
		// echo $course_gallery;

		$courses = new  Model\Courses\Course;

		$add_course = $courses->addCourse($course_name, $course_gallery, $id_authors, $course_price, $course_describe, $course_slug, $id_categories);

		//if($add == true){
			$alert = array(
				'alert' => 'Add Success'
			);
		//}
		

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($alert);
	}

	function edit_course($slug){
		$courses = new Model\Courses\Course;
		$course = $courses->getCourseSlug($slug);

		$part_course = $courses->get_part($course[0]['id_courses']);

		echo $this->view->render('option@admin', array('course' => $course, 'part_course' => $part_course));
	}

	function add_part_course(){
		$courses = new Model\Courses\Course;
		$courses->add_part_course($_POST['part_name'], $_POST['id_course']);

		$alert = array(
			'alert' => 'Add Success'
		);
		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($alert);
	}

	function add_lesson_course(){
		$courses = new Model\Courses\Course;
		$course = $courses->add_lesson($_POST['lesson'], $_POST['id_course'], $_POST['id_part']);

		$alert = array(
			'alert' => 'Add Success'
		);
		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($alert);

	}

}



?>
