@extends('website.layout')
@section('title', trans('website.general.cart'))

@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.cart')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.cart')</p>
            </div>
        </div>
    </div>
    <form action="{{ route('orders.create') }}" method="POST">
        @csrf
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th>@lang('website.general.products')</th>
                        <th>@lang('admin.columns.features')</th>
                        <th>@lang('admin.columns.price')</th>
                        <th>@lang('admin.columns.quantity')</th>
                        <th>@lang('admin.columns.total_price')</th>
                        <th>@lang('admin.buttons.remove')</th>
                    </tr>
                    </thead>
                    <tbody class="align-middle">
                    @forelse($carts as $cart)
                        <input type="hidden" name="product_id[]" value="{{$cart->getRelationValue('product')->getAttribute('id')}}">
                        <input type="hidden" name="quantity[]" value="{{$cart->getAttribute('quantity')}}">
                        <input type="hidden" name="features[]" value=" {{$cart->getAttribute('color') .' , '. $cart->getAttribute('weight') .' , '. $cart->getAttribute('size') }}">
                        <tr>
                            <td class="align-middle">
                                <a href="{{ route('product', $cart->getRelationValue('product')->getAttribute('code'))}})">
                                    <img src="{{image($cart->getRelationValue('product')->getAttribute('image'))}}" alt="" style="width: 50px;">
                                    {{$cart->getRelationValue('product')->getAttribute('name')}}
                                </a>
                            </td>

                            <td class="align-middle">
                                {{$cart->getAttribute('color') .' / '. $cart->getAttribute('weight') .' / '. $cart->getAttribute('size') }}
                            </td>
                            <td class="product-price-{{$cart->getAttribute('id')}} align-middle">{{$cart->getRelationValue('product')->getAttribute('price')}} AZN</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <a class="btn btn-sm btn-primary btn-minus" data-carts='@json($cart)' >
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <input aria-label="quantity" type="text"
                                           readonly
                                           class="form-control form-control-sm bg-secondary product-quantity-{{$cart->getAttribute('id')}} text-center"
                                           value="{{$cart->getAttribute('quantity')}}">
                                    <div class="input-group-btn">
                                        <a class="btn btn-sm btn-primary btn-plus" data-carts='@json($cart)'>
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle product-total product-total-{{$cart->getAttribute('id')}}">{{ $totalPrice[] = ($cart->getAttribute('quantity') * $cart->getRelationValue('product')->getAttribute('price'))}}</td>
                            <td class="align-middle"><a data-carts='@json($cart)' class="btn btn-sm btn-primary delete"><i class="fa fa-times"></i></a></td>
                        </tr>
                    @empty
                        <div class="alert alert-success">@lang('website.general.cart_is_empty')</div>
                    @endforelse

                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
{{--                <form class="mb-5" action="">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control p-4 product-quantity-{{$cart->getAttribute('id')}}" placeholder="Coupon Code">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-primary">Apply Coupon</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">@lang('website.general.cart_summary')</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">@lang('website.general.subtotal')</h6>
                            <h6 class="subTotal font-weight-medium">@if(isset($totalPrice)) {{array_sum($totalPrice)}} @endif AZN</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">@lang('website.general.shipping')</h6>
                            <h6 class="font-weight-medium shipping">{{$shipping}} AZN</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">@lang('admin.columns.total_price')</h5>
                            <h5 class="font-weight-bold total">@if(isset($totalPrice)) {{array_sum($totalPrice) + $shipping}} @endif AZN</h5>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary my-3 py-3">@lang('website.general.proceed_to_checkout')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <form action="" id="delete-form" method="POST" class="d-none">
        @csrf @method('DELETE')
    </form>

@endsection

@section('scripts')

    <script>

        $('.btn-minus').on('click', function () {
            let carts = $(this).data('carts');
            let id = carts.id
            let quantity = $('.product-quantity-' + id).val()

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "cart/update/ "+ id + '/' + quantity,
                type: "POST",
            });
            let total = quantity * parseInt($('.product-price-' + id).html())
            $('.product-total-' + id).html(total)
            var sum = 0;

            $('.product-total').each(function(){
                sum += parseFloat($(this).text());
            });
            $('.subTotal').html(sum + ' AZN')
            $('.total').html(sum + parseInt($('.shipping').html()) + ' AZN')
        })


        $('.btn-plus').on('click',function () {
            let carts = $(this).data('carts');
            let id = carts.id
            let quantity = $('.product-quantity-' + id).val()

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "cart/update/ "+ id + '/' + quantity,
                type: "POST",
            });
            let total = quantity * parseInt($('.product-price-' + id).html())
            $('.product-total-' + id).html(total)
            var sum = 0;

            $('.product-total').each(function(){
                sum += parseFloat($(this).text());
            });
            $('.subTotal').html(sum + ' AZN')
            $('.total').html(sum + parseInt($('.shipping').html()) + ' AZN')

        })
        $('.delete').on('click', function () {
            let carts = $(this).data('carts');
            let form = "{{route('cart.destroy', 'id')}}".replace('id', carts.id)
            $('#delete-form').attr('action', form)
            $('#delete-form').submit()
        })
    </script>

@endsection

