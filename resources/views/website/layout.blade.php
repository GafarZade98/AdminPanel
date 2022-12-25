<!DOCTYPE html>
<html dir="ltr" lang="en" class="ie8"><![endif]-->
<html dir="ltr" lang="en" class="ie9"><![endif]-->
<html dir="ltr" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My Store"/>
    <title>@yield('title', config('app.name'))</title>
    <base/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/font-awesome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/stylesheet.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/lightbox.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/magnific/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/owl-carousel/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/owl-carousel/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/custom.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/frontend/blightbox.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/magnific/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/swiper/css/swiper.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/frontend/jquery/swiper/css/opencart.css')}}"/>
    <link rel="canonical"  href="http://themetechmount.net/opencart/autovio-layout2/"/>
    <link rel="icon" href="{{asset('assets/img/frontend/image/catalog/favicon.png')}}')}}"/>

    <script src="{{asset('assets/js/frontend/jquery/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/lightbox-2.6.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery/swiper/js/swiper.jquery.js')}}"></script>
    <script src="{{asset('assets/js/frontend/ttmemail.js')}}"></script>
    <script src="{{asset('assets/js/frontend/common.js')}}"></script>
    <script src="{{asset('assets/js/frontend/custom.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jstree.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery.custom.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery.formalize.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery.elevatezoom.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/blightbox.js')}}"></script>
    <script src="{{asset('assets/js/frontend/imagelightbox.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery.countdown.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/common.js')}}"></script>
    <script src="{{asset('assets/js/frontend/parallax.js')}}"></script>
    <script src="{{asset('assets/js/frontend/animateparallax.js')}}"></script>
    <script src="{{asset('assets/js/frontend/jquery/slick/slick.js')}}"></script>
{{--    @yield('styles')--}}
</head>
<body class="common-home layout-1">
<section class="site-wrapper">
    @include('website.components.header')
    @yield('content')
    @include('website.components.footer')
</section>
{{--@yield('scripts')--}}
</body>
</html>
