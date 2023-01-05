@extends('website.layout')
@section('title', trans('website.general.checkout'))
@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.checkout')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.checkout')</p>
            </div>
        </div>
    </div>
    @if($orders)
        <form action="{{ route('orders.update', $orders) }}" method="POST">
            @csrf
            <div class="container-fluid pt-5">
                <div class="row px-xl-5">
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <h4 class="font-weight-semi-bold mb-4">@lang('website.general.billing_ddress')</h4>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>@lang('admin.columns.name_s')</label>
                                    <input class="form-control" aria-label="name" type="text" name="name" placeholder="@lang('admin.placeholders.name')">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>@lang('admin.columns.phone')</label>
                                    <input class="form-control" aria-label="phone" type="text" name="phone" placeholder="@lang('admin.placeholders.phone')">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>@lang('admin.columns.city')</label>
                                    <input class="form-control" aria-label="city" type="text" name="city" placeholder="@lang('admin.placeholders.city')">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>@lang('admin.columns.zip')</label>
                                    <input class="form-control" aria-label="zip" type="text" name="zip" placeholder="@lang('admin.placeholders.zip')">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>@lang('admin.columns.address')</label>
                                    <input class="form-control" aria-label="address" type="text" name="address" placeholder="@lang('admin.placeholders.address')">
                                </div>

        {{--                        <div class="col-md-6 form-group">--}}
        {{--                            <label>Country</label>--}}
        {{--                            <select class="custom-select">--}}
        {{--                                <option selected>United States</option>--}}
        {{--                                <option>Afghanistan</option>--}}
        {{--                                <option>Albania</option>--}}
        {{--                                <option>Algeria</option>--}}
        {{--                            </select>--}}
        {{--                        </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">@lang('website.general.orderTotal')</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-medium mb-3">@lang('website.general.products')</h5>
    {{--                            @foreach($orders as $order)--}}
                                    @foreach($orders->product as $product)
                                        <div class="d-flex justify-content-between">
                                            <p>{{$product->getAttribute('name')}}</p>
                                            <p>{{ $totalPrice[] = $product->getAttribute('price')}} AZN</p>
                                        </div>
    {{--                                @endforeach--}}
                                @endforeach
                                <hr class="mt-0">
                                <div class="d-flex justify-content-between mb-3 pt-1">
                                    <h6 class="font-weight-medium">@lang('website.general.subtotal')</h6>
                                    <h6 class="font-weight-medium">@if(isset($totalPrice)) {{array_sum($totalPrice)}} @endif AZN</h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">@lang('website.general.shipping')</h6>
                                    <h6 class="font-weight-medium">{{$shipping}} AZN</h6>
                                </div>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <div class="d-flex justify-content-between mt-2">
                                    <h5 class="font-weight-bold">@lang('admin.columns.total')</h5>
                                    <h5 class="font-weight-bold">@if(isset($totalPrice)) {{array_sum($totalPrice) + $shipping}} @endif AZN</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">@lang('website.general.payment')</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                        <label class="custom-control-label" for="paypal">@lang('website.general.cash')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">@lang('website.general.place_order')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <div class="alert col-12">@lang('website.general.cart_is_empty')</div>
    @endif
@endsection
