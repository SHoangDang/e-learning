<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.ico">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/slick.css">
  <link rel="stylesheet" href="public/css/slick-theme.css">
  <link rel="stylesheet" href="public/css/animate.css">
  <link rel="stylesheet" href="public/css/styles.css">
  <link rel="stylesheet" href="public/css/responsive.css">
  <script src="public/js/jquery-3.2.1.min.js"></script>
  <script src="public/js/tether.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  
  <script src="public/js/scripts.js"></script>
  <script src="public/js/slick.min.js"></script>
  <title>E-Learning</title>
</head>
<body>
	<header id="header" class="el-header bg-inverse fixed-top" >
		<div class="container">
			<nav class="navbar navbar-toggleable-md navbar-inverse">
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		        <a class="navbar-brand" href="#">E-Learning<sup><i class="fa fa-copyright"></i></sup></a>
		        <div id="navbarNavDropdown" class="navbar-collapse collapse">
		            <ul class="navbar-nav mr-auto">
		                <li class="nav-item dropdown">
		                    <a class="nav-link dropdown-toggle text-uppercase" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                      chủ đề
		                    </a>
		                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		                        <a class="dropdown-item" href="#"><i class="fa fa-connectdevelop mr-2"></i> 3D+Animation</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-music mr-2"></i>  Audio+Music</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-pie-chart mr-2"></i> Business</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-paint-brush mr-2"></i> Design</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-code mr-2"></i> Developer</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-laptop mr-2"></i> It</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-line-chart mr-2"></i> Marketing</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-camera mr-2"></i> Photography</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-film mr-2"></i> Video</a>
		                        <a class="dropdown-item" href="#"><i class="fa fa-internet-explorer mr-2"></i> Web</a>
		                    </div>
		                </li>
		                <li>
		                	<div class="input-group group-search">
						      <input type="text" class="form-control" placeholder="Tìm kiếm...">
						      <span class="input-group-btn">
						        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
						      </span>
						    </div>
		                </li>	
		            </ul>
		            <ul class="navbar-nav">
		                <li class="nav-item pr-md-3 pt-2 pt-md-0">
		                    <a class="nav-link btn btn-warning text-white" href="#" >
								<i class="fa fa-shopping-cart"></i>
		                    </a>
		                </li>
		                <li class="nav-item dropdown pt-2 pt-md-0">
		                    <a class="nav-link btn btn-primary text-white dropdown-toggle" href="#" id="user-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i>
		                    </a>
		                    <div class="dropdown-menu" aria-labelledby="user-icon">	
								<a id="user-acc" class="dropdown-item" href="#"><i class="mr-2"></i>Tài khoản</a>
								<a class="dropdown-item" href="#"><i class="mr-2"></i>Sửa tài khoản</a>
		                    </div>
		                </li>
		            </ul>
		        </div>
    		</nav><!-- nav -->
		</div>
	</header><!-- /header -->
	<!-- Form Module-->
	<section class="popup-form">
		<div class="module form-module">
		  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
		    <div class="tooltip">Click Me</div>
		  </div>
		  <div class="form">
		    <h2>Đăng nhập tài khoản</h2>
		    <form>
		      <input type="text" placeholder="Tài khoản"/>
		      <input type="password" placeholder="Mật khẩu"/>
		      <button>Đăng nhập</button>
		    </form>
		  </div>
		  <div class="form">
		    <h2>Đăng ký tài khoản</h2>
		    <form>
		      <input type="text" placeholder="Tài khoản"/>
		      <input type="password" placeholder="Mật khẩu"/>
		      <input type="email" placeholder="Email"/>
		      <input type="tel" placeholder="Số điện thoại"/>
		      <button>Đăng ký</button>
		    </form>
		  </div>
		  <div class="cta">
		  	<a href="">Quên mật khẩu ?</a>
		  	<a href="javascript:void(0)" title="Thoát" id="exit">Thoát</a>
		  </div>
		</div>
		<div class="clearfix"></div>
	</section>