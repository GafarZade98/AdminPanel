@extends('website.layout')
@section('title', trans('website.general.wishlist'))
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
                <section class="h-100" style="background-color: #eee;">
                    <div class="container h-100 py-5">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-10">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="fw-normal mb-0 text-black">@lang('website.general.wishlist')</h3>
                                </div>

                                <div class="card rounded-3 mb-4">
                                    <div class="card-body p-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                    class="img-fluid rounded-3" width="150" height="150" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                            </div>

                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h5 class="mb-0">$499.00</h5>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
