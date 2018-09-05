<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('/FrontEnd/') }}/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/FrontEnd/') }}/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{ asset('/FrontEnd/') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <script src="{{ asset('/FrontEnd/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/FrontEnd/') }}/js/simpleCart.min.js"> </script>
    <!-- slide -->
    <script src="{{ asset('/FrontEnd/') }}/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- animation-effect -->
    <link href="{{ asset('/FrontEnd/') }}/css/animate.min.css" rel="stylesheet">
    <script src="{{ asset('/FrontEnd/') }}/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>
<body>
<!--header-->
<div class="header">
    @include('FrontEnd.includes.header')
    @include('FrontEnd.includes.menu')
</div>
<!--banner-->

@yield('contant')

<!--footer-->
@include('FrontEnd.includes.footer')
<!--footer-->
<script src="{{ asset('FrontEnd/') }}/js/jquery.min.js"></script>
<script src="{{ asset('FrontEnd/') }}/js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="{{ asset('FrontEnd/') }}/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{ asset('FrontEnd/') }}/js/simpleCart.min.js"> </script>
<!--initiate accordion-->
<script type="text/javascript">
    $(function() {
        var menu_ul = $('.menu-drop > li > ul'),
            menu_a  = $('.menu-drop > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<!-- FlexSlider -->
<script defer src="{{ asset('FrontEnd/') }}/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="{{ asset('FrontEnd/') }}/css/flexslider.css" type="text/css" media="screen" />

<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!---pop-up-box---->
<link href="{{ asset('FrontEnd/') }}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="{{ asset('FrontEnd/') }}/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!---//pop-up-box---->
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>

</body>
</html>