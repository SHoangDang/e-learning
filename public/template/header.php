<?php
	define('APP_PATH', dirname(__DIR__));
	// echo APP_PATH;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<base href="/e-learning/" />
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
	<script src="public/js/parsley.js"></script>
	<script src="public/js/scripts.js"></script>
	<script src="public/js/slick.min.js"></script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<title>E-Learning</title>
</head>
<body>
	<header id="header" class="el-header bg-inverse fixed-top" >
		<div class="container">
			<nav class="navbar navbar-toggleable-md navbar-inverse">
		        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		        <a class="navbar-brand" href="">E-Learning<sup><i class="fa fa-copyright"></i></sup></a>
		        <div id="navbarNavDropdown" class="navbar-collapse collapse">
		            <ul class="navbar-nav mr-auto">
		                <li class="nav-item dropdown">
		                    <a class="nav-link dropdown-toggle text-uppercase" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                      chủ đề
		                    </a>
		                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="list-category">
							<?php //foreach($category as $key => $value): ?>
		                        
							<?php //endforeach; ?> 
		                    </div>
		                    
		                </li>
		                <li>
							<form method="post" action="search">
								<div class="input-group group-search">
								
								<input type="hidden" class="form-control" placeholder="Tìm kiếm..." name="name_controller" value="MainController">
								<input type="hidden" class="form-control" placeholder="Tìm kiếm..." name="method" value="searchResult">
								<input type="text" class="form-control" placeholder="Tìm kiếm..." name="searchText">
								<span class="input-group-btn">
								<button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
							</span>
							
							</div>
							</form>
		                </li>	
		            </ul>
		            <ul class="navbar-nav">
		            	<li class="nav-item pr-md-3 pt-2 pt-md-0">
		            		<a href="activation" class="nav-link btn btn-default">Kích hoạt khóa học</a>
		            	</li>
		                <li class="nav-item pr-md-3 pt-2 pt-md-0">
		                    <a class="nav-link btn btn-warning text-white" href="cart" >
								<i class="fa fa-shopping-cart"></i>
		                    </a>
		                </li>
		                <li class="nav-item dropdown pt-2 pt-md-0">
		                    <a class="nav-link btn btn-primary text-white dropdown-toggle" id="user-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i>
								<span id="name-user">
									<?php 
										if(isset($_SESSION['user'])) echo $_SESSION['user']['username'] ;
									?>
								</span>
								
		                    </a>
		                    <div class="dropdown-menu" aria-labelledby="user-icon" id="menu-user">	
		                    	<?php if(!isset($_SESSION['user'])) : ?>
								<a id="user-acc" class="dropdown-item"><i class="mr-2"></i>Tài khoản</a>
								<?php endif; ?>

								<?php if(isset($_SESSION['user'])) : ?>
								<a class="dropdown-item" href="user-course"><i class="mr-2"></i>Khóa học của bạn</a>
								<a class="dropdown-item" href="user"><i class="mr-2"></i>Sửa tài khoản</a>
								<a class="dropdown-item" id="logout-user"><i class="mr-2"></i>Đăng xuất</a>
								<?php endif; ?>
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
		  <div class="form form-login">
		    <h2>Đăng nhập tài khoản</h2>
		    <span class="alert-login" style="color: red; font-size: 10px;"></span>
		    <form id="form1" data-parsley-validate>
		      <input type="text" id="user_name_info" placeholder="Tài khoản" data-parsley-required/>
		      <input type="password" id="password_info" placeholder="Mật khẩu" data-parsley-required/>
		      <input type="button" id="login" value="Đăng nhập"/>
		    </form>
		  </div>
		  <div class="form">
		    <h2>Đăng ký tài khoản</h2>
		    <span class="alert-register" style="color: red; font-size: 10px;"></span>
		    <form id="form-register" data-parsley-validate>
		      <input type="text" placeholder="Tài khoản" name="username" data-parsley-required data-parsley-maxlength="5"/>
		      <input type="password" placeholder="Mật khẩu" name="password" data-parsley-required data-parsley-minlength="3"/>
		      <input type="email" data-parsley-type="email" placeholder="Email" name="email" data-parsley-required/>
		      <input type="button" id="register" value="Đăng ký"/>
		    </form>
		  </div>
		  <div class="cta">
		  	<a href="">Quên mật khẩu ?</a>
		  	<a href="javascript:void(0)" title="Thoát" id="exit">Thoát</a>
		  </div>
		</div>
		<div class="clearfix"></div>
	</section>

	<script type="text/javascript">
        $(document).ready(function(){
        
			$.ajax({
				type: "POST",
				url: "controller/MainController.php",
				data: { 
					// note: ajax pass param to method of class Controller
					name_controller : "MainController",
					method : "get_category"
				},
				success : function (response){
					response.category.forEach(function(entry) {
						$('#list-category').append('<a class="dropdown-item" href="category/'+entry.category_slug+'"><i class="fa '+entry.icon+' mr-2"></i>'+ entry.category_name +'</a>');
					});
				}
			})
            // lấy dự liệu từ database và in biến ra 
            login();
            function login(){
	            $('#login').click(function(){
	            	if($('#form1').parsley().validate() == true){
		                $.ajax({
		                    type: "POST",
		                    url: "controller/MainController.php",
		                    data: { 
		                        // note: ajax pass param to method of class Controller
		                        name_controller : "MainController",
		                        method : "login_user",
		                        username: $('#user_name_info').val(),
		                        password: $('#password_info').val()
		                    },
		                    success : function (response){
		                        console.log(response);
		                        if(response.login == 'success'){
		                        	$('#non-active-course, #active-input, #active-action').prop("disabled",function(){
		                        		location.reload();
		                        	});

		                        	//create button cart and payment
		                        	$('#login-pay').css('display','none');
		                        	$( '<a class="mt-3 mb-3 flat-btn-or text-uppercase" id="buy-course"><i class="fa fa-shopping-cart"></i>Mua khóa học</a>' ).appendTo( $( "#button-option" ) );
		                        	$( '<a id="cart-course" class="mb-3 flat-btn-b pr-md-4 pr-4 pl-4 mt-2 text-uppercase"><i class="fa fa-plus"></i>Thêm vào giỏ hàng</a>' ).appendTo( $( "#button-option" ) );
		                        	create_cart();
		                        	
		                            $('#user-icon span').html(response.username);
		                            $('#exit').click();
		                            $( '<a class="dropdown-item" href="user-course"><i class="mr-2"></i>Khóa học của bạn</a>' ).appendTo( $( "#menu-user" ) );

		                            $( '<a class="dropdown-item" href="user"><i class="mr-2"></i>Sửa tài khoản</a>' ).appendTo( $( "#menu-user" ) );


		                            $( '<a class="dropdown-item" id="logout-user"><i class="mr-2"></i>Đăng xuất</a>' ).appendTo( $( "#menu-user" ) );
		                            $("#menu-user a:first-child").css('display','none');

		                            logout_user();
		                        }else{
		                            $('.alert-login').html(response.login);
		                        }
		                    }
		                })
		            }
	                // return false;
	            });
	        }

	        //create cart
	        create_cart();
	        function create_cart(){
	        	$('#cart-course').click(function(){
	                $.ajax({
	                    type: "POST",
	                    url: "controller/MainController.php",
	                    data: { 
	                        // note: ajax pass param to method of class Controller
	                        name_controller : "MainController",
	                        method : "create_cart",
	                        id_course : "<?php echo $result = isset($course) ? $course[0]['id_courses'] : null; ?>"
	                    },
	                    success : function (response){
	                    	//alert(response.alert);
	                        //console.log(response);
	                        $('#cart-alert .modal-body').html('Thêm vào giỏ hàng thành công');
	                        //window.location.assign("");
	                    }
	                })
	            });

	            $('#buy-course').click(function(){
	                $.ajax({
	                    type: "POST",
	                    url: "controller/MainController.php",
	                    data: { 
	                        // note: ajax pass param to method of class Controller
	                        name_controller : "MainController",
	                        method : "pay_course",
	                        id_course : "<?php echo $result = isset($course) ? $course[0]['id_courses'] : null; ?>"
	                    },
	                    success : function (response){
	                    	//alert(response.alert);
	                        // console.log(response);
	                        // $('#cart-alert .modal-body').html('');
	                        location.assign(response.link);
	                        //window.location.assign("");
	                    }
	                })
	            });
	        }

	        //logout user
            logout_user();
            function logout_user(){
            	$('#logout-user').click(function(){
	                $.ajax({
	                    type: "POST",
	                    url: "controller/MainController.php",
	                    data: { 
	                        // note: ajax pass param to method of class Controller
	                        name_controller : "MainController",
	                        method : "logout_user"
	                    },
	                    success : function (response){
	                        //console.log(response);
	                        window.location.assign("");
	                    }
	                })
	            });
            }



            $('#register').click(function(){
            	if($('#form-register').parsley().validate() == true){
            		$.ajax({
	                    type: "POST",
	                    url: "controller/MainController.php",
	                    data: { 
	                        // note: ajax pass param to method of class Controller
	                        name_controller : "MainController",
	                        method : "register_user",
	                        data : $('#form-register').serialize()
	                    },
	                    success : function (response){
	                        console.log(response);
	                        if(response.register == 'Có thể đăng ký'){
	                        	$('.alert-register').html('Đăng ký thành công');
	                        	setTimeout(function(){
	                        		$('.fa-times').click();
	                        		$('.alert-register').html('');
	                        	}, 300);

	                        }else{
	                        	$('.alert-register').html(response.register);
	                        }
	                    }
	                })
            	};
            	
            });
            
        })
    </script>
