<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Autovio Store</title>
    <base/>
    <meta name="description" content="My Store"/>
    <script src="{{asset('assets/js/frontend/jquery/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/bootstrap.min.js')}}"></script>
    <link href="{{asset('assets/js/frontend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <link href="{{asset('assets/css/frontend/stylesheet.css')}}" rel="stylesheet"/>
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
    <script src="{{asset('assets/js/frontend/lightbox-2.6.min.js')}}"></script>
    <link href="{{asset('assets/js/frontend/jquery/swiper/css/swiper.min.css')}}" type="text/css" rel="stylesheet" media="screen"/>
    <link href="{{asset('assets/js/frontend/jquery/swiper/css/opencart.css')}}" type="text/css" rel="stylesheet" media="screen"/>
    <script src="{{asset('assets/js/frontend/jquery/swiper/js/swiper.jquery.js')}}"></script>
    <script src="{{asset('assets/js/frontend/ttmemail.js')}}"></script>
    <script src="{{asset('assets/js/frontend/common.js')}}"></script>
    <link href="http://themetechmount.net/opencart/autovio-layout2/" rel="canonical"/>
    <link href="{{asset('assets/img/frontend/image/catalog/favicon.png')}}')}}" rel="icon"/><!-- Themetechmount Start -->

    <script type="text/javascript" src="{{asset('assets/js/frontend/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jstree.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery.formalize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery.elevatezoom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/bootstrap-notify.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/blightbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/imagelightbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery.countdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/frontend/common.js')}}"></script>
    <script src="{{asset('assets/js/frontend/parallax.js')}}"></script>
    <script src="{{asset('assets/js/frontend/animateparallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/frontend/jquery/slick/slick.js')}}"></script>


    <script type="text/javascript">
        function leftslider() {
            // slick carousel
            if ($(window).width() >= 980) {
                $('#column-left .product-carousel,#column-right .product-carousel').not('.slick-initialized').slick({
                    dots: false,
                    arrows: true,
                    infinite: false,
                    slidesPerRow: 1,
                    rows: 3,

                });
            }

            if ($(window).width() < 980) {
                var lrcolumn = jQuery("#column-left .product-carousel,#column-right .product-carousel");
                lrcolumn.owlCarousel({
                    slideBy: 2,
                });

            }
        }

        jQuery(window).load(function () {
            leftslider()
        });
        jQuery(window).resize(function () {
            leftslider()
        });
    </script>
