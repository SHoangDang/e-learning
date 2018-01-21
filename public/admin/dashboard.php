<!-- Admin write by SHD -->
<!-- Need to add header , footer to template -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="public/admin/plugins/images/favicon.png">
    <title>Admin Manager</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="public/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- morris CSS -->
    <!-- <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet"> -->
    <!-- animation CSS -->
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
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
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="public/admin/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>hospital</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="public/admin/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="public/admin/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="public/admin/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="public/admin/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="public/admin/plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION['admin']['username']; ?></b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i>  My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="login-admin"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>

                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.html" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-envelope p-r-10"></i> <span class="hide-menu"> Mailbox <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">6</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="inbox.html">Inbox</a></li>
                            <li> <a href="inbox-detail.html">Inbox detail</a></li>
                            <li> <a href="compose.html">Compose mail</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Professional</li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctor-schedule.html">Doctor Schedule</a> </li>
                            <li> <a href="book-appointment.html">Book Appointment</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Doctors <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="doctors.html">All Doctors</a> </li>
                            <li> <a href="add-doctor.html">Add Doctor</a> </li>
                            <li> <a href="edit-doctor.html">Edit Doctor</a> </li>
                            <li> <a href="doctor-profile.html">Doctor Profile</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="patients.html">All Patients</a> </li>
                            <li> <a href="add-patient.html">Add Patient</a> </li>
                            <li> <a href="edit-patient.html">Edit Patient</a> </li>
                            <li> <a href="patient-profile.html">Patient Profile</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payment-report.html">Payment Report</a></li>
                            <li> <a href="income-report.html">Income Report</a></li>
                            <li> <a href="sales-report.html">Sales Report</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="payments.html">Payments</a></li>
                            <li> <a href="add-payments.html">Add Payment</a></li>
                            <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                        </ul>
                    </li>
                    <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="fontawesome.html">Font awesome</a> </li>
                            <li> <a href="themifyicon.html">Themify Icons</a> </li>
                            <li> <a href="simple-line.html">Simple line Icons</a> </li>
                            <li><a href="linea-icon.html">Linea Icons</a></li>
                            <li><a href="weather.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- Extra Components</li>
                    <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html">Panels and Wells</a></li>
                            <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                            <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="date-paginator.html">Date Paginator</a></li>
                            <li><a href="sweatalert.html">Sweat alert</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="grid.html">Grid</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="tab-stylish.html">Stylish Tabs</a></li>
                            <li><a href="modals.html">Modals</a></li>
                            <li><a href="progressbars.html">Progress Bars</a></li>
                            <li><a href="notification.html">Notifications</a></li>
                            <li><a href="carousel.html">Carousel</a></li>
                            <li><a href="list-style.html">List & Media object</a></li>
                            <li><a href="user-cards.html">User Cards</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
                            <li><a href="nestable.html">Nesteble</a></li>
                            <li><a href="range-slider.html">Range Slider</a></li>
                            <li><a href="ribbons.html">Ribbons</a></li>
                            <li><a href="steps.html">Steps</a></li>
                            <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                            <li><a href="session-timeout.html">Session Timeout</a></li>
                            <li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>
                            <li><a href="bootstrap.html">Bootstrap UI</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="ti-files fa-fw
                              "></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html">Starter Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="javascript:void(0)" class="waves-effect">Email Templates
            <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="../email-templates/basic.html">Basic</a></li>
                                    <li><a href="../email-templates/alert.html">Alert</a></li>
                                    <li><a href="../email-templates/billing.html">Billing</a></li>
                                    <li><a href="../email-templates/password-reset.html">Reset Pwd</a></li>
                                </ul>
                            </li>
                            <li><a href="lightbox.html">Lightbox Popup</a></li>
                            <li><a href="treeview.html">Treeview</a></li>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="utility-classes.html">Utility Classes</a></li>
                            <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="login2.html">Login v2</a></li>
                            <li><a href="animation.html">Animations</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="register2.html">Register v2</a></li>
                            <li><a href="register3.html">3 Step Registration</a></li>
                            <li><a href="recoverpw.html">Recover Password</a></li>
                            <li><a href="lock-screen.html">Lock Screen</a></li>
                            <li><a href="400.html">Error 400</a></li>
                            <li><a href="403.html">Error 403</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="500.html">Error 500</a></li>
                            <li><a href="503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layout</a></li>
                            <li><a href="form-advanced.html">Form Addons</a></li>
                            <li><a href="form-material-elements.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Form Float Input</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-img-cropper.html">Image Cropping</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-pickers.html">Form-pickers</a></li>
                            <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                            <li><a href="form-wizard.html">Form-wizards</a></li>
                            <li><a href="form-typehead.html">Typehead</a></li>
                            <li><a href="form-xeditable.html">X-editable</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                            <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                        </ul>
                    </li>
                    <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic-table.html">Basic Tables</a></li>
                            <li><a href="table-layouts.html">Table Layouts</a></li>
                            <li><a href="data-table.html">Data Table</a></li>
                            <li class="hidden"><a href="crud-table.html">Crud Table</a></li>
                            <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                            <li><a href="responsive-tables.html">Responsive Tables</a></li>
                            <li><a href="editable-tables.html">Editable Tables</a></li>
                            <li><a href="foo-tables.html">FooTables</a></li>
                            <li><a href="jsgrid.html">JsGrid Tables</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- Support</li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                <ul classimages0="nav nav-third-level">
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="hide-menu">
                        <a href="javacript:void(0);"> <span>Progress Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div> <span>Leads Report</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->

        <!-- alert -->
        <div id="alertbottomright" class="myadmin-alert alert-info myadmin-alert-bottom-right"> 
            <a href="#" class="closed">&times;</a>
            <h4 class="text-center" id="alert-delete"></h4>
        </div>

        <div id="alertAddSuccess" class="myadmin-alert alert-info myadmin-alert-bottom-right"> 
            <a href="#" class="closed">&times;</a>
            <h4 class="text-center" id="alert-add"></h4>
        </div>

        <div id="alertUpdateSuccess" class="myadmin-alert alert-info myadmin-alert-bottom-right"> 
            <a href="#" class="closed">&times;</a>
            <h4 class="text-center" id="alert-update"></h4>
        </div>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Hospital Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="images0index.html">Hospital</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-user bg-megna"></i>
                                <div class="bodystate">
                                    <h4>370</h4> <span class="text-muted">New Patient</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-shopping-cart bg-info"></i>
                                <div class="bodystate">
                                    <h4>342</h4> <span class="text-muted">OPD Patient</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-wallet bg-success"></i>
                                <div class="bodystate">
                                    <h4>13</h4> <span class="text-muted">Today's Ops.</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats"> <i class="ti-wallet bg-inverse"></i>
                                <div class="bodystate">
                                    <h4>$34650</h4> <span class="text-muted">Hospital Earning</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->

                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h3 class="box-title m-b-0">All Courses</h3>
                                    <p class="text-muted">this is the sample data here for crm</p>
                                </div>
                                <div class="col-sm-2">
                                    <button data-toggle="modal" data-target=".add-responsive-modal" type="button" class="btn btn-primary pull-right">Add Course</button>
                                    <div class="clearfix"></div>
                                </div>

                                <!-- add modal content -->
                                    <div id="add-responsive-modal" class="add-responsive-modal modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" style="overflow: scroll; ">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Add Course</h4> 
                                                </div>
                                                <div class="modal-body">
                                                    <form id="form-modal-course" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <input type="hidden" id="id_course" value="">
                                                            <label for="add-course-gallery" class="control-label">Course Gallery:</label>
                                                           <div class="white-box">
                                                                <h3 class="box-title">Change Image</h3>
                                                                <label for="course-gallery">You can add a default value</label>
                                                                <input type="file" name="course-gallery" id="add-course-gallery" class="dropify" data-default-file="" /> 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-course-name" class="control-label">Course Name:</label>
                                                            <input type="text" class="form-control" id="add-course-name" value=""> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-course-price" class="control-label">Course Price:</label>
                                                            <input type="text" class="form-control" id="add-course-price"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-course-describe" class="control-label">Course Describe:</label>
                                                            <textarea class="form-control" id="add-course-describe"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-id-categories" class="control-label">Categories:</label>
                                                            <select class="form-control" id="add-id-categories">
                                                                <option>Please choose category</option>
                                                                <?php 
                                                                    $save_categories = array();
                                                                    $save_authors = array();

                                                                    foreach ($categories as $category) :
                                                                    array_push($save_categories,$category);
                                                                ?>
                                                                <option value="<?php echo $category['id_categories'];  ?>">
                                                                    <?php echo $category['category_name'];  ?>
                                                                </option>
                                                                <?php 
                                                                    endforeach;
                                                                ?>
                                                            </select> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-id-author" class="control-label">Author:</label>
                                                            <select class="form-control" id="add-id-author">
                                                                <option>Please choose author</option>
                                                                <?php 
                                                                    foreach ($authors as $author) :
                                                                    array_push($save_authors,$author);
                                                                ?>
                                                                <option value="<?php echo $author['id_authors'];  ?>">
                                                                    <?php echo $author['author_name'];  ?>
                                                                </option>
                                                                <?php 
                                                                    endforeach;
                                                                ?>
                                                            </select> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-course-slug" class="control-label">Course Slug:</label>
                                                            <input type="text" class="form-control" id="add-course-slug"> 
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button data-dismiss="modal" type="button" class="btn btn-danger waves-effect waves-light add-action">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->
                            </div>
                            

                            <div class="table-responsive">
                                <table class="table" id="table_course">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course Gallery</th>
                                            <th>Course Name</th>
                                            <th>Course Price</th>
                                            <th>Author</th>
                                            <th>Course Start Day </th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content-course">
                                        
                                    </tbody>

                                    <!-- sample modal content -->
                                    <div id="responsive-modal" class="responsive-modal modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" style="overflow: scroll; ">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Update Course</h4> 
                                                </div>
                                                <div class="modal-body">
                                                    <form id="form-modal-course">
                                                        <div class="form-group">
                                                            <input type="hidden" id="id_course" value="">
                                                            <label for="course-gallery" class="control-label">Course Gallery:</label>
                                                           <div class="white-box">
                                                                <h3 class="box-title">Change Image</h3>
                                                                <label for="course-gallery">You can add a default value</label>
                                                                <input type="file" id="course-gallery" class="dropify" data-default-file="" /> 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="course-name" class="control-label">Course Name:</label>
                                                            <input type="text" class="form-control" id="course-name" value=""> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="course-price" class="control-label">Course Price:</label>
                                                            <input type="text" class="form-control" id="course-price"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="course-describe" class="control-label">Course Describe:</label>
                                                            <textarea class="form-control" id="course-describe"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id-categories" class="control-label">Categories:</label>
                                                            <select class="form-control" id="id-categories">
                                                                <option>Please choose category</option>
                                                                <?php 
                                                                    foreach ($save_categories as $category) :
                                                                   
                                                                ?>
                                                                <option value="<?php echo $category['id_categories'];  ?>">
                                                                    <?php echo $category['category_name'];  ?>
                                                                </option>
                                                                <?php 
                                                                    endforeach;
                                                                ?>
                                                            </select> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id-author" class="control-label">Author:</label>
                                                            <select class="form-control" id="id-authors">
                                                                <option>Please choose author</option>
                                                                <?php 
                                                                    foreach ($save_authors as $author) :
                                                                ?>
                                                                <option value="<?php echo $author['id_authors'];  ?>">
                                                                    <?php echo $author['author_name'];  ?>
                                                                </option>
                                                                <?php 
                                                                    endforeach;
                                                                ?>
                                                            </select> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="course-slug" class="control-label">Course Slug:</label>
                                                            <input type="text" class="form-control" id="course-slug"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="course-token" class="control-label">Course Token:</label>
                                                            <input type="text" class="form-control" id="course-token"> 
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" data-dismiss="modal" class="btn btn-danger waves-effect waves-light update-action">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="public/admin/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; FPT polytechnic </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="public/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/admin/bootstrap/dist/js/tether.min.js"></script>
    <script src="public/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/admin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="public/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="public/admin/js/jquery.slimscroll.js"></script>
    
    <script src="public/admin/js/custom.min.js"></script>

    <!--Style Switcher -->
    <script src="public/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<script src="public/admin/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez'
                , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                , remove: 'Supprimer'
                , error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            }
            else {
                drDestroy.init();
            }
        })
    });
