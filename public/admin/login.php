<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="public/admin/plugins/images/favicon.png">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="public/admin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/admin/css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="public/admin/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform">
                    <a href="javascript:void(0)" class="text-center db"><img src="public/admin/plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                        <br/><img src="public/admin/plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>
                        
                    <div class="notice-login text-center pt-5" style="color: red"></div>

                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" id="username" type="text" required="" placeholder="Username"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" id="password" type="password" required="" placeholder="Password"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <!-- <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="action_login" type="submit">Log In</button> -->
                            <button type="button" class="btn btn-info btn-lg btn-block" id="action_login">Log In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="register2.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="public/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
  
    <script src="public/admin/js/jquery.slimscroll.js"></script>
    
    <script src="public/admin/js/custom.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            // lấy dự liệu từ database và in biến ra 
            $('#action_login').click(function(){
                $.ajax({
                    type: "POST",
                    url: "controller/AdminController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "AdminController",
                        method : "login_dashboard",
                        username: $('#username').val(),
                        password: $('#password').val()
                    },
                    success : function (response){
                        console.log(response);
                        if(response.login == 'success'){
                            window.location.assign("dashboard");
                        }else{
                            $('.notice-login').html('Login Fail');
                        }
                    }
                })
            });
        })
    </script>
    
</body>

</html>