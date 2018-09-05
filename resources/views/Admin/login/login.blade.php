<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('Admin/') }}/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('Admin/') }}/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('Admin/') }}/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('Admin/') }}/css/font.css" type="text/css"/>
    <link href="{{ asset('Admin/') }}/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('Admin/') }}/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        <form action="{{ url('login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
            </div>
            <div class="form-group">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            </div>
            <div>
                <span><input type="checkbox" />Remember Me</span>
                <h6><a href="#">Forgot Password?</a></h6>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign In" name="btn">
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('Admin/') }}/js/bootstrap.js"></script>
<script src="{{ asset('Admin/') }}/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ asset('Admin/') }}/js/scripts.js"></script>
<script src="{{ asset('Admin/') }}/js/jquery.slimscroll.js"></script>
<script src="{{ asset('Admin/') }}/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('Admin/') }}/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('Admin/') }}/js/jquery.scrollTo.js"></script>
</body>
</html>
