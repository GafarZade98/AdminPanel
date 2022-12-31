@extends('website.layout')
@section('title', trans('website.general.products'))

@section('content')
    <div class="ttm-breadcrumb" id="breadcrumb">
        <div class="container">

        </div>
    </div>
    <div class="categorypage">
        <div id="product-category" class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ route('all-products') }}">@lang('website.general.products')</a></li>
            </ul>
            <div class="row">
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <div class="box">
                        <div class="heading-title">
                            <div class="sidebar-heading">Categories</div>
                        </div>
                        <div class="ttm-content-box">
                            <ul class="box-category treeview-list treeview">

                                @foreach($categories as $cat)
                                    <li>
                                        <a href="{{ route('products', $cat->getAttribute('slug')) }}" class="active"> {{$cat->getAttribute('name')}}</a>
                                        @if(count($cat->categories) >> 0)
                                        <ul>@foreach($cat->categories as $subCategory)
                                            <li><a href="{{ route('products', $subCategory->getAttribute('slug')) }}">{{$subCategory->getAttribute('name')}}</a></li>
                                            @endforeach
                                        </ul>
                                            @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="box sidebarFilter">
                        <div class="heading-title">
                            <div class="sidebar-heading">Filter</div>
                        </div>
                        <div class="filterbox">
                            <div class="list-group">
                                <div class="list-group-items">
                                    <a class="list-group-item">Colors</a>

                                    <div class="list-group-item">
                                        <div id="filter-group1">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="4"/>Red</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="3"/>Black</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="2"/>Green</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="1"/>Blue</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-items">
                                    <a class="list-group-item">Size</a>

                                    <div class="list-group-item">
                                        <div id="filter-group4">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="16"/>M</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="15"/>L</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="14"/>XL</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="13"/>XXL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-items">
                                    <a class="list-group-item">Price</a>

                                    <div class="list-group-item">
                                        <div id="filter-group3">
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="9"/>$30.00 -
                                                    $200.00 </label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="10"/>$201.00 -
                                                    $500.00 </label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="11"/>$501.00 -
                                                    $800.00</label>
                                            </div>
                                            <div class="checkbox">
                                                <label> <input type="checkbox" name="filter[]" value="12"/>$801.00 -
                                                    $3000.00</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    <button type="button" id="button-filter" class="btn btn-primary">@lang('website.general.filter')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </aside>
                <div id="content" class="col-sm-9 categorypage">
                    <h2 class="page-title"> @lang('website.general.products')</h2>
                    <div class="row category_thumb">
                    <div class="category_filter">
                        <div class="col-md-4 btn-list-grid">
                            <div class="btn-group">
                                <button type="button" data-toggle="tooltip" data-placement="top" id="grid-view"
                                        class="btn btn-default grid" title="Grid"><i class="fa fa-th"></i></button>
                                <button type="button" data-toggle="tooltip" data-placement="top" id="list-view"
                                        class="btn btn-default list" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>

                        <div class="pagination-right">
                            <div class="sort-by-wrapper">
                                <div class="col-md-2 text-right sort-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                </div>
                                <div class="col-md-3 text-right sort">
                                    <select id="input-sort" name="sort" class="form-control">
                                        <option  @if(request()->get('sort') == 'id') selected @endif value="id">Default</option>
                                        <option value="name" @if(request()->get('sort') == 'name') selected @endif>Name (A - Z)</option>
                                        <option value="price" @if(request()->get('sort') == 'price') selected @endif>Price (Low &gt; High)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="show-wrapper">
                                <div class="col-md-1 text-right show">
                                    <label class="control-label" for="input-limit">Show:</label>
                                </div>
                                <div class="col-md-2 text-right limit">
                                    <select name="limit" id="input-limit" class="form-control">
                                        @foreach([25, 50, 100, 250] as $size)
                                            <option @if(request()->get('limit') == $size) selected @endif value="{{$size}}">{{$size}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-image-inner">
                        <div class="row">
                    @foreach($products as $product)

                            <div class="product-layout product-list col-xs-12">
                                <div class="product-block product-thumb">
                                    <div class="product-thumb-inner">
                                        <div class="image"><a
                                                href="{{ route('product', $product->getAttribute('name')) }}">
                                                <img src="{{image($product->getAttribute('image'))}}"
                                                     title="musical dolor reprehenderit" alt="musical dolor reprehenderit"
                                                     class="img-responsive reg-image"/>
                                                <img class="img-responsive hover-image"
                                                     src="{{image($product->getAttribute('image'))}}"
                                                     title="musical dolor reprehenderit" alt="musical dolor reprehenderit"/>
                                            </a>
                                        </div>
                                        <div class="product-details">
                                            <div class="caption">
                                                <div class="category">{{$product->getRelationValue('category')->getAttribute('name')}}</div>
                                                <h4>
                                                    <a href="{{ route('product', $product->getAttribute('name')) }}">{{$product->getAttribute('name')}}</a>
                                                </h4>
                                                <p class="price">{{$product->getAttribute('price')}} AZN
                                                    <span class="price-tax">
                                                        Ex Tax:{{$product->getAttribute('tax')}} AZN
                                                    </span>
                                                </p>

                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" data-placement="top" class="addtocart" title="Add to Cart"><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                                                    </button>
                                                    <button class="wishlist" data-toggle="tooltip" data-placement="top" type="button" title="Add to Wish List"></button>
                                                </div>

                                                <p class="desc">
                                                    @if (strlen($product->getAttribute('description')) > 240)
                                                        {!!substr($product->getAttribute('description'), 0, 240) . '...'!!}
                                                    @else
                                                        {{$product->getAttribute('description')}}
                                                    @endif
                                                </p>
                                                <div class="btn-wish-compare">
                                                    <div class="button-group">
                                                        <button type="button" data-placement="left" title="Add to Cart" class="addtocart">Add to Cart</button>
                                                        <button class="wishlist" type="button" data-placement="left" title="Add to Wish List"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-6 text-left  page-result">Showing {{ $products->count()}} of {{is_numeric(request()->get('limit')) ? $products->total() : $products->count()}} </div>
{{--                        @lang('translates.total_items', ['count' => $products->count(), 'total' => is_numeric($filters['limit']) ? $works->total() : $works->count()])--}}
                    <div class="col-sm-6 text-right page-link">
                            {{$products->appends(request()->input())->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
