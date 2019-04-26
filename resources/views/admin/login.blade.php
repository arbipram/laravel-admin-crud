<!DOCTYPE html>
<html>
    
<!-- Mirrored from stacksthemes.com/modern/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 13:52:50 GMT -->
<head>
        
        <!-- Title -->
        <title>Modern | Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="{{url('modern/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
        <link href="{{url('modern/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
        <link href="{{url('modern/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('modern/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('modern/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{url('modern/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{url('modern/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>	
        <link href="{{url('modern/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('modern/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="{{url('modern/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('modern/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{url('modern/css/custom.css')}}" rel="stylesheet" type="text/css"/>
        
        <script src="{{url('modern/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{url('modern/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Laravel Admin Crud</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                @if (\Session::has('gagal'))
                                    <div class="alert alert-warning">
                                        <ul>
                                            <li>{!! \Session::get('gagal') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                <form class="m-t-md" action="{{url('admin/login/validation')}}" method="post">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                    <!-- <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a> -->
                                    <!-- <p class="text-center m-t-xs text-sm">Do not have an account?</p> -->
                                    <!-- <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a> -->
                                </form>
                                <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="{{url('modern/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
        <script src="{{url('modern/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{url('modern/plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{url('modern/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{url('modern/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('modern/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{url('modern/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{url('modern/plugins/uniform/jquery.uniform.min.js')}}"></script>
        <script src="{{url('modern/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{url('modern/plugins/waves/waves.min.js')}}"></script>
        <script src="{{url('modern/js/modern.min.js')}}"></script>
        
    </body>

<!-- Mirrored from stacksthemes.com/modern/admin1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Feb 2019 13:52:50 GMT -->
</html>