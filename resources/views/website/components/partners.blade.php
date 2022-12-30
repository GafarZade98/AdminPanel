<div id="carousel-0" class="brand-banners-slider">
    <div class="container">
        <div class="brand_carousel" id="brand-0-carousel">
            @foreach($partners as $partner)
                <div class="brand-slider">
                    <div class="product-thumb-inner">
                        <a href="#"><img src="{{image($partner->getAttribute('image'))}}" alt="carousel1"/></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
