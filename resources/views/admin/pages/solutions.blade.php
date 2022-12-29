@extends('admin.layout')

@section('content')
<main id="main" class="main">
    <div>
        <div class="page-title">
            <h1>@lang('admin.sidebar.solutions')</h1>
            <x-bread-crumb>
                <x-bread-crumb-link :link="route('account.index')">
                    @lang('admin.sidebar.dashboard')
                </x-bread-crumb-link>
                <x-bread-crumb-link>
                    @lang('admin.sidebar.solutions')
                </x-bread-crumb-link>
            </x-bread-crumb>
        </div>
    </div>

    <section class="my-2">
        <div class="row">
            <form action="{{ route('solutions.index') }}" id="filterForm">
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
                    <td>@lang('admin.columns.title')</td>
                    <td>@lang('admin.columns.description')</td>
                    <td>@lang('admin.columns.link')</td>
                    <td>@lang('admin.columns.status')</td>
                    @can('create', \App\Models\Solution::class)
                    <td><button class="btn btn-outline-success create" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button></td>
                    @endcan
                </thead>

                <tbody>
                @foreach($solutions as $solution)
                    <tr>
                        <th>{{$solution->getAttribute('ordering')}}</th>
                        <td>{{$solution->getAttribute('title')}}</td>
                        <td>{{$solution->getAttribute('description')}}</td>
                        <td>{{$solution->getAttribute('link')}}</td>
                        <td>@if ($solution->getAttribute('is_active') == 1) <span class="text-secondary">@lang('admin.fields.active')</span> @else <span class="text-danger">@lang('admin.fields.passive')</span> @endif</td>
                        <td>
                            <a data-solutions='@json($solution)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                            <a data-solutions='@json($solution)' class="edit" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-pen mx-2"></i></a>
                            <a data-solutions='@json($solution)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
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
                        <form action="" method="POST" id="solutions-form"  enctype="multipart/form-data">
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
                                        <label for="title">@lang('admin.columns.title')</label>
                                        <input name="title" type="text" class="form-control" id="title" placeholder="@lang('admin.placeholders.title')">
                                    </div>


                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="description">@lang('admin.columns.description')</label>
                                        <input name="description" type="text" class="form-control" id="description" placeholder="@lang('admin.placeholders.description')">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="route">@lang('admin.columns.route')</label>
                                        <input name="link" class="form-control" id="route" placeholder="@lang('admin.placeholders.route')">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="ordering">@lang('admin.columns.ordering')</label>
                                        <input name="ordering" type="number" class="form-control" id="ordering" placeholder="@lang('admin.placeholders.ordering')">
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
        {{$solutions->appends(request()->input())->links()}}
    </div>
</main>
<script>

    $('#limit').change(function () {
        $('#filterForm').submit()
    })

    $('.edit').on('click', function () {
        let solutions = $(this).data('solutions');

        $('#solutions-form #image-show').attr('src', 'https://kombi.test/storage/' + solutions.image);
        $('#solutions-form input[name="title"]').val(solutions.title);
        $('#solutions-form input[name="description"]').val(solutions.description);
        $('#solutions-form input[name="link"]').val(solutions.link);
        $('#solutions-form input[name="ordering"]').val(solutions.ordering);
        if (solutions.is_active === 1) {
            $('#solutions-form input[type="checkbox"]').prop('checked', true);
        }

        let form = "{{route('solutions.update', 'id')}}".replace('id', solutions.id)
        $('#solutions-form').attr('action', form)
        $('<input>').attr({
            type: 'hidden',
            value: 'PUT',
            name: '_method'
        }).appendTo('#solutions-form');

        $('.main-modal').html('{{trans('admin.sidebar.solutions'). ' '. trans('admin.buttons.edit')}}')
        $('.modal-submit').html('{{trans('admin.buttons.save')}}')
    })

    $('.create').on('click', function () {

        let form = "{{route('solutions.store')}}"
        $('#solutions-form').attr('action', form)
        $('#solutions-form input[name="_method"]').val('POST');
        $('.main-modal').html('{{trans('admin.sidebar.solutions'). ' '. trans('admin.buttons.create')}}')
        $('.modal-submit').html('{{trans('admin.buttons.create')}}')
        $('#image-show').hide()
    })

    $('.show').on('click', function () {
        let solutions = $(this).data('solutions');
        if (solutions.is_active === 1) {
            $('#solutions-form input[type="checkbox"]').prop('checked', true);
        }
        $('#solutions-form #image-show').attr('src', 'https://kombi.test/storage/' + solutions.image);
        $('#solutions-form input[name="title"]').val(solutions.title);
        $('#solutions-form input[name="description"]').val(solutions.description);
        $('#solutions-form input[name="link"]').val(solutions.link);
        $('#solutions-form input[name="ordering"]').val(solutions.ordering);
        $('#solutions-form button').hide()
        $('#solutions-form :input').attr('disabled', true)
        $('.main-modal').html('{{trans('admin.sidebar.solutions'). ' '. trans('admin.buttons.show')}}')
    })

    $('.delete').on('click', function () {
        let solutions = $(this).data('solutions');
        let form = "{{route('solutions.destroy', 'id')}}".replace('id', solutions.id)
        $('#delete-form').attr('action', form)
    })

    $("#modal").on("hidden.bs.modal", function () {
        $('#solutions-form button').show()
        $('#solutions-form :input').attr('disabled', false)
    });
</script>
@endsection