<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<!-- Mirrored from themetechmount.net/opencart/autovio-layout2/index.php?route=account/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Dec 2022 08:48:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Account</title>
    <base  /><script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>
    <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <link href="catalog/view/theme/autoviolayout2/stylesheet/stylesheet.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/autoviolayout2/stylesheet/themetechmount_css/lightbox.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/magnific/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/autoviolayout2/stylesheet/themetechmount_css/carousel.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/autoviolayout2/stylesheet/themetechmount_css/custom.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/autoviolayout2/stylesheet/themetechmount_css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/autoviolayout2/stylesheet/themetechmount_css/animate.css" />

    <link rel="stylesheet" type="text/css" href="catalog/view/theme/autoviolayout2/stylesheet/themetechmount_css/blightbox.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/magnific/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/slick/slick-theme.css" />
    <script src="catalog/view/javascript/lightbox/lightbox-2.6.min.js"></script><link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" /><link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" /><link href="catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen" /><script src="catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js"></script><script src="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js"></script><script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script><script src="catalog/view/javascript/themetechmount_js/newsletter/ttmemail.js"></script><script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js"></script><script src="catalog/view/javascript/common.js" ></script><link href="image/catalog/favicon.png" rel="icon" /><!-- Themetechmount Start -->

    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/custom.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/jstree.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/jquery.custom.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/jquery.formalize.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/jquery.elevatezoom.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/bootstrap-notify.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/blightbox.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/imagelightbox.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/jquery.countdown.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/themetechmount_js/jquery.countdown.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>
    <script  type="text/javascript" src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>
    <script  src="catalog/view/javascript/common.js" ></script>
    <script  src="catalog/view/javascript/themetechmount_js/parallax.js"></script>
    <script  src="catalog/view/javascript/themetechmount_js/animateparallax.js"></script>
    <script type="text/javascript" src="catalog/view/javascript/jquery/slick/slick.js"></script>




    <!-- Themetechmount End -->

    <script  type="text/javascript">
        function leftslider(){
            // slick carousel
            if ($(window).width() >=980)  {
                $('#column-left .product-carousel,#column-right .product-carousel').not('.slick-initialized').slick({
                    dots: false,
                    arrows: true,
                    infinite: false,
                    slidesPerRow: 1,
                    rows: 3,

                });
            }

            if ($(window).width() < 980)  {
                var lrcolumn = jQuery("#column-left .product-carousel,#column-right .product-carousel");
                lrcolumn.owlCarousel({
                    slideBy: 2,
                });

            }
        }

        jQuery(window).load(function() {
            leftslider()
        });
        jQuery(window).resize(function() {
            leftslider()
        }); </script>