</head>
<body class="common-home layout-1 ">
<section class="site-wrapper">
    <div class="ttm-breadcrumb" id="breadcrumb">
        <div class="container">

        </div>
    </div>


    <script>

        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }

        jQuery(document).ready(function () {
            quickbox();
        });
        jQuery(window).resize(function () {
            quickbox();
        });

    </script>

    <div id="ttm_home_section">


        <div class="content-bottom">

            <div id="content">
                <div class="ttm-category-box">
                    <div class="container">
                        <div class="heading-title">
                            <div class="main-heading">Shop by category</div>
                        </div>
                        <div class="ttmcat-items">
                            <div id="ttmcat_carousel" class="category-boxttmcat-carousel">
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="index7fa3.html?route=product/category&amp;path=18">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/1-120x120.jpg')}}"
                                                     alt="Bumper" title="Bumper" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4>
                                                    <a href="index7fa3.html?route=product/category&amp;path=18">Bumper</a>
                                                </h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="index70a9.html?route=product/category&amp;path=57">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/2-120x120.jpg')}}"
                                                     alt="Decklid" title="Decklid" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4>
                                                    <a href="index70a9.html?route=product/category&amp;path=57">Decklid</a>
                                                </h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="indexb152.html?route=product/category&amp;path=17">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/3-120x120.jpg')}}"
                                                     alt="Sparking cable" title="Sparking cable"
                                                     class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="indexb152.html?route=product/category&amp;path=17">Sparking
                                                        cable</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="index68ea.html?route=product/category&amp;path=33">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/4-120x120.jpg')}}"
                                                     alt="Fuel tank" title="Fuel tank" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="index68ea.html?route=product/category&amp;path=33">Fuel
                                                        tank</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="indexc957.html?route=product/category&amp;path=24">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/5-120x120.jpg')}}"
                                                     alt="Roof rack" title="Roof rack" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="indexc957.html?route=product/category&amp;path=24">Roof
                                                        rack</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="index73b3.html?route=product/category&amp;path=59">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/6-120x120.jpg')}}"
                                                     alt="Cowl screen" title="Cowl screen" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="index73b3.html?route=product/category&amp;path=59">Cowl
                                                        screen</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="indexccd5.html?route=product/category&amp;path=54">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/7-120x120.jpg')}}"
                                                     alt="Heat shield" title="Heat shield" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="indexccd5.html?route=product/category&amp;path=54">Heat
                                                        shield</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="index714c.html?route=product/category&amp;path=44">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/8-120x120.jpg')}}"
                                                     alt="Auto Spoiler" title="Auto Spoiler" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="index714c.html?route=product/category&amp;path=44">Auto
                                                        Spoiler</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                                <div class="ttmcat-slider">
                                    <div class="content">
                                        <div class="image">
                                            <a href="indexc7ff.html?route=product/category&amp;path=52">
                                                <img src="{{asset('assets/img/frontend/image/cache/catalog/banners/category/1-120x120.jpg')}}"
                                                     alt="Auto Battery" title="Auto Battery" class="img-responsive"/>
                                            </a>
                                        </div>

                                        <!-- Category Caption Start -->
                                        <div class="caption">
                                            <div class="cat-title">
                                                <h4><a href="indexc7ff.html?route=product/category&amp;path=52">Auto
                                                        Battery</a></h4></div>
                                        </div>
                                        <!-- Category Caption END -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ttm_bannercms">
                    <div class="container">
                        <div class="bannercms">
                            <ul class="bannercms-wrapper">
                                <li class="bannercms_content first col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="bannercms_item">
                                        <a href="#" class="img"><img src="{{asset('assets/img/frontend/image/catalog/banners/banner_img1.jpg')}}" alt=""></a>
                                        <div class="bannertext">
                                            <span class="bannertext1">Lamps &amp; Light</span>
                                            <span class="bannertext2">Mega Sale</span>
                                            <span class="bannertext3">Sale Up To <span>45% </span>Off</span>
                                            <a class="bannerbtn" href="#">shop now <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="bannercms_content second col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="bannercms_item">
                                        <a href="#" class="img"><img src="{{asset('assets/img/frontend/image/catalog/banners/banner_img2.jpg')}}" alt=""></a>
                                        <div class="bannertext">
                                            <span class="bannertext1">New Arrivals 2020</span>
                                            <span class="bannertext2">Ford Fiesta <br>Make Driving Fun Again!</span>
                                            <a class="bannerbtn" href="#">shop now <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="bannercms_content third col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="bannercms_item">
                                        <a href="#" class="img"><img src="{{asset('assets/img/frontend/image/catalog/banners/banner_img3.jpg')}}" alt=""></a>
                                        <div class="bannertext">
                                            <span class="bannertext1">Amazing Value</span>
                                            <span class="bannertext2">Premium Quality<br>Combo Collection 2020</span>
                                            <a class="bannerbtn" href="#">shop now <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="bannercms_content forth col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="bannercms_item">
                                        <a href="#" class="img"><img src="{{asset('assets/img/frontend/image/catalog/banners/banner_img4.jpg')}}" alt=""></a>
                                        <div class="bannertext">
                                            <span class="bannertext1">From <span>$9999</span></span>
                                            <span class="bannertext2">BMW Series Available</span>
                                            <span class="bannertext3">Popular car Available</span>
                                            <a class="bannerbtn" href="#">shop now <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="ttm_products_tab" class="ttm_products_tab box">

                    <div class="container">

                        <div class="ttm_products_tabs tabs row">
                            <div class="tabs-style col-lg-12 col-md-12">
                                <div class="heading-title">
                                    <div class="main-heading">top Products</div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-featuredproduct-0" data-toggle="tab">all</a></li>
                                    <li><a href="#tab-latestproduct-0" data-toggle="tab">New products</a></li>
                                    <li><a href="#tab-topsellingproducts-0" data-toggle="tab">Top selling</a></li>
                                    <li><a href="#tab-specialproduct-0" data-toggle="tab">Special products</a></li>
                                </ul>
                            </div>
                            <div class="tab-content col-lg-12 col-md-12">
                                <div id="tab-featuredproduct-0" class="featured-products home-products active">
                                    <div class="ttm-product-box productbox-grid" id=" featured-grid">
                                        <div class=" product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index6320.html?route=product/product&amp;product_id=28">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/13-254x252.jpg')}}"
                                                                 title="adipiscing mollitelit ipsum"
                                                                 alt="adipiscing mollitelit ipsum"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/10-254x252.jpg')}}"
                                                                 title="adipiscing mollitelit ipsum"
                                                                 alt="adipiscing mollitelit ipsum"/>
                                                        </a>
                                                        <div class="saleback">
                                                            <span class="saleicon sale">sale</span>
                                                        </div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index6320.html?route=product/product&amp;product_id=28">adipiscing
                                                                mollitelit ipsum </a></h4>
                                                        <p class="price"><span class="price-new">$278.00</span> <span
                                                                class="price-old">$362.00</span> <span
                                                                class="price-tax">Ex Tax:$230.00</span> <span
                                                                class="percentsaving">23% </span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('28');('28')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index097a.html?route=product/quick_view&amp;product_id=28">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('28 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('28 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class=" product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index5e0b.html?route=product/product&amp;product_id=36">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/1-254x252.jpg')}}"
                                                                 title="aliqua deserunt elit" alt="aliqua deserunt elit"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/5-254x252.jpg')}}"
                                                                 title="aliqua deserunt elit"
                                                                 alt="aliqua deserunt elit"/>
                                                        </a>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index5e0b.html?route=product/product&amp;product_id=36">aliqua
                                                                deserunt elit </a></h4>
                                                        <p class="price">$782.00 <span
                                                                class="price-tax">Ex Tax:$650.00</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('36');('36')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index0d3e.html?route=product/quick_view&amp;product_id=36">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('36 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('36 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class=" product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index0f47.html?route=product/product&amp;product_id=29">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/11-254x252.jpg')}}"
                                                                 title="Butterflies Hand composite"
                                                                 alt="Butterflies Hand composite"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/17-254x252.jpg')}}"
                                                                 title="Butterflies Hand composite"
                                                                 alt="Butterflies Hand composite"/>
                                                        </a>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="index0f47.html?route=product/product&amp;product_id=29">Butterflies
                                                                Hand composite </a></h4>
                                                        <p class="price">$337.99 <span
                                                                class="price-tax">Ex Tax:$279.99</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('29');('29')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexf72e.html?route=product/quick_view&amp;product_id=29">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('29 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('29 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class=" product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexd21c.html?route=product/product&amp;product_id=47">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/12-254x252.jpg')}}"
                                                                 title="Caprese Satchel combines"
                                                                 alt="Caprese Satchel combines"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/2-254x252.jpg')}}"
                                                                 title="Caprese Satchel combines"
                                                                 alt="Caprese Satchel combines"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="indexd21c.html?route=product/product&amp;product_id=47">Caprese
                                                                Satchel combines </a></h4>
                                                        <p class="price">$122.00 <span
                                                                class="price-tax">Ex Tax:$100.00</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('47');('47')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index7f5a.html?route=product/quick_view&amp;product_id=47">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('47 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('47 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class=" product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexbfcf.html?route=product/product&amp;product_id=31">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/14-254x252.jpg')}}"
                                                                 title="cillum dolore officia"
                                                                 alt="cillum dolore officia"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                                 title="cillum dolore officia"
                                                                 alt="cillum dolore officia"/>
                                                        </a>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="indexbfcf.html?route=product/product&amp;product_id=31">cillum
                                                                dolore officia </a></h4>
                                                        <p class="price">$98.00 <span
                                                                class="price-tax">Ex Tax:$80.00</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('31');('31')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index73c4.html?route=product/quick_view&amp;product_id=31">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('31 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('31 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="tab-latestproduct-0" class="latest-products home-products">
                                    <div class="ttm-product-boxproductbox-grid" id="latest-grid">
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index75be.html?route=product/product&amp;product_id=50">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/2-254x252.jpg')}}"
                                                                 title="High Waist Pants" alt="High Waist Pants"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/20-254x252.jpg')}}"
                                                                 title="High Waist Pants" alt="High Waist Pants"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>
                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index75be.html?route=product/product&amp;product_id=50">High
                                                                Waist Pants </a></h4>
                                                        <p class="price">$750.00 <span
                                                                class="price-tax">Ex Tax:$750.00</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('50');('50')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart									</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexabd0.html?route=product/quick_view&amp;product_id=50">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('50 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('50 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index3d7a.html?route=product/product&amp;product_id=49">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/10-254x252.jpg')}}"
                                                                 title="ullamco laboris" alt="ullamco laboris"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/11-254x252.jpg')}}"
                                                                 title="ullamco laboris" alt="ullamco laboris"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>
                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="index3d7a.html?route=product/product&amp;product_id=49">ullamco
                                                                laboris </a></h4>
                                                        <p class="price">$361.99 <span
                                                                class="price-tax">Ex Tax:$299.99</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocartdisabled"
                                                                    title="Pre-Order" onclick=""><span
                                                                    class="outofstock">Pre-Order									</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexc983.html?route=product/quick_view&amp;product_id=49">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('49 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('49 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexb77e.html?route=product/product&amp;product_id=48">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/8-254x252.jpg')}}"
                                                                 title="Striped Muffler breakthrough"
                                                                 alt="Striped Muffler breakthrough"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/9-254x252.jpg')}}"
                                                                 title="Striped Muffler breakthrough"
                                                                 alt="Striped Muffler breakthrough"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>
                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="indexb77e.html?route=product/product&amp;product_id=48">Striped
                                                                Muffler breakthrough </a></h4>
                                                        <p class="price">$122.00 <span
                                                                class="price-tax">Ex Tax:$100.00</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('48');('48')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart									</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexdd37.html?route=product/quick_view&amp;product_id=48">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('48 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('48 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexd21c.html?route=product/product&amp;product_id=47">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/12-254x252.jpg')}}"
                                                                 title="Caprese Satchel combines"
                                                                 alt="Caprese Satchel combines"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/2-254x252.jpg')}}"
                                                                 title="Caprese Satchel combines"
                                                                 alt="Caprese Satchel combines"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>
                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="indexd21c.html?route=product/product&amp;product_id=47">Caprese
                                                                Satchel combines </a></h4>
                                                        <p class="price">$122.00 <span
                                                                class="price-tax">Ex Tax:$100.00</span></p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('47');('47')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart									</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index7f5a.html?route=product/quick_view&amp;product_id=47">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('47 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('47 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index2ebe.html?route=product/product&amp;product_id=46">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                                 title="exercitation ullamco" alt="exercitation ullamco"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/20-254x252.jpg')}}"
                                                                 title="exercitation ullamco"
                                                                 alt="exercitation ullamco"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>
                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index2ebe.html?route=product/product&amp;product_id=46">exercitation
                                                                ullamco </a></h4>
                                                        <p class="price">$1,202.00 <span class="price-tax">Ex Tax:$1,000.00</span>
                                                        </p>


                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('46');('46')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart									</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index30de.html?route=product/quick_view&amp;product_id=46">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('46 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('46 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="tab-topsellingproducts-0" class="bestsellers home-products">
                                    <div class="ttm-product-boxproductbox-grid" id="bestseller-grid">
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-1">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index5e0b.html?route=product/product&amp;product_id=36">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/1-254x252.jpg')}}"
                                                                 title="aliqua deserunt elit" alt="aliqua deserunt elit"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/5-254x252.jpg')}}"
                                                                 title="aliqua deserunt elit"
                                                                 alt="aliqua deserunt elit"/>
                                                        </a>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index5e0b.html?route=product/product&amp;product_id=36">aliqua
                                                                deserunt elit </a></h4>
                                                        <p class="price">$782.00 <span
                                                                class="price-tax">Ex Tax:$650.00</span></p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('36');('36')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index0d3e.html?route=product/quick_view&amp;product_id=36">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('36 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('36 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-1">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index0f47.html?route=product/product&amp;product_id=29">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/11-254x252.jpg')}}"
                                                                 title="Butterflies Hand composite"
                                                                 alt="Butterflies Hand composite"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/17-254x252.jpg')}}"
                                                                 title="Butterflies Hand composite"
                                                                 alt="Butterflies Hand composite"/>
                                                        </a>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="index0f47.html?route=product/product&amp;product_id=29">Butterflies
                                                                Hand composite </a></h4>
                                                        <p class="price">$337.99 <span
                                                                class="price-tax">Ex Tax:$279.99</span></p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('29');('29')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexf72e.html?route=product/quick_view&amp;product_id=29">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('29 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('29 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-1">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexf073.html?route=product/product&amp;product_id=30">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/15-254x252.jpg')}}"
                                                                 title="consectetur adipiscing"
                                                                 alt="consectetur adipiscing"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                                 title="consectetur adipiscing"
                                                                 alt="consectetur adipiscing"/>
                                                        </a>
                                                        <div class="saleback">
                                                            <span class="saleicon sale">sale</span>
                                                        </div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="indexf073.html?route=product/product&amp;product_id=30">consectetur
                                                                adipiscing </a></h4>
                                                        <p class="price"><span class="price-new">$38.00</span> <span
                                                                class="price-old">$50.00</span> <span class="price-tax">Ex Tax:$30.00</span>
                                                            <span class="percentsaving">25% </span></p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('30');('30')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexeca1.html?route=product/quick_view&amp;product_id=30">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('30 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('30 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-1">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index6320.html?route=product/product&amp;product_id=28">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/13-254x252.jpg')}}"
                                                                 title="adipiscing mollitelit ipsum"
                                                                 alt="adipiscing mollitelit ipsum"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/10-254x252.jpg')}}"
                                                                 title="adipiscing mollitelit ipsum"
                                                                 alt="adipiscing mollitelit ipsum"/>
                                                        </a>
                                                        <div class="saleback">
                                                            <span class="saleicon sale">sale</span>
                                                        </div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index6320.html?route=product/product&amp;product_id=28">adipiscing
                                                                mollitelit ipsum </a></h4>
                                                        <p class="price"><span class="price-new">$278.00</span> <span
                                                                class="price-old">$362.00</span> <span
                                                                class="price-tax">Ex Tax:$230.00</span> <span
                                                                class="percentsaving">23% </span></p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('28');('28')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index097a.html?route=product/quick_view&amp;product_id=28">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('28 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('28 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-1">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexcae8.html?route=product/product&amp;product_id=41">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/7-254x252.jpg')}}"
                                                                 title="Short Sleeve T-Shirt" alt="Short Sleeve T-Shirt"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/8-254x252.jpg')}}"
                                                                 title="Short Sleeve T-Shirt"
                                                                 alt="Short Sleeve T-Shirt"/>
                                                        </a>
                                                        <div class="label_new"><span>new</span></div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="indexcae8.html?route=product/product&amp;product_id=41">Short
                                                                Sleeve T-Shirt </a></h4>
                                                        <p class="price">$122.00 <span
                                                                class="price-tax">Ex Tax:$100.00</span></p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('41');('41')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index059b.html?route=product/quick_view&amp;product_id=41">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('41 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('41 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="tab-specialproduct-0" class="special-products home-products">
                                    <div class="ttm-product-boxproductbox-grid" id="special-grid">
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="index6320.html?route=product/product&amp;product_id=28">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/13-254x252.jpg')}}"
                                                                 title="adipiscing mollitelit ipsum"
                                                                 alt="adipiscing mollitelit ipsum"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/10-254x252.jpg')}}"
                                                                 title="adipiscing mollitelit ipsum"
                                                                 alt="adipiscing mollitelit ipsum"/>
                                                        </a>
                                                        <div class="saleback">
                                                            <span class="saleicon sale">sale</span>
                                                        </div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">Bumper</div>
                                                        <h4>
                                                            <a href="index6320.html?route=product/product&amp;product_id=28">adipiscing
                                                                mollitelit ipsum </a></h4>
                                                        <p class="price"><span class="price-new">$278.00</span> <span
                                                                class="price-old">$362.00</span> <span
                                                                class="price-tax">Ex Tax:$230.00</span> <span
                                                                class="percentsaving">23%</span></p>

                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('28');('28')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="index097a.html?route=product/quick_view&amp;product_id=28">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('28 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('28 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="product-items col-lg-3 col-md-4 col-sm-4 col-xs-6">

                                            <div class="product-block product-thumb">
                                                <div class="product-thumb-inner">
                                                    <div class="image"><a
                                                            href="indexf073.html?route=product/product&amp;product_id=30">
                                                            <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/15-254x252.jpg')}}"
                                                                 title="consectetur adipiscing"
                                                                 alt="consectetur adipiscing"
                                                                 class="img-responsive reg-image"/>
                                                            <img class="img-responsive hover-image"
                                                                 src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                                 title="consectetur adipiscing"
                                                                 alt="consectetur adipiscing"/>
                                                        </a>
                                                        <div class="saleback">
                                                            <span class="saleicon sale">sale</span>
                                                        </div>

                                                    </div>
                                                    <div class="caption">
                                                        <div class="category">accessories</div>
                                                        <h4>
                                                            <a href="indexf073.html?route=product/product&amp;product_id=30">consectetur
                                                                adipiscing </a></h4>
                                                        <p class="price"><span class="price-new">$38.00</span> <span
                                                                class="price-old">$50.00</span> <span class="price-tax">Ex Tax:$30.00</span>
                                                            <span class="percentsaving">25%</span></p>

                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span> <span
                                                                class="fa fa-stack"><i
                                                                    class="fa fa-star off fa-stack-2x"></i></span></div>

                                                        <div class="button-group">
                                                            <button type="button" data-toggle="tooltip"
                                                                    data-placement="top" class="addtocart"
                                                                    title="Add to Cart" onclick="cart.add('30');('30')">
                                                                <span
                                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                            </button>
                                                            <div class="quickview" data-toggle="tooltip"
                                                                 data-placement="top" title="Quick view"><a
                                                                    href="indexeca1.html?route=product/quick_view&amp;product_id=30">Quick
                                                                    view</a></div>
                                                            <button class="wishlist" data-toggle="tooltip"
                                                                    data-placement="top" type="button"
                                                                    title="Add to Wish List "
                                                                    onclick="wishlist.add('30 ');"></button>
                                                            <button class="compare" data-toggle="tooltip" type="button"
                                                                    data-placement="top" title="Compare this Product "
                                                                    onclick="compare.add('30 ');"></button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="featured box product-box">

                    <div class="container">
                        <div class="heading-title">
                            <div class="main-heading">trending products</div>
                        </div>

                        <div class="ttm-content-box">
                            <div class="featured-products home-products">
                                <div class="ttm-product-box product_carousel" id=" featured-carousel">
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexb8ca.html?route=product/product&amp;product_id=43">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/6-254x252.jpg')}}"
                                                             title="Riding Pants" alt="Riding Pants"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/7-254x252.jpg')}}"
                                                             title="Riding Pants" alt="Riding Pants"/>
                                                    </a>
                                                    <div class="label_new"><span>new</span></div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="indexb8ca.html?route=product/product&amp;product_id=43"
                                                           title="Riding Pants">Riding Pants </a></h4>
                                                    <p class="price">$602.00 <span
                                                            class="price-tax">Ex Tax:$500.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('43');('43')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexff8a.html?route=product/quick_view&amp;product_id=43">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('43 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('43 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexbb02.html?route=product/product&amp;product_id=42">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/17-254x252.jpg')}}"
                                                             title="Digital Print Muffler Slinky"
                                                             alt="Digital Print Muffler Slinky"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/3-254x252.jpg')}}"
                                                             title="Digital Print Muffler Slinky"
                                                             alt="Digital Print Muffler Slinky"/>
                                                    </a>
                                                    <div class="label_new"><span>new</span></div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="indexbb02.html?route=product/product&amp;product_id=42"
                                                           title="Digital Print Muffler Slinky">Digital Print Muffler
                                                            Slinky </a></h4>
                                                    <p class="price">$902.00 <span
                                                            class="price-tax">Ex Tax:$750.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('42');('42')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index6d6f.html?route=product/quick_view&amp;product_id=42">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('42 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('42 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexf073.html?route=product/product&amp;product_id=30">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/15-254x252.jpg')}}"
                                                             title="consectetur adipiscing" alt="consectetur adipiscing"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                             title="consectetur adipiscing"
                                                             alt="consectetur adipiscing"/>
                                                    </a>
                                                    <div class="saleback">
                                                        <span class="saleicon sale">sale</span>
                                                    </div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="indexf073.html?route=product/product&amp;product_id=30"
                                                           title="consectetur adipiscing">consectetur adipiscing </a>
                                                    </h4>
                                                    <p class="price"><span class="price-new">$38.00</span> <span
                                                            class="price-old">$50.00</span> <span class="price-tax">Ex Tax:$30.00</span>
                                                        <span class="percentsaving">25% </span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('30');('30')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexeca1.html?route=product/quick_view&amp;product_id=30">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('30 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('30 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="index6320.html?route=product/product&amp;product_id=28">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/13-254x252.jpg')}}"
                                                             title="adipiscing mollitelit ipsum"
                                                             alt="adipiscing mollitelit ipsum"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/10-254x252.jpg')}}"
                                                             title="adipiscing mollitelit ipsum"
                                                             alt="adipiscing mollitelit ipsum"/>
                                                    </a>
                                                    <div class="saleback">
                                                        <span class="saleicon sale">sale</span>
                                                    </div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="index6320.html?route=product/product&amp;product_id=28"
                                                           title="adipiscing mollitelit ipsum">adipiscing mollitelit
                                                            ipsum </a></h4>
                                                    <p class="price"><span class="price-new">$278.00</span> <span
                                                            class="price-old">$362.00</span> <span class="price-tax">Ex Tax:$230.00</span>
                                                        <span class="percentsaving">23% </span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('28');('28')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index097a.html?route=product/quick_view&amp;product_id=28">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('28 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('28 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="index5e0b.html?route=product/product&amp;product_id=36">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/1-254x252.jpg')}}"
                                                             title="aliqua deserunt elit" alt="aliqua deserunt elit"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/5-254x252.jpg')}}"
                                                             title="aliqua deserunt elit" alt="aliqua deserunt elit"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="index5e0b.html?route=product/product&amp;product_id=36"
                                                           title="aliqua deserunt elit">aliqua deserunt elit </a></h4>
                                                    <p class="price">$782.00 <span
                                                            class="price-tax">Ex Tax:$650.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('36');('36')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index0d3e.html?route=product/quick_view&amp;product_id=36">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('36 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('36 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="index0f47.html?route=product/product&amp;product_id=29">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/11-254x252.jpg')}}"
                                                             title="Butterflies Hand composite"
                                                             alt="Butterflies Hand composite"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/17-254x252.jpg')}}"
                                                             title="Butterflies Hand composite"
                                                             alt="Butterflies Hand composite"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="index0f47.html?route=product/product&amp;product_id=29"
                                                           title="Butterflies Hand composite">Butterflies Hand
                                                            composite </a></h4>
                                                    <p class="price">$337.99 <span
                                                            class="price-tax">Ex Tax:$279.99</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('29');('29')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexf72e.html?route=product/quick_view&amp;product_id=29">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('29 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('29 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexd21c.html?route=product/product&amp;product_id=47">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/12-254x252.jpg')}}"
                                                             title="Caprese Satchel combines"
                                                             alt="Caprese Satchel combines"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/2-254x252.jpg')}}"
                                                             title="Caprese Satchel combines"
                                                             alt="Caprese Satchel combines"/>
                                                    </a>
                                                    <div class="label_new"><span>new</span></div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="indexd21c.html?route=product/product&amp;product_id=47"
                                                           title="Caprese Satchel combines">Caprese Satchel
                                                            combines </a></h4>
                                                    <p class="price">$122.00 <span
                                                            class="price-tax">Ex Tax:$100.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('47');('47')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index7f5a.html?route=product/quick_view&amp;product_id=47">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('47 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('47 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexcae8.html?route=product/product&amp;product_id=41">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/7-254x252.jpg')}}"
                                                             title="Short Sleeve T-Shirt" alt="Short Sleeve T-Shirt"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/8-254x252.jpg')}}"
                                                             title="Short Sleeve T-Shirt" alt="Short Sleeve T-Shirt"/>
                                                    </a>
                                                    <div class="label_new"><span>new</span></div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="indexcae8.html?route=product/product&amp;product_id=41"
                                                           title="Short Sleeve T-Shirt">Short Sleeve T-Shirt </a></h4>
                                                    <p class="price">$122.00 <span
                                                            class="price-tax">Ex Tax:$100.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('41');('41')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index059b.html?route=product/quick_view&amp;product_id=41">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('41 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('41 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexb77e.html?route=product/product&amp;product_id=48">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/8-254x252.jpg')}}"
                                                             title="Striped Muffler breakthrough"
                                                             alt="Striped Muffler breakthrough"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/9-254x252.jpg')}}"
                                                             title="Striped Muffler breakthrough"
                                                             alt="Striped Muffler breakthrough"/>
                                                    </a>
                                                    <div class="label_new"><span>new</span></div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="indexb77e.html?route=product/product&amp;product_id=48"
                                                           title="Striped Muffler breakthrough">Striped Muffler
                                                            breakthrough </a></h4>
                                                    <p class="price">$122.00 <span
                                                            class="price-tax">Ex Tax:$100.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('48');('48')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexdd37.html?route=product/quick_view&amp;product_id=48">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('48 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('48 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="index75be.html?route=product/product&amp;product_id=50">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/2-254x252.jpg')}}"
                                                             title="High Waist Pants" alt="High Waist Pants"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/20-254x252.jpg')}}"
                                                             title="High Waist Pants" alt="High Waist Pants"/>
                                                    </a>
                                                    <div class="label_new"><span>new</span></div>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="index75be.html?route=product/product&amp;product_id=50"
                                                           title="High Waist Pants">High Waist Pants </a></h4>
                                                    <p class="price">$750.00 <span
                                                            class="price-tax">Ex Tax:$750.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('50');('50')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexabd0.html?route=product/quick_view&amp;product_id=50">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('50 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('50 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="index6a4d.html?route=product/product&amp;product_id=33">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/9-254x252.jpg')}}"
                                                             title="White Long Sleeve Shirt"
                                                             alt="White Long Sleeve Shirt"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/1-254x252.jpg')}}"
                                                             title="White Long Sleeve Shirt"
                                                             alt="White Long Sleeve Shirt"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="index6a4d.html?route=product/product&amp;product_id=33"
                                                           title="White Long Sleeve Shirt">White Long Sleeve Shirt </a>
                                                    </h4>
                                                    <p class="price">$182.00 <span
                                                            class="price-tax">Ex Tax:$150.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('33');('33')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index0ac7.html?route=product/quick_view&amp;product_id=33">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('33 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('33 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexbfcf.html?route=product/product&amp;product_id=31">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/14-254x252.jpg')}}"
                                                             title="cillum dolore officia" alt="cillum dolore officia"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                             title="cillum dolore officia" alt="cillum dolore officia"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="indexbfcf.html?route=product/product&amp;product_id=31"
                                                           title="cillum dolore officia">cillum dolore officia </a></h4>
                                                    <p class="price">$98.00 <span class="price-tax">Ex Tax:$80.00</span>
                                                    </p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('31');('31')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index73c4.html?route=product/quick_view&amp;product_id=31">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('31 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('31 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexa17e.html?route=product/product&amp;product_id=32">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/19-254x252.jpg')}}"
                                                             title="faucibus iPhone" alt="faucibus iPhone"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/1-254x252.jpg')}}"
                                                             title="faucibus iPhone" alt="faucibus iPhone"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">accessories</div>
                                                    <h4><a href="indexa17e.html?route=product/product&amp;product_id=32"
                                                           title="faucibus iPhone">faucibus iPhone </a></h4>
                                                    <p class="price">$122.00 <span
                                                            class="price-tax">Ex Tax:$100.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('32');('32')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexcc95.html?route=product/quick_view&amp;product_id=32">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('32 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('32 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="index9144.html?route=product/product&amp;product_id=40">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/20-254x252.jpg')}}"
                                                             title="Mechanical watch Slogan"
                                                             alt="Mechanical watch Slogan"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/18-254x252.jpg')}}"
                                                             title="Mechanical watch Slogan"
                                                             alt="Mechanical watch Slogan"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Bumper</div>
                                                    <h4><a href="index9144.html?route=product/product&amp;product_id=40"
                                                           title="Mechanical watch Slogan">Mechanical watch Slogan </a>
                                                    </h4>
                                                    <p class="price">$123.20 <span
                                                            class="price-tax">Ex Tax:$101.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('40');('40')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="index9aba.html?route=product/quick_view&amp;product_id=40">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('40 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('40 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=" product-slider">

                                        <div class="product-block product-thumb">
                                            <div class="product-thumb-inner">
                                                <div class="image"><a
                                                        href="indexc21e.html?route=product/product&amp;product_id=34">
                                                        <img src="{{asset('assets/img/frontend/image/cache/catalog/pro/3-254x252.jpg')}}"
                                                             title="musical dolor reprehenderit"
                                                             alt="musical dolor reprehenderit"
                                                             class="img-responsive reg-image"/>
                                                        <img class="img-responsive hover-image"
                                                             src="{{asset('assets/img/frontend/image/cache/catalog/pro/4-254x252.jpg')}}"
                                                             title="musical dolor reprehenderit"
                                                             alt="musical dolor reprehenderit"/>
                                                    </a>


                                                </div>
                                                <div class="caption">
                                                    <div class="category">Sparking cable</div>
                                                    <h4><a href="indexc21e.html?route=product/product&amp;product_id=34"
                                                           title="musical dolor reprehenderit">musical dolor
                                                            reprehenderit </a></h4>
                                                    <p class="price">$122.00 <span
                                                            class="price-tax">Ex Tax:$100.00</span></p>

                                                    <div class="rating"><span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span> <span
                                                            class="fa fa-stack"><i
                                                                class="fa fa-star off fa-stack-2x"></i></span></div>


                                                    <div class="button-group">
                                                        <button type="button" data-toggle="tooltip" data-placement="top"
                                                                class="addtocart" title="Add to Cart"
                                                                onclick="cart.add('34');('34')"><span
                                                                class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                                        </button>
                                                        <div class="quickview" data-toggle="tooltip"
                                                             data-placement="top" title="Quick view"><a
                                                                href="indexa341.html?route=product/quick_view&amp;product_id=34">Quick
                                                                view</a></div>
                                                        <button class="wishlist" data-toggle="tooltip"
                                                                data-placement="top" type="button"
                                                                title="Add to Wish List "
                                                                onclick="wishlist.add('34 ');"></button>
                                                        <button class="compare" data-toggle="tooltip" type="button"
                                                                data-placement="top" title="Compare this Product "
                                                                onclick="compare.add('34 ');"></button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ttm-newsletter">
                    <div class="container">
                        <div class="newsletter-inner">
                            <div class="newsletter-details">
                                <div class="newsletter-title">Subscribe Our Newsletter!</div>
                                <div class="desc">Be the first to receive exclusive promotions, updates and product
                                    announcements. Subscribe to our mailing list now!
                                </div>
                            </div>
                            <div class="newsletter-wrapper">
                                <form method="post">
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="txtemail">Your email address</label>
                                        <div class="news-content">
                                            <input type="email" name="txtemail" id="txtemail" value=""
                                                   placeholder="Your email address" class="form-control input-lg"/>
                                        </div>
                                        <div class="subscribe_button">
                                            <button type="submit" onclick="return ttmnewsletter.ValidateEmail();"
                                                    class="btn btn-default btn-lg">Subscribe now!
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="carousel-0" class="brand-banners-slider">

                    <div class="container">
                        <div class="brand_carousel" id="brand-0-carousel">
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-1-140x63.png')}}"
                                            alt="carousel1"/></a></div>
                            </div>
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-2-140x63.png')}}"
                                            alt="carousel2"/></a></div>
                            </div>
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-3-140x63.png')}}"
                                            alt="carousel3"/></a></div>
                            </div>
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-4-140x63.png')}}"
                                            alt="carousel4"/></a></div>
                            </div>
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-5-140x63.png')}}"
                                            alt="carousel5"/></a></div>
                            </div>
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-6-140x63.png')}}"
                                            alt="carousel6"/></a></div>
                            </div>
                            <div class="brand-slider">
                                <div class="product-thumb-inner"><a href="#"><img
                                            src="{{asset('assets/img/frontend/image/cache/catalog/manufacturer/logo-7-140x63.png')}}"
                                            alt="carousel7"/></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>
