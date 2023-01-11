@extends('admin.layout')
@section('title', 'Admin Panel | ' . trans('admin.sidebar.products'))
@section('content')
    <main id="main" class="main">
        <div>
            <div class="page-title">
                <h1>@lang('admin.sidebar.products')</h1>
                <x-bread-crumb>
                    <x-bread-crumb-link :link="route('account.index')">
                        @lang('admin.sidebar.dashboard')
                    </x-bread-crumb-link>
                    <x-bread-crumb-link>
                        @lang('admin.sidebar.products')
                    </x-bread-crumb-link>
                </x-bread-crumb>
            </div>
        </div>

        <section class="my-2">
            <div class="row">
                <form action="{{ route('products.index') }}" id="filterForm">
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
                    <td>@lang('admin.columns.image')</td>
                    <td>@lang('admin.columns.product_code')</td>
                    <td>@lang('admin.columns.name')</td>
                    <td>@lang('admin.columns.category')</td>
                    <td>@lang('admin.columns.description')</td>
                    <td>@lang('admin.columns.key')</td>
                    <td>@lang('admin.columns.status')</td>
                    @can('create', \App\Models\Product::class)
                        <td><button class="btn btn-outline-success create" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button></td>
                    @endcan
                    </thead>

                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><img src="{{image($product->getAttribute('image'))}}" width="75" alt=""></td>
                            <td>{{$product->getAttribute('code')}}</td>
                            <td>{{$product->getAttribute('name')}}</td>
                            <td>{{$product->getRelationValue('category')->getAttribute('name')}}</td>
                            <td>{{$product->getAttribute('description')}}</td>
                            <td>{{$product->getAttribute('keyword')}}</td>
                            <td>@if ($product->getAttribute('is_active') == 1) <span class="text-secondary">@lang('admin.fields.active')</span> @else <span class="text-danger">@lang('admin.fields.passive')</span> @endif</td>
                            <td>
                                <a data-products='@json($product)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                                <a data-products='@json($product)' class="edit" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-pen mx-2"></i></a>
                                <a data-products='@json($product)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
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
                            <form action="" method="POST" id="products-form"  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="image-show" class="col-md-4 col-lg-3 col-form-label">@lang('admin.columns.image')</label>
                                            <div class="col-md-4 col-lg-9">
                                                <img id="image-show" src="" width="150" alt="Image">
                                                <div class="pt-2">
                                                    <label for="image"><i class="bi bi-upload btn btn-success btn-sm"></i></label>
                                                    <input type="file" name="image" class="d-none" id="image">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="name">@lang('admin.columns.name')</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="@lang('admin.placeholders.name')">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="category_id">@lang('admin.columns.category')</label>
                                            <select name="category_id" id="category_id" class="form-select">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->getAttribute('id')}}">
                                                        {{$category->getAttribute('name')}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 mb-2 password">
                                            <label for="description">@lang('admin.columns.description')</label>
                                            <input name="description" type="text" class="form-control" id="description" placeholder="@lang('admin.placeholders.description')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="keyword">@lang('admin.columns.key')</label>
                                            <input type="text" name="keyword" class="form-control" id="keyword" placeholder="@lang('admin.placeholders.key')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="color">@lang('admin.columns.color')</label>
                                            <input type="text" name="color" class="form-control" id="color" placeholder="@lang('admin.placeholders.color')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="size">@lang('admin.columns.size')</label>
                                            <input type="text" name="size" class="form-control" id="size" placeholder="@lang('admin.placeholders.size')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="weight">@lang('admin.columns.weight')</label>
                                            <input type="text" name="weight" class="form-control" id="weight" placeholder="@lang('admin.placeholders.weight')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="price">@lang('admin.columns.price')</label>
                                            <input type="number" name="price" class="form-control" id="price" placeholder="@lang('admin.placeholders.price')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="tax">@lang('admin.columns.tax')</label>
                                            <input type="number" name="tax" class="form-control" id="tax" placeholder="@lang('admin.placeholders.tax')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="stock">@lang('admin.columns.stock')</label>
                                            <input type="number" name="stock" class="form-control" id="stock" placeholder="@lang('admin.placeholders.stock')">
                                        </div>

                                        <div class="form-check form-switch col-md-6 m-2 ms-3">
                                            <label class="form-check-label" for="is_active">@lang('admin.fields.active')</label>
                                            <input type="checkbox" name="is_active" class="form-check-input" id="is_active">
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('admin.buttons.close')</button>
                                    <button type="submit" class="btn btn-primary modal-submit"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="float-end">
            {{$products->appends(request()->input())->links()}}
        </div>
    </main>
    <script>

        $('#limit').change(function () {
            $('#filterForm').submit()
        })

        $('.edit').on('click', function () {
            let products = $(this).data('products');

            $('#products-form select[name="category_id"]').val(products.category_id)
            $('#products-form #image-show').attr('src', 'https://kombi.test/storage/' + products.image);
            // $('#products-form input[name="value"]').val(products.value);
            $('#products-form input[name="name"]').val(products.name);
            $('#products-form input[name="description"]').val(products.description);
            $('#products-form input[name="keyword"]').val(products.keyword);
            $('#products-form input[name="weight"]').val(products.weight);
            $('#products-form input[name="size"]').val(products.size);
            $('#products-form input[name="color"]').val(products.color);
            $('#products-form input[name="price"]').val(products.price);
            $('#products-form input[name="tax"]').val(products.tax);
            $('#products-form input[name="stock"]').val(products.stock);
            if (products.is_active === 1) {
                $('#products-form input[type="checkbox"]').prop('checked', true);
            }

            let form = "{{route('products.update', 'id')}}".replace('id', products.id)
            $('#products-form').attr('action', form)
            $('<input>').attr({
                type: 'hidden',
                value: 'PUT',
                name: '_method'
            }).appendTo('#products-form');

            $('.main-modal').html('{{trans('admin.sidebar.products'). ' '. trans('admin.buttons.edit')}}')
            $('.modal-submit').html('{{trans('admin.buttons.save')}}')
        })

        $('.create').on('click', function () {

            let form = "{{route('products.store')}}"
            $('#products-form').attr('action', form)
            $('#products-form input[name="_method"]').val('POST');
            $('.main-modal').html('{{trans('admin.sidebar.products'). ' '. trans('admin.buttons.create')}}')
            $('.modal-submit').html('{{trans('admin.buttons.create')}}')
            $('#image-show').hide()
        })

        $('.show').on('click', function () {
            let products = $(this).data('products');
            if (products.is_active === 1) {
                $('#products-form input[type="checkbox"]').prop('checked', true);
            }
            $('#products-form input[name="name"]').val(products.name);
            $('#products-form select[name="category_id"]').val(products.category_id)
            $('#products-form #image-show').attr('src', 'https://kombi.test/storage/' + products.image);
            $('#products-form input[name="description"]').val(products.description);
            $('#products-form input[name="keyword"]').val(products.keyword);
            $('#products-form input[name="weight"]').val(products.weight);
            $('#products-form input[name="size"]').val(products.size);
            $('#products-form input[name="color"]').val(products.color);
            $('#products-form input[name="price"]').val(products.price);
            $('#products-form input[name="tax"]').val(products.tax);
            $('#products-form input[name="stock"]').val(products.stock);
            $('#products-form button').hide()
            $('#products-form :input').attr('disabled', true)
            $('.main-modal').html('{{trans('admin.sidebar.products'). ' '. trans('admin.buttons.show')}}')
        })

        $('.delete').on('click', function () {
            let products = $(this).data('products');
            let form = "{{route('products.destroy', 'id')}}".replace('id', products.id)
            $('#delete-form').attr('action', form)
        })

        $("#modal").on("hidden.bs.modal", function () {
            $('#products-form button').show()
            $('#products-form :input').attr('disabled', false)
        });
    </script>
@endsection
