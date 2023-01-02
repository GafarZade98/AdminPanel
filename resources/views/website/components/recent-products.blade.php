<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">@lang('website.general.new_products')</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        @foreach($recentProducts as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{image($product->getAttribute('image'))}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$product->getAttribute('name')}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{$product->getAttribute('price')}}</h6>
                            <h6 class="text-muted ml-2">
                                <del>{{$product->getAttribute('price')*1.10}}</del>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{route('product', $product->getAttribute('code'))}}" class="btn btn-sm text-dark p-0"><i
                                class="fas fa-eye text-primary mr-1"></i>@lang('website.general.view')</a>
                        <a class="btn btn-sm text-dark p-0" href="{{ route('cart.create') }}"
                           onclick="event.preventDefault(); document.getElementById('add-to-cart').submit();">

                            <form id="add-to-cart" action="{{ route('cart.create') }}" method="POST" class="d-none">
                                <input type="hidden" name="product_id" value="{{$product->getAttribute('id')}}">
                                <input type="hidden" name="quantity" value="1">
                                @csrf
                            </form><i
                                class="fas fa-shopping-cart text-primary mr-1"></i>@lang('website.general.add_to_cart')
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