</script>



<script type="text/javascript">
    $(document).ready(function(){
        
                        
        // close alert
        $(".myadmin-alert .closed").click(function (event) {
            $(this).parents(".myadmin-alert").fadeToggle(350);
            return false;
        });


        // run function get course
        get_course();

        function get_course(){
            // lấy dự liệu từ database và in biến ra 
            $.ajax({
                type: "POST",
                url: "controller/AdminController.php",
                data: { 
                    // note: ajax pass param to method of class Controller
                    name_controller : "AdminController",
                    method : "showCourses" 
                },
                success : function (response){

                    console.log(response);
                    //var a = JSON.parse(JSON.stringify(response));
                    //$('#test').html(a[].khoaId);

                    // vòng lặp xuất ra giá trị của mảng json
                    response.forEach(function(object){
                        // thêm thẻ option vào select với dữ liệu lấy từ database
                        $('#content-course').append(
                            '<tr course="'+object.id_courses+'">'+
                                '<td>'+object.id_courses+'</td>'+
                                '<td style="width:15%">'+'<img style="width:100%" src="public/images/'+object.course_gallery+'">'+'</td>'+
                                '<td>'+'<a href="dashboard/'+object.course_slug+'">'+object.course_name+'</a>'+'</td>'+
                                '<td>'+object.course_price+' đ</td>'+
                                '<td>'+object.author_name+'</td>'+
                                '<td>'+object.course_start_day+'</td>'+
                                '<td>'+
                                    '<span class="fa fa-wrench mr-3 update" data-toggle="modal" data-target=".responsive-modal"></span>'+
                                    '<span class="fa fa-close delete" value="'+object.id_courses+'"></span>'
                                +'</td>'+ 
                            '</tr>'
                        );

                        // run function delete
                        delete_course();
                        get_course_to_modal();
                    });
                    add_course();
                }
            })

        }

        // function delete course
        function delete_course(){
            $('.delete').click(function(){
                // var alert = $(this).next();
                var element = $(this).parent().parent();

                $.ajax({
                    type: "POST",
                    url: "controller/AdminController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "AdminController",
                        method : "DeleteCourse",
                        id_course : $(this).attr('value')
                        
                    },
                    success : function (response){
                        console.log(response);
                        element.fadeOut(function(){
                             /** Alert Position Bottom Right  **/
                            $("#alertbottomright").fadeToggle(350);
                            element.remove();
                        });

                        $('#alert-delete').html(response.alert);
                        
                    }
                })
            })
        }

        
        // get course to modal
        function get_course_to_modal(){
            $('.update').click(function(){
                // var alert = $(this).next();
                var element = $(this).next().attr('value');
                //alert(element);
                $.ajax({
                    type: "POST",
                    url: "controller/AdminController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "AdminController",
                        method : "GetCourse",
                        id_course : element
                    },
                    success : function (data){
                       // console.log(data[0].id_courses);
                        $('#id_course').attr('value', data[0].id_courses);
                        $('.dropify-filename-inner').html(data[0].course_gallery);
                        $('#course-name').val(data[0].course_name); 
                        $('#course-price').val(data[0].course_price); 
                        $('#course-describe').val(data[0].course_describe);
                        $('#course-slug').val(data[0].course_slug);
                        $('#course-token').val(data[0].course_token);

                        // setup selected for option id-categories
                        var get_tag_select_category = document.getElementById("id-categories");
                        var get_tag_option_category = get_tag_select_category.getElementsByTagName("option");
                        
                        for (i = 1; i < get_tag_option_category.length ; i++) 
                        {
                            if( get_tag_option_category[i].value == data[0].id_categories )
                            {
                                get_tag_option_category[i].selected = 'selected';
                                break;
                            }
                            
                        }

                        // setup selected for option id-authors
                        var get_tag_select_author = document.getElementById('id-authors');
                        var get_tag_option_author = get_tag_select_author.getElementsByTagName("option");
                        
                        for (x = 0; x < get_tag_option_author.length; x++) 
                        {
                            if(get_tag_option_author[x].value == data[0].id_authors)
                            {
                                get_tag_option_author[x].selected = 'selected';
                                break;
                            }
                        }

                        //$('#course-start').val(data[0].course_start_day);    
                            
                    }
                })
            })
        }


        update_course();

        // update course
        function update_course(){
            $('.update-action').click(function(){
                //var data = $('#form-modal-course').serialize();
                $.ajax({
                    type: "POST",
                    url: "controller/AdminController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "AdminController",
                        method : "UpdateCourse",
                        id_course : $('#id_course').val(),
                        course_name : $('#course-name').val(),
                        course_gallery : $('.dropify-filename-inner').html(),
                        course_describe : $('#course-describe').val(),
                        course_slug : $('#course-slug').val(),
                        course_token : $('#course-token').val(),
                        id_categories : $('#id-categories').val(),
                        id_authors : $('#id-authors').val(),
                        course_price : $('#course-price').val(),
                        course_start : $('#course-start').val()
                    },
                    success : function (response){
                        location.reload();
                    }
                })
            })
        }


        // add course
        //add_course();
        
        function add_course(){
            $('.add-action').click(function(){
                //var data = $('#form-modal-course').serialize();
                //alert($('#add-course-slug').val());

                // get date now
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();
                if(dd<10) {
                    dd = '0'+dd
                } 

                if(mm<10) {
                    mm = '0'+mm
                } 
                //$('.dropify-filename-inner').html()
                today = yyyy + '-' + mm + '-' + dd;
                $.ajax({
                    type: "POST",
                    url: "controller/AdminController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "AdminController",
                        method : "AddCourse",
                        course_name : $('#add-course-name').val(),
                        course_gallery : $('.dropify-render img').attr('src'),
                        course_describe : $('#add-course-describe').val(),
                        course_slug : $('#add-course-slug').val(),
                        id_categories : $('#add-id-categories').val(),
                        id_authors : $('#add-id-author option:selected').val(),
                        course_price : $('#add-course-price').val()
                    },
                    success : function (data){
                        console.log(data);
                        //location.reload();
                        $('#add-responsive-modal').fadeOut(function(){
                            $("#alertAddSuccess").fadeToggle(350);
                            $("#alert-add").html(data.alert);
                        });
                        $('#content-course tr:last').after(
                            '<tr>'+
                                '<td>'+($('#content-course tr').size()+1)+'</td>'+
                                '<td style="width:15%">'+'<img style="width:100%" src="public/images/'+$('.dropify-filename-inner').html()+'">'+'</td>'+
                                '<td>'+$('#add-course-name').val()+'</td>'+
                                '<td>'+$('#add-course-price').val()+'</td>'+
                                '<td>'+$('#add-id-author option:selected').text()+'</td>'+
                                '<td>'+today+'</td>'+
                                '<td>'+
                                    '<span class="fa fa-wrench mr-3 update" data-toggle="modal" data-target=".responsive-modal"></span>'+
                                    '<span class="fa fa-close delete" value="'+($('#content-course tr').size()+1)+'"></span>'
                                +'</td>'+
                            '</tr>'
                        );
                        get_course_to_modal();
                        delete_course();
                    }
                })
            })
        }
                
            

    })
</script>



</html>
