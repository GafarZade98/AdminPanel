<div class="featured box product-box">

    <div class="container">
        <div class="heading-title">
            <div class="main-heading">trending products</div>
        </div>

        <div class="ttm-content-box">
            <div class="featured-products home-products">
                <div class="ttm-product-box product_carousel" id=" featured-carousel">
                    @foreach($recentProducts as $product)
                        <div class=" product-slider">
                            <div class="product-block product-thumb">
                                <div class="product-thumb-inner">
                                    <div class="image"><a href="{{route('product')}}">
                                            <img
                                                src="{{image($product->getAttribute('image'))}}"
                                                title="Riding Pants" alt="Riding Pants"
                                                class="img-responsive reg-image"/>
                                            <img class="img-responsive hover-image"
                                                 src="{{image($product->getAttribute('image'))}}"
                                                 title="Riding Pants" alt="Riding Pants"/>
                                        </a>
                                        <div class="label_new"><span>yeni</span></div>


                                    </div>
                                    <div class="caption">
                                        <div class="category">{{$product->getRelationValue('category')->getAttribute('name')}}</div>
                                        <h4><a href="{{ route('product') }}"
                                               title="Riding Pants">{{$product->getAttribute('name')}}</a></h4>
                                        <p class="price">{{$product->getAttribute('price')}} <span
                                                class="price-tax">{{$product->getAttribute('tax')}}</span></p>

                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" data-placement="top"
                                                    class="addtocart" title="Add to Cart">
                                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart								</span>
                                            </button>
                                            <button class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" type="button"
                                                    title="Add to Wish List ">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
