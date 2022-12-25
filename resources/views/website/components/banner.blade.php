<div class="content-top">
    <div id="content">
        <div class="tmm_slideshow slideshow-0">
            <div id="spinner"></div>
            <div class="swiper-viewport">
                <div id="slideshow0" class="swiper-container" style="opacity: 1;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center"><a href="#"><img
                                    src="{{asset('assets/img/frontend/image/cache/catalog/banners/main-banner-01-1920x666.png')}}"
                                    alt="main-banner1" class="img-responsive"/></a></div>
                        <div class="swiper-slide text-center"><a href="#"><img
                                    src="{{asset('assets/img/frontend/image/cache/catalog/banners/main-banner-02-1920x666.png')}}"
                                    alt="main-banner2" class="img-responsive"/></a></div>
                    </div>
                </div>
                <div class="swiper-pagination slideshow0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript"><!--
            $('#slideshow0').swiper({
                mode: 'horizontal',
                slidesPerView: 1,
                pagination: '.slideshow0',
                paginationClickable: true,
                nextButton: '.slideshow-0 .swiper-button-next',
                prevButton: '.slideshow-0 .swiper-button-prev',
                spaceBetween: 0,
                autoplay: 25000,
                autoplayDisableOnInteraction: true,
                loop: true/*,
  paginationType: 'bullets'*/
            });
            $(window).load(function () {
                $(".slideshow-0 #spinner").fadeOut("slow");
            });
            --></script>
    </div>

</div>
