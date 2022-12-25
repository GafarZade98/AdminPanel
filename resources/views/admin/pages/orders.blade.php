@extends('admin.layout')

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
            <form action="{{ route('orders.index') }}" id="filterForm">
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
                    <td>@lang('admin.columns.key')</td>
                    <td>@lang('admin.columns.value')</td>
                    <td>@lang('admin.columns.type')</td>
                    <td>@lang('admin.columns.status')</td>
                    @can('create', \App\Models\Order::class)
                    <td><button class="btn btn-outline-success create" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button></td>
                    @endcan
                </thead>

                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th>{{$order->getAttribute('ordering')}}</th>
                        <td>{{$order->getAttribute('key')}}</td>
                        <td>{{$order->getAttribute('value')}}</td>
                        <td>{{$order->getAttribute('type')}}</td>
                        <td>@if ($order->getAttribute('status') == 1) <span class="text-secondary">@lang('admin.fields.active')</span> @else <span class="text-danger">@lang('admin.fields.passive')</span> @endif</td>
                        <td>
                            <a data-orders='@json($order)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                            @can('delete', \App\Models\Order::class)
                                <a data-orders='@json($order)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
                            @endcan
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
                        <form action="" method="POST" id="orders-form"  enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-2">
                                        <label for="key">@lang('admin.columns.key')</label>
                                        <input name="key" type="text" class="form-control" id="key" placeholder="Key Yazın">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="type">@lang('admin.columns.type')</label>
                                        <select name="type" id="type" class="form-select">
                                            <option value="text">Text</option>
                                            <option value="number">Number</option>
                                            <option value="file">File</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 mb-2 text-value">
                                        <label for="value">@lang('admin.columns.value')</label>
                                        <textarea name="value" class="form-control" id="value" placeholder="Value Yazın"></textarea>
                                    </div>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="description">@lang('admin.columns.description')</label>
                                        <input name="description" type="text" class="form-control" id="description" placeholder="Description Girin">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="ordering">@lang('admin.columns.ordering')</label>
                                        <input name="ordering" class="form-control" id="ordering" placeholder="@lang('admin.columns.ordering') Yazın">
                                    </div>

                                    <div class="form-group col-md-12 ">
                                        <label class="form-check-label" for="status">Status</label>
                                        <input type="checkbox" name="status" class="form-check-input" id="status">
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

        $('#orders-form input[name="description"]').val(orders.description);
        $('#orders-form input[name="ordering"]').val(orders.ordering);
        $('#orders-form :input').attr('disabled', true)
        $('.main-modal').html('{{trans('admin.sidebar.orders'). ' '. trans('admin.buttons.show')}}')
    })

    $('.delete').on('click', function () {
        let orders = $(this).data('orders');
        let form = "{{route('orders.destroy', 'id')}}".replace('id', orders.id)
        $('#delete-form').attr('action', form)
    })

    // $("#modal").on("hidden.bs.modal", function () {
    //     $('#orders-form button').show()
    //     $('#orders-form :input').attr('disabled', false)
    // });
</script>
@endsection