</head>
<body class="account-register layout-2 left-col ">
<section class="site-wrapper">

    <header>

        <!-- top_bar -->
        <div class="top_bar hidden-sm hidden-md hidden-lg hidden-xs">
            <div class="container">

                <div class="top_bar_left">
                </div>
                <div class="top_bar_right">
                </div>

            </div>
        </div>
        <!-- top_bar -->

        <!-- header_main -->
        <div class="header_main">
            <div class="container">

                <div class="header-logo">
                    <div id="logo"><a href="index9328.html?route=common/home"><img src="image/catalog/logo.png" title="Autovio" alt="Autovio" class="img-responsive" /></a>				</div>
                </div>

                <div class="dropdown ttm_search"><!-- <div class="header-search dropdown-toggle" data-toggle="dropdown"></div> -->
                    <div id="search" class="input-group">
                        <input type="text" name="search" value="" placeholder="Search here..." class="form-control input-lg" />
                        <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg">
    	<span class="search_button">Search</span>
    </button>

  </span>
                    </div></div><div class="ttm_contactcms">
                    <div class="ttm_contactcms_inner">
                        <div class="text">
                            <span class="desc"> <i class="fa fa-truck"></i> Free Shipping </span>
                        </div>
                        <div class="text">
                            <a href="http://themetechmount.net/opencart/autovio-layout2/?route=information/contact" class="desc"> <i class="fa fa-headphones"></i> Need help? </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- header_main end-->

        <!-- bottom_block -->

        <div class="bottom_block">
            <div class="container"><div class="vertical-menu">
                    <div class="vertical-category">
                        <div class="vertical-menu-heading"> <span class="menu-icon">&nbsp;</span> <span class="vertical-heading-text">all categories   <i class="fa fa-angle-down"></i></span>
                        </div>
                        <div class="vertical-content">
                            <ul id="nav-one" class="dropmenu top-vertical-category">                <li class="menu_item dropdown"><a href="index8122.html?route=product/category&amp;path=34"> Our products</a>

                                    <div class="dropdown-menu megamenu column3">
                                        <div class="dropdown-inner">                            <ul class="subchilds_1 list-unstyled">                                <li class="dropdown"><a href="indexbe11.html?route=product/category&amp;path=34_52">Auto Battery</a>

                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-inner">                                            <ul class="subchild list-unstyled">                                                <li class="subchild-inner"><a href="indexcc97.html?route=product/category&amp;path=34_52_58">Battery Box</a></li>                                                <li class="subchild-inner"><a href="indexee36.html?route=product/category&amp;path=34_52_63">Battery Cable</a></li>                                                <li class="subchild-inner"><a href="index8221.html?route=product/category&amp;path=34_52_43">Battery Plate</a></li>                                            </ul>                                        </div>


                                                    </div>

                                                </li>
                                            </ul>                            <ul class="subchilds_1 list-unstyled">                                <li class="dropdown"><a href="indexa632.html?route=product/category&amp;path=34_44">Auto Spoiler</a>

                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-inner">                                            <ul class="subchild list-unstyled">                                                <li class="subchild-inner"><a href="index3aa0.html?route=product/category&amp;path=34_44_48">Front spoiler</a></li>                                                <li class="subchild-inner"><a href="index6cb4.html?route=product/category&amp;path=34_44_47">Rear spoiler</a></li>                                                <li class="subchild-inner"><a href="index7b73.html?route=product/category&amp;path=34_44_49">spoiler</a></li>                                            </ul>                                        </div>


                                                    </div>

                                                </li>
                                            </ul>                            <ul class="subchilds_1 list-unstyled">                                <li class="dropdown"><a href="indexcd03.html?route=product/category&amp;path=34_54">Heat shield</a>

                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-inner">                                            <ul class="subchild list-unstyled">                                                <li class="subchild-inner"><a href="index901a.html?route=product/category&amp;path=34_54_60">Exposed Bumper</a></li>                                                <li class="subchild-inner"><a href="index69e8.html?route=product/category&amp;path=34_54_61">Lighting</a></li>                                                <li class="subchild-inner"><a href="index53fd.html?route=product/category&amp;path=34_54_62">Unexposed bumper</a></li>                                            </ul>                                        </div>


                                                    </div>

                                                </li>
                                            </ul>
                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index8122.html?route=product/category&amp;path=34"><img src="image/catalog/banners/catbanner.jpg" /></a>
                                            </div>

                                        </div>

                                    </div>

                                </li>                <li class="menu_item dropdown"><a href="index98dc.html?route=product/category&amp;path=20">accessories</a>

                                    <div class="dropdown-menu megamenu column1">
                                        <div class="dropdown-inner">                            <ul class="subchilds_1 list-unstyled">                                <li><a href="indexd9fe.html?route=product/category&amp;path=20_26">circumstances</a></li>                                <li><a href="indexf345.html?route=product/category&amp;path=20_27">eumfugiat quo</a></li>
                                            </ul>
                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index98dc.html?route=product/category&amp;path=20"><img src="image/catalog/pro/12.jpg" /></a>
                                            </div>

                                        </div>

                                    </div>

                                </li>                <li class="menu_item"><a href="indexb152.html?route=product/category&amp;path=17">Sparking cable</a></li>                <li class="menu_item dropdown"><a href="index1647.html?route=product/category&amp;path=25">Sunroof</a>

                                    <div class="dropdown-menu megamenu column1">
                                        <div class="dropdown-inner">                            <ul class="subchilds_1 list-unstyled">                                <li><a href="indexc219.html?route=product/category&amp;path=25_29">Mice and Trackballs</a></li>                                <li class="dropdown"><a href="indexe177.html?route=product/category&amp;path=25_28">Monitors</a>

                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-inner">                                            <ul class="subchild list-unstyled">                                                <li class="subchild-inner"><a href="index6d46.html?route=product/category&amp;path=25_28_36">rationally</a></li>                                                <li class="subchild-inner"><a href="index0b4e.html?route=product/category&amp;path=25_28_35">voluptatem</a></li>                                            </ul>                                        </div>


                                                    </div>

                                                </li>                                <li><a href="index68a7.html?route=product/category&amp;path=25_30">Printers</a></li>                                <li><a href="indexf3db.html?route=product/category&amp;path=25_31">Scanners</a></li>                                <li><a href="index955a.html?route=product/category&amp;path=25_32">Web Cameras</a></li>
                                            </ul>
                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index1647.html?route=product/category&amp;path=25"><img src="image/catalog/pro/10.jpg" /></a>
                                            </div>

                                        </div>

                                    </div>

                                </li>                <li class="menu_item dropdown"><a href="index7fa3.html?route=product/category&amp;path=18">Bumper</a>

                                    <div class="dropdown-menu megamenu column1">
                                        <div class="dropdown-inner">                            <ul class="subchilds_1 list-unstyled">                                <li><a href="index9f41.html?route=product/category&amp;path=18_46">Macs</a></li>                                <li><a href="index8470.html?route=product/category&amp;path=18_45">Windows</a></li>
                                            </ul>
                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index7fa3.html?route=product/category&amp;path=18"><img src="image/catalog/banners/category/1.jpg" /></a>
                                            </div>

                                        </div>

                                    </div>

                                </li>                <li class="menu_item"><a href="index70a9.html?route=product/category&amp;path=57">Decklid</a></li>                <li class="menu_item"><a href="indexc957.html?route=product/category&amp;path=24">Roof rack</a></li>                <li class="menu_item"><a href="index68ea.html?route=product/category&amp;path=33">Fuel tank</a></li>                <li class="menu_item"><a href="index73b3.html?route=product/category&amp;path=59">Cowl screen</a></li>                <li class="menu_item"> <a href="indexc295.html?route=information/blogger/blogs">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                </div><div class="header-main-menu">
                    <nav class="nav-container" role="navigation">
                        <div class="nav-inner"><div id="menu" class="header-main-menu">
                                <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div>

                                <ul class="nav navbar-nav">
                                    <li class="home menu-category"><a class="a-top-link" href="index9328.html?route=common/home">Home</a></li>			<li class="menu_item dropdown"><a class="a-top-link" href="index8122.html?route=product/category&amp;path=34"> Our products <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu megamenu column3">
                                            <div class="dropdown-inner">					<ul class="list-unstyled childs_1">						  <li class="dropdown"><a href="indexbe11.html?route=product/category&amp;path=34_52">Auto Battery</a>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">								<ul class="list-unstyled childs_2">									<li><a href="indexcc97.html?route=product/category&amp;path=34_52_58">Battery Box</a></li>									<li><a href="indexee36.html?route=product/category&amp;path=34_52_63">Battery Cable</a></li>									<li><a href="index8221.html?route=product/category&amp;path=34_52_43">Battery Plate</a></li>
                                                                </ul>							  </div>
                                                        </div>
                                                    </li>					</ul>					<ul class="list-unstyled childs_1">						  <li class="dropdown"><a href="indexa632.html?route=product/category&amp;path=34_44">Auto Spoiler</a>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">								<ul class="list-unstyled childs_2">									<li><a href="index3aa0.html?route=product/category&amp;path=34_44_48">Front spoiler</a></li>									<li><a href="index6cb4.html?route=product/category&amp;path=34_44_47">Rear spoiler</a></li>									<li><a href="index7b73.html?route=product/category&amp;path=34_44_49">spoiler</a></li>
                                                                </ul>							  </div>
                                                        </div>
                                                    </li>					</ul>					<ul class="list-unstyled childs_1">						  <li class="dropdown"><a href="indexcd03.html?route=product/category&amp;path=34_54">Heat shield</a>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">								<ul class="list-unstyled childs_2">									<li><a href="index901a.html?route=product/category&amp;path=34_54_60">Exposed Bumper</a></li>									<li><a href="index69e8.html?route=product/category&amp;path=34_54_61">Lighting</a></li>									<li><a href="index53fd.html?route=product/category&amp;path=34_54_62">Unexposed bumper</a></li>
                                                                </ul>							  </div>
                                                        </div>
                                                    </li>					</ul>				</div>

                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index8122.html?route=product/category&amp;path=34"><img src="image/catalog/banners/catbanner.jpg" /></a>
                                            </div>

                                        </div>
                                    </li>			<li class="menu_item dropdown"><a class="a-top-link" href="index98dc.html?route=product/category&amp;path=20">accessories <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu megamenu column1">
                                            <div class="dropdown-inner">					<ul class="list-unstyled childs_1">						  <li><a href="indexd9fe.html?route=product/category&amp;path=20_26">circumstances</a></li>						  <li><a href="indexf345.html?route=product/category&amp;path=20_27">eumfugiat quo</a></li>					</ul>				</div>

                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index98dc.html?route=product/category&amp;path=20"><img src="image/catalog/pro/12.jpg" /></a>
                                            </div>

                                        </div>
                                    </li>			<li class="menu_item"><a class="a-top-link" href="indexb152.html?route=product/category&amp;path=17">Sparking cable</a></li>			<li class="menu_item dropdown"><a class="a-top-link" href="index1647.html?route=product/category&amp;path=25">Sunroof <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu megamenu column1">
                                            <div class="dropdown-inner">					<ul class="list-unstyled childs_1">						  <li><a href="indexc219.html?route=product/category&amp;path=25_29">Mice and Trackballs</a></li>						  <li class="dropdown"><a href="indexe177.html?route=product/category&amp;path=25_28">Monitors</a>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-inner">								<ul class="list-unstyled childs_2">									<li><a href="index6d46.html?route=product/category&amp;path=25_28_36">rationally</a></li>									<li><a href="index0b4e.html?route=product/category&amp;path=25_28_35">voluptatem</a></li>
                                                                </ul>							  </div>
                                                        </div>
                                                    </li>						  <li><a href="index68a7.html?route=product/category&amp;path=25_30">Printers</a></li>						  <li><a href="indexf3db.html?route=product/category&amp;path=25_31">Scanners</a></li>						  <li><a href="index955a.html?route=product/category&amp;path=25_32">Web Cameras</a></li>					</ul>				</div>

                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index1647.html?route=product/category&amp;path=25"><img src="image/catalog/pro/10.jpg" /></a>
                                            </div>

                                        </div>
                                    </li>			<li class="menu_item dropdown"><a class="a-top-link" href="index7fa3.html?route=product/category&amp;path=18">Bumper <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu megamenu column1">
                                            <div class="dropdown-inner">					<ul class="list-unstyled childs_1">						  <li><a href="index9f41.html?route=product/category&amp;path=18_46">Macs</a></li>						  <li><a href="index8470.html?route=product/category&amp;path=18_45">Windows</a></li>					</ul>				</div>

                                            <div class="menucategory-image">
                                                <a class="a-top-link" href="index7fa3.html?route=product/category&amp;path=18"><img src="image/catalog/banners/category/1.jpg" /></a>
                                            </div>

                                        </div>
                                    </li>			<li class="menu_item"><a class="a-top-link" href="index70a9.html?route=product/category&amp;path=57">Decklid</a></li>			<li class="menu_item"><a class="a-top-link" href="indexc957.html?route=product/category&amp;path=24">Roof rack</a></li>			<li class="menu_item"><a class="a-top-link" href="index68ea.html?route=product/category&amp;path=33">Fuel tank</a></li>			<li class="menu_item"><a class="a-top-link" href="index73b3.html?route=product/category&amp;path=59">Cowl screen</a></li>
                                    <li class="menu-category"><a class="a-top-link" href="index7cb2.html?route=information/sitemap">Sitemap</a></li>
                                    <li class="menu-category"><a class="a-top-link" href="index8816.html?route=information/information&amp;information_id=4">aboutus</a></li>
                                    <li class="menu-category"><a class="a-top-link" href="index2724.html?route=information/contact">contact us</a></li>
                                    <li class="last menu-category"> <a class="a-top-link" href="index9e5e.html?route=information/article/articlelist">Latest Blogs</a></li>
                                </ul>

                            </div>
                        </div>

                    </nav>

                </div>
                </nav>

                <div class="header-cart"><div id="cart" class="btn-group btn-block">
                        <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle" title="Shopping Cart" > <span id="cart-title">cart </span> <span id="cart-total"><span>0</span> $0.00</span> </button>
                        <ul class="dropdown-menu pull-right cart-menu">    <li>
                                <p class="text-center">Your shopping cart is empty!</p>
                            </li>  </ul>
                    </div>
                </div>
                <div class="dropdown ttm_myaccount"><a href="indexe223.html?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                        <span>My Account</span></a>
                    <ul class="dropdown-menu dropdown-menu-right myaccount-menu">					<li><a href="index5502.html?route=account/register" title="Register">Register</a></li>
                        <li><a href="indexe223.html?route=account/login" title="Login">Login</a></li>
                        <li><a href="index630e.html?route=checkout/cart" title="Shopping Cart">Shopping Cart</span></a></li>
                        <li><a href="index630e.html?route=checkout/checkout" title="Checkout"><span class="checkout">Checkout</span></a></li><div class="pull-left">
                            <form action="http://themetechmount.net/opencart/autovio-layout2/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="form-language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" title="Language">

                                        <span class="">English </span></button>
                                    <ul class="dropdown-menu ttm_language_menu">
                                        <li class="current">
                                            <button class="btn btn-link btn-block language-select" type="button" name="en-gb" title="English"><img src="catalog/language/en-gb/en-gb.png" alt="English" title="English" />English</button>
                                        </li>		<li>
                                            <button class="btn btn-link btn-block language-select" type="button" name="ar" title="Arabic"><img src="catalog/language/ar/ar.png" alt="Arabic" title="Arabic" />Arabic</button>
                                        </li>    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="http://themetechmount.net/opencart/autovio-layout2/index.php?route=account/register" />
                            </form>
                        </div><div class="pull-left">
                            <form action="http://themetechmount.net/opencart/autovio-layout2/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency" title="Currency">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="">US Dollar </span></button>

                                    <ul class="dropdown-menu ttm_currency_menu">        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€Euro</button>
                                        </li>        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£Pound Sterling</button>
                                        </li>        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="USD">$US Dollar</button>
                                        </li>    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="http://themetechmount.net/opencart/autovio-layout2/index.php?route=account/register" />
                            </form>
                        </div>

                    </ul>
                </div>
                <div class="top_bar_wishlist">
                    <a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="wishlist"><span class="wishlist">wishlist <span>0</span></span></a>
                </div>

                <div class="top_bar_compare">
                    <a href="index6431.html?route=product/compare" id="compare-total" title="compare"><span class="compare">compare <span>0</span></span></a>
                </div>

            </div>
        </div>

        <!-- bottom_block end-->

    </header>

    <div class="ttm-breadcrumb" id="breadcrumb">
        <div class="container">

        </div>
    </div>


    <script>

        function quickbox(){
            if ($(window).width() > 767) {
                $('.quickview').magnificPopup({
                    type:'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }
        jQuery(document).ready(function() {quickbox();});
        jQuery(window).resize(function() {quickbox();});

    </script>

    <div id="account-register" class="container">
        <ul class="breadcrumb">    <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>    <li><a href="indexe223.html?route=account/account">Account</a></li>    <li><a href="index5502.html?route=account/register">Register</a></li>  </ul>  <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs"><div class="box">
                    <div class="heading-title"><div class="sidebar-heading">Account</div></div>
                    <div class="list-group">
                        <a href="indexe223.html?route=account/login" class="list-group-item">Login </a> <a href="index5502.html?route=account/register" class="list-group-item">Register</a> <a href="indexacda.html?route=account/forgotten" class="list-group-item">Forgotten Password </a>
                        <a href="indexe223.html?route=account/account" class="list-group-item">My Account </a>
                        <a href="indexe223.html?route=account/address" class="list-group-item">Address Book</a> <a href="indexe223.html?route=account/wishlist" class="list-group-item">Wish List </a> <a href="indexe223.html?route=account/order" class="list-group-item">Order History </a> <a href="indexe223.html?route=account/download" class="list-group-item">Downloads </a><a href="indexe223.html?route=account/recurring" class="list-group-item">Recurring payments </a> <a href="indexe223.html?route=account/reward" class="list-group-item">Reward Points </a> <a href="indexe223.html?route=account/return" class="list-group-item">Returns </a> <a href="indexe223.html?route=account/transaction" class="list-group-item">Transactions </a> <a href="indexe223.html?route=account/newsletter" class="list-group-item">Newsletter </a>
                    </div>
                </div>
            </aside>    <div id="content" class="col-sm-9">
                <h1>Register Account</h1>
                <p>If you already have an account with us, please login at the <a href="indexe223.html?route=account/login">login page</a>.</p>
                <form action="http://themetechmount.net/opencart/autovio-layout2/index.php?route=account/register" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="form-group required" style="display: none;">
                            <label class="col-sm-2 control-label">Customer Group</label>
                            <div class="col-sm-10">              <div class="radio">
                                    <label>
                                        <input type="radio" name="customer_group_id" value="1" checked="checked" />Default</label>
                                </div></div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" /> </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" /> </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" /> </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                            <div class="col-sm-10">
                                <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" /> </div>
                        </div>        </fieldset>
                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" /> </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" /> </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Newsletter</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Subscribe</label>
                            <div class="col-sm-10">              <label class="radio-inline">
                                    <input type="radio" name="newsletter" value="1" />Yes</label>
                                <label class="radio-inline">
                                    <input type="radio" name="newsletter" value="0" checked="checked" />No</label> </div>
                        </div>
                    </fieldset>        <div class="buttons">
                        <div class="pull-right">I have read and agree to the <a href="index11ee.html?route=information/information/agree&amp;information_id=3" class="agree"><b>Privacy Policy</b></a>            <input type="checkbox" name="agree" value="1" />            &nbsp;
                            <input type="submit" value="Continue" class="btn btn-primary" />
                        </div>
                    </div>      </form></div></div>
    </div>
    <script type="text/javascript"><!--
        // Sort the custom fields
        $('#account .form-group[data-sort]').detach().each(function() {
            if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {
                $('#account .form-group').eq($(this).attr('data-sort')).before(this);
            }

            if ($(this).attr('data-sort') > $('#account .form-group').length) {
                $('#account .form-group:last').after(this);
            }

            if ($(this).attr('data-sort') == $('#account .form-group').length) {
                $('#account .form-group:last').after(this);
            }

            if ($(this).attr('data-sort') < -$('#account .form-group').length) {
                $('#account .form-group:first').before(this);
            }
        });

        $('input[name=\'customer_group_id\']').on('change', function() {
            $.ajax({
                url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
                dataType: 'json',
                success: function(json) {
                    $('.custom-field').hide();
                    $('.custom-field').removeClass('required');

                    for (i = 0; i < json.length; i++) {
                        custom_field = json[i];

                        $('#custom-field' + custom_field['custom_field_id']).show();

                        if (custom_field['required']) {
                            $('#custom-field' + custom_field['custom_field_id']).addClass('required');
                        }
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });

        $('input[name=\'customer_group_id\']:checked').trigger('change');
        //--></script>
    <script type="text/javascript"><!--
        $('button[id^=\'button-custom-field\']').on('click', function() {
            var element = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function() {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);

                    $.ajax({
                        url: 'index.php?route=tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(element).button('loading');
                        },
                        complete: function() {
                            $(element).button('reset');
                        },
                        success: function(json) {
                            $(element).parent().find('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(element).parent().find('input').val(json['code']);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>
    <script type="text/javascript"><!--
        $('.date').datetimepicker({
            language: 'en-gb',
            pickTime: false
        });

        $('.time').datetimepicker({
            language: 'en-gb',
            pickDate: false
        });

        $('.datetime').datetimepicker({
            language: 'en-gb',
            pickDate: true,
            pickTime: true
        });
        //--></script><footer>
        <div id="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>

            <div class="footer_center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 column first">
                            <div class="footer-logo">
                                <div id="logo"><a href="index9328.html?route=common/home"><img src="image/catalog/logo.png" title="" alt="" class="img-responsive" /></a>					</div>
                            </div><div id="ttmblockaboutus">
                                <ul class="blockaboutus-inner">
                                    <div class="block-aboutus">
                                        <span class="block-details">There are many variation passages of Lorem Ipsum available, but the majority have suffered alteration in some  by injecte humour, or randomised words whThere are many variation passages of Lorem Ipsum available,but the majority have suffered alteration in some  by injectehumour, or randomised words which don't look.ich don't look.</span>
                                    </div>
                                </ul>
                            </div>

                        </div>               <div class="col-sm-3 column second">
                            <h5>Information</h5>
                            <ul class="list-unstyled">                     <li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>                     <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>                     <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>                     <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>					 <li><a href="indexf110.html?route=product/special">Specials</a></li>
                                <li><a href="index2724.html?route=information/contact">Contact Us</a></li>
                            </ul>
                        </div>               <div class="col-sm-3 column third">
                            <h5>Customer Services</h5>
                            <ul class="list-unstyled">                     <li><a href="indexd773.html?route=product/manufacturer">Brands</a></li>
                                <li><a href="index4dd2.html?route=account/voucher">Gift Certificates</a></li>

                                <li><a href="index3d18.html?route=affiliate/login">Affiliate</a></li>

                                <li><a href="indexf110.html?route=product/special">Specials</a></li>
                                <li><a href="indexe223.html?route=account/account">My Account</a></li>
                                <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
                            </ul>
                        </div>               <div class="col-sm-3 column forth"><div id="ttmcontact">

                                <h5>contact us</h5>

                                <ul id="foote_contact_list">
                                    <li>
                                        <div class="data">
        <span class="contact_title"><span>Address: </span>71 Pennington Lane Vernon Rockville,
          <br>CT 06066</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="data">
                                            <span class="contact_title"><span>Phone: </span>+123-456-7890</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="data">
                                            <span class="contact_title"><span>Fax: </span>+456-123-7890</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="data">
                                            <span class="contact_title"><span>Email: </span><a href="#">info@example.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_middle">
                <div class="container">
                    <div class="row"><div class="ttm-social-block">
                            <div class="social">
                                <h5 class="hidden-lg hidden-md">follow us</h5>
                                <ul>
                                    <li class="facebook"><a href="#">Facebook</a></li>
                                    <li class="twitter"><a href="#">Twitter</a></li>
                                    <li class="google-plus"><a href="#">Google-Plus</a></li>
                                    <li class="rss"><a href="#">RSS</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="copyright-block">All Right Reserved By <a href="http://www.opencart.com/">OpenCart</a> Copyright Autovio &copy; 2022</div><div id="ttmpaymentblock">
                        <div class="ttmpayment">
                            <ul class="payment-block-inner">
                                <li class="icon"><a href="#"><img src="image/catalog/banners/card-1.png" alt=""></a></li>
                                <li class="icon"><a href="#"><img src="image/catalog/banners/card-2.png" alt=""></a></li>
                                <li class="icon"><a href="#"><img src="image/catalog/banners/card-3.png" alt=""></a></li>
                                <li class="icon"><a href="#"><img src="image/catalog/banners/card-4.png" alt=""></a></li>
                                <li class="icon"><a href="#"><img src="image/catalog/banners/card-5.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer><!--
   OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
   Please donate via PayPal to donate@opencart.com
   //-->
    </main>
</section>
</body>
<!-- Mirrored from themetechmount.net/opencart/autovio-layout2/index.php?route=account/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Dec 2022 08:48:54 GMT -->
</html>