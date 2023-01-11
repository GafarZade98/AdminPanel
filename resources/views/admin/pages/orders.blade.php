@extends('admin.layout')
@section('title', 'Admin Panel | ' . trans('admin.sidebar.orders'))
@section('content')
<main id="main" class="main">
    <div>
        <div class="page-title">
            <h1>@lang('admin.sidebar.orders')</h1>
            <x-bread-crumb>
                <x-bread-crumb-link :link="route('account.index')">
                    @lang('admin.sidebar.dashboard')
                </x-bread-crumb-link>
                <x-bread-crumb-link>
                    @lang('admin.sidebar.orders')
                </x-bread-crumb-link>
            </x-bread-crumb>
        </div>
    </div>

    <section class="my-2">
        <div class="row">
            <form action="{{ route('orders.view') }}" id="filterForm">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" value="{{request()->get('search')}}" placeholder="@lang('admin.buttons.search')" aria-label="@lang('admin.buttons.search')" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">@lang('admin.buttons.search')</button>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="input-group">
                            <select name="limit" id="limit" class="form-select" aria-label="limit">
                                @foreach([25, 50, 100, 250, 500] as $size)
                                    <option @if(request()->get('limit') == $size) selected @endif value="{{$size}}">{{$size}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="section profile">
        <div class="row">
            <table class="table table-responsive-md shadow-sm">
                <thead>
                    <th>#</th>
                    <td>@lang('admin.columns.name_s')</td>
                    <td>@lang('admin.columns.code')</td>
                    <td>@lang('admin.columns.phone')</td>
                    <td>@lang('admin.columns.city')</td>
                    <td>@lang('admin.columns.amount')</td>
                    <td>@lang('website.general.shipping')</td>
                    <td>@lang('admin.columns.status')</td>
                </thead>

                <tbody>
                    @foreach($orders as $order)
                        <tr data-bs-toggle="collapse" data-bs-target="#collapseOrder-{{$order->getAttribute('id')}}">
                            <th>{{$loop->iteration}}</th>
                            <th>{{$order->getAttribute('name')}}</th>
                            <th>{{optional($order)->getAttribute('code')}}</th>
                            <th>{{$order->getAttribute('phone')}}</th>
                            <th>{{$order->getAttribute('city')}}</th>
                            <td>{{$order->getAttribute('amount')}}</td>
                            <td>{{$order->getAttribute('shipping')}}</td>

                            <td>@lang('admin.order.status.' . $order->getAttribute('status'))</td>
                            <td>
                                <a data-orders='@json($order)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                                @can('delete', \App\Models\Order::class)
                                    <a data-orders='@json($order)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
                                @endcan
                            </td>
                        </tr>

                        <tr class="collapse" id="collapseOrder-{{$order->getAttribute('id')}}">
                            <td>
                            @foreach($order->product as $product)
                                <p>{{$product->getAttribute('name')}} - {{$product->getAttribute('price')}} AZN -
                                    x{{$product->pivot->quantity}} - {{$product->pivot->features}}</p>
                            @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">@lang('admin.notification.warning')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info" role="alert">@lang('admin.notification.delete')</div>
                        </div>
                        <form action="" id="delete-form" method="POST">
                            @csrf @method('DELETE')
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('admin.buttons.no')</button>
                                <button type="submit" class="btn btn-danger">@lang('admin.buttons.yes')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title main-modal" id="modalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST" id="orders-form" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-2">
                                        <label for="name">@lang('admin.columns.name_s')</label>
                                        <input name="name" class="form-control" id="name">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="phone">@lang('admin.columns.phone')</label>
                                        <input name="phone" class="form-control" id="phone">
                                    </div>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="city">@lang('admin.columns.city')</label>
                                        <input name="city" class="form-control" id="city">
                                    </div>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="zip">@lang('admin.columns.zip')</label>
                                        <input name="zip" class="form-control" id="zip">
                                    </div>

                                    <div class="form-group col-md-12 mb-2 text-value">
                                        <label for="address">@lang('admin.columns.address')</label>
                                        <textarea name="address" class="form-control" id="address"></textarea>
                                    </div><hr>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="amount">@lang('admin.columns.amount')</label>
                                        <input name="amount" class="form-control" id="amount">
                                    </div>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="shipping">@lang('website.general.shipping')</label>
                                        <input name="shipping" class="form-control" id="shipping">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('admin.buttons.close')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="float-end">
        {{$orders->appends(request()->input())->links()}}
    </div>
</main>
<script>

    $('#limit').change(function () {
        $('#filterForm').submit()
    })

    $('.show').on('click', function () {
        let orders = $(this).data('orders');

        $('#orders-form input[name="name"]').val(orders.name);
        $('#orders-form input[name="phone"]').val(orders.phone);
        $('#orders-form input[name="city"]').val(orders.city);
        $('#orders-form input[name="zip"]').val(orders.zip);
        $('#orders-form input[name="amount"]').val(orders.amount);
        $('#orders-form input[name="shipping"]').val(orders.shipping);
        $('#orders-form textarea[name="address"]').val(orders.address);
        $('#orders-form :input').attr('disabled', true)
        $('.main-modal').html('{{trans('admin.sidebar.orders'). ' '. trans('admin.buttons.show')}}')
    })

    $('.delete').on('click', function () {
        let orders = $(this).data('orders');
        let form = "{{route('orders.delete', 'id')}}".replace('id', orders.id)
        $('#delete-form').attr('action', form)
    })

    $("#modal").on("hidden.bs.modal", function () {
        $('#orders-form button').show()
        $('#orders-form :input').attr('disabled', false)
    });
</script>
@endsection
