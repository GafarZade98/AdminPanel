<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        @foreach($categories as $category)
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 Products</p>
                <a href="{{ route('products', $category->getAttribute('slug') )}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{image($category->getAttribute('image'))}}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">{{$category->getAttribute('name')}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
