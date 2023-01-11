@extends('admin.layout')
@section('title', 'Admin Panel | ' . trans('admin.sidebar.permissions'))
@section('content')
<main id="main" class="main">
    <div>
        <div class="page-title">
            <h1>@lang('admin.sidebar.permissions')</h1>
            <x-bread-crumb>
                <x-bread-crumb-link :link="route('account.index')">
                    @lang('admin.sidebar.dashboard')
                </x-bread-crumb-link>
                <x-bread-crumb-link>
                    @lang('admin.sidebar.permissions')
                </x-bread-crumb-link>

            </x-bread-crumb>
        </div>
    </div>

    <section class="my-2">
        <form action="{{ route('permissions.index') }}" id="filterForm">
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
    </section>

    <section class="section profile">
        <div class="row">
            <table class="table table-responsive-md shadow-sm">
                <thead>
                    <th>#</th>
                    <td>@lang('admin.columns.name')</td>
                    <td>Operator</td>
                    @can('create', \App\Models\User::class)
                    <td>
                        <button class="btn btn-outline-success create float-end" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button>
                    </td>
                    @endcan
                </thead>

                <tbody>
                @forelse($permissions as $permission)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$permission->getAttribute('name')}}</td>
                        <td>
                            <a data-permissions='@json($permission)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                            <a data-permissions='@json($permission)' class="edit" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-pen mx-2"></i></a>
                            <a data-permissions='@json($permission)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <div class="alert alert-primary" role="alert">
                            @lang('admin.notification.empty')
                        </div>
                    </tr>
                @endforelse
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
                        <form action="" method="POST" id="permissions-form"  enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-2">
                                        <label for="name">@lang('admin.columns.name')</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Permission Adı Yazın">
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
        {{$permissions->appends(request()->input())->links()}}
    </div>
</main>
<script>

    $('#limit').change(function () {
        $('#filterForm').submit()
    })

    $('.edit').on('click', function (e) {
        let permissions = $(this).data('permissions');

        $('#permissions-form input[name="name"]').val(permissions.name);

        let form = "{{route('permissions.update', 'id')}}".replace('id', permissions.id)
        $('#permissions-form').attr('action', form)
        $('<input>').attr({
            type: 'hidden',
            value: 'PUT',
            name: '_method'
        }).appendTo('#permissions-form');

        $('.main-modal').html('{{trans('admin.sidebar.permission'). ' '. trans('admin.buttons.edit')}}')
        $('.modal-submit').html('{{trans('admin.buttons.save')}}')
    })

    $('.create').on('click', function (e) {

        let form = "{{route('permissions.store')}}"
        $('#permissions-form').attr('action', form)
        $('#permissions-form input[name="_method"]').val('POST');
        $('.main-modal').html('{{trans('admin.sidebar.permission'). ' '. trans('admin.buttons.create')}}')
        $('.modal-submit').html('{{trans('admin.buttons.create')}}')
    })

    $('.show').on('click', function (e) {
        let permissions = $(this).data('permissions');

        $('#permissions-form input[name="name"]').val(permissions.name);

        $('#permissions-form button').hide()
        $('#permissions-form :input').attr('disabled', true)
        $('.main-modal').html('{{trans('admin.sidebar.permission'). ' '. trans('admin.buttons.show')}}')
    })

    $('.delete').on('click', function (e) {
        let permissions = $(this).data('permissions');

        let form = "{{route('permissions.destroy', 'id')}}".replace('id', permissions.id)
        $('#delete-form').attr('action', form)
    })

    $("#modal").on("hidden.bs.modal", function () {
        $('#permissions-form button').show()
        $('#permissions-form :input').attr('disabled', false)
    });
</script>
@endsection
