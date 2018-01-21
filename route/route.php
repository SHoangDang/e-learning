<?php
use App\Core\View;
use App\Core\Route;

$route = new Route;

Route::add('/', 'MainController::home');

Route::add('/about', 'MainController::about');

Route::add('/coupon', 'MainController::Coupon');

Route::add('/activation', 'MainController::view_activation');

if(isset($_GET['param'])){
	Route::add("/category/" . $_GET['param'], 'MainController::categoryResult');
}

Route::add("/active", 'MainController::userActive');

Route::add('/search', 'MainController::searchResult');

Route::add('/cart', 'MainController::cart');

Route::add('/category', 'MainController::categoryResult');

if(isset($_GET['param'])){
	Route::add("/content-course/".$_GET['param'] , 'MainController::content_course_lession');
}

// Route::add('/course', 'MainController::course');

Route::add('/faq' , 'MainController::faq');

Route::add('/history' , 'MainController::history');

Route::add('/payment' , 'MainController::payment');

Route::add('/policy' , 'MainController::policy');

Route::add('/teacher' , 'MainController::teacher');

// if(isset($_GET['param'])){
// 	Route::add("/user-course/".$_GET['param'] , 'MainController::course_user');
// }

Route::add("/user-course", 'MainController::user_course');

Route::add('/user' , 'MainController::user');

Route::add('/countdown' , 'MainController::countdown');

if(isset($_GET['param'])){
	Route::add("/course/".$_GET['param'] , 'MainController::course');
}

Route::add('/payment-action', 'MainController::paypal_total');

Route::add('/paypal-success', 'MainController::paypal_success');

Route::add('/paypal-cancel', 'MainController::paypal_cancel');


/* route admin */
Route::add('/login-admin' , 'AdminController::view_login_admin');

Route::add('/test' , 'AdminController::showCourses');

// Route::add('/dashboard' , 'AdminController::view_dashboard');

if(isset($_GET['param'])){
	Route::add("/dashboard/" . $_GET['param'], 'AdminController::edit_course');
}else{
	Route::add('/dashboard' , 'AdminController::view_dashboard');
}

$route->getRequestURL();
?>