<div class="ttm-category-box">
    <div class="container">
        <div class="heading-title">
            <div class="main-heading">Shop by category</div>
        </div>
        <div class="ttmcat-items">
            <div id="ttmcat_carousel" class="category-boxttmcat-carousel">
                @foreach($categories as $category)
                    <div class="ttmcat-slider">
                        <div class="content">
                            <div class="image">
                                <a href="{{ route('products', $category->id )}}">
                                    <img src="{{image($category->getAttribute('image'))}}" alt="category" class="img-responsive"/>
                                </a>
                            </div>
                            <div class="caption">
                                <div class="cat-title"><h4><a href="">{{$category->getAttribute('name')}}</a></h4></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
