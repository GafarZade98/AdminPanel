@extends('admin.layout')

@section('content')
<main id="main" class="main">
    <div>
        <div class="page-title">
            <h1>@lang('admin.sidebar.users')</h1>
            <x-bread-crumb>
                <x-bread-crumb-link :link="route('account.index')">
                    @lang('admin.sidebar.dashboard')
                </x-bread-crumb-link>
                <x-bread-crumb-link>
                    @lang('admin.sidebar.users')
                </x-bread-crumb-link>
            </x-bread-crumb>
        </div>
    </div>

    <section class="my-2">
        <div class="row">
            <form action="{{ route('users.index') }}" id="filterForm">
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

            <div class="col-md-2 mt-2 float-end ">
                <a class="btn btn-success" href="{{ route('file-export') }}">Export Excel</a>
            </div>
        </div>
    </section>

    <section class="section profile">
        <div class="row">
            <table class="table table-responsive-md shadow-sm">
                <thead>
                    <th>#</th>
                    <td>@lang('admin.columns.image')</td>
                    <td>@lang('admin.columns.name_s')</td>
                    <td>@lang('admin.columns.role')</td>
                    <td>@lang('admin.columns.phone')</td>
                    <td>Is Admin</td>
                    @can('create', \App\Models\User::class)
                    <td><button class="btn btn-outline-success create" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button></td>
                    @endcan
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td><img src="{{image($user->getAttribute('avatar'))}}" width="50"  alt="Profile"></td>
                        <td>{{$user->getAttribute('name')}}</td>
                        <td>{{$user->getRelationValue('role')->getAttribute('name')}}</td>
                        <td>{{$user->getAttribute('phone')}}</td>
                        <td>@if ($user->getAttribute('is_admin') ==1) <span class="text-secondary">admin</span> @else <span class="text-danger">user</span> @endif</td>
                        <td>
                            <a data-users='@json($user)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                            <a data-users='@json($user)' class="edit" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-pen mx-2"></i></a>
                            <a data-users='@json($user)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
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
                        <form action="" method="POST" id="users-form"  enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class=" mb-3">
                                        <label for="avatar" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-4 col-lg-9">
                                            <img id="image" src="" width="150" alt="Profile">
                                            <div class="pt-2">
                                                <label for="avatar"><i class="bi bi-upload btn btn-success btn-sm"></i></label>
                                                <input type="file" name="avatar" class="d-none" id="avatar">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="name">@lang('admin.columns.name_s')</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Ad Soyad Yazın">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Email Adresi Yazın">
                                    </div>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="password">@lang('admin.columns.password')</label>
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Şifrənizi Girin">
                                    </div>

                                    <div class="form-group col-md-6 mb-2 password">
                                        <label for="password_confirm">@lang('admin.columns.password')</label>
                                        <input name="password_confirmation" type="password" class="form-control" id="password_confirm" placeholder="Şifrənizi Təkrar Girin">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="phone">@lang('admin.columns.phone')</label>
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Nömrə Yazın">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="company">@lang('admin.columns.company')</label>
                                        <input name="company" type="text" class="form-control" id="company" placeholder="Şirkəti Yazın">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="country">@lang('admin.columns.country')</label>
                                        <input name="country" type="text" class="form-control" id="country" placeholder="Ölkə Yazın">
                                    </div>

                                    <div class="form-group col-md-6 mb-2">
                                        <label for="address">@lang('admin.columns.address')</label>
                                        <input name="address" type="text" class="form-control" id="address" placeholder="Adresi Yazın">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="about">@lang('admin.columns.about')</label>
                                        <textarea name="about" class="form-control" id="about" placeholder="Haqqında Yazın"></textarea>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="job">@lang('admin.columns.role')</label>
                                        <select name="role_id" id="job" class="form-select">
                                            @foreach($roles as $role)
                                                <option value="{{$role->getAttribute('id')}}">{{$role->getAttribute('name')}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 ">
                                        <label class="form-check-label" for="data-type">Admin</label>
                                        <input type="checkbox" name="is_admin" class="form-check-input" id="data-type">
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
        {{$users->appends(request()->input())->links()}}
    </div>
</main>
<script>

    $('#limit').change(function () {
        $('#filterForm').submit()
    })

    $('.edit').on('click', function () {
        let users = $(this).data('users');
        if( users.is_admin === 1)
        {
            $('#users-form input[type="checkbox"]').prop('checked', true);
        }
        $('#users-form #image').attr('src','https://kombi.test/storage/' + users.avatar);
        $('#users-form input[name="name"]').val(users.name);
        $('#users-form input[name="phone"]').val(users.phone)
        $('#users-form input[name="company"]').val(users.company)
        $('#users-form input[name="country"]').val(users.country)
        $('#users-form input[name="email"]').val(users.email)
        $('#users-form input[name="address"]').val(users.address)
        $('#users-form textarea[name="about"]').val(users.about)
        $('#users-form select[name="role_id"]').val(users.role_id)

        let form = "{{route('users.update', 'id')}}".replace('id', users.id)
        $('#users-form').attr('action', form)
        $('<input>').attr({
            type: 'hidden',
            value: 'PUT',
            name: '_method'
        }).appendTo('#users-form');

        $('.password').show()
        $('.main-modal').html('{{trans('admin.sidebar.user'). ' '. trans('admin.buttons.edit')}}')
        $('.modal-submit').html('{{trans('admin.buttons.save')}}')
    })

    $('.create').on('click', function () {

        let form = "{{route('users.store')}}"
        $('#users-form').attr('action', form)
        $('#users-form input[name="_method"]').val('POST');
        $('.password').show()
        $('.main-modal').html('{{trans('admin.sidebar.user'). ' '. trans('admin.buttons.create')}}')
        $('.modal-submit').html('{{trans('admin.buttons.create')}}')
        $('#image').hide()
    })

    $('.show').on('click', function () {
        let users = $(this).data('users');
        if( users.is_admin === 1)
        {
            $('#users-form input[type="checkbox"]').prop('checked', true);
        }
        $('#users-form #image').attr('src','https://kombi.test/storage/' + users.avatar);
        $('#users-form input[name="name"]').val(users.name);
        $('#users-form input[name="phone"]').val(users.phone)
        $('#users-form input[name="company"]').val(users.company)
        $('#users-form input[name="country"]').val(users.country)
        $('#users-form input[name="email"]').val(users.email)
        $('#users-form input[name="address"]').val(users.address)
        $('#users-form textarea[name="about"]').val(users.about)
        $('#users-form select[name="role_id"]').val(users.role_id)

        $('#users-form button').hide()
        $('.password').hide()
        $('#users-form :input').attr('disabled', true)
        $('.main-modal').html('{{trans('admin.sidebar.user'). ' '. trans('admin.buttons.show')}}')
    })

    $('.delete').on('click', function () {
        let users = $(this).data('users');

        let form = "{{route('users.destroy', 'id')}}".replace('id', users.id)
        $('#delete-form').attr('action', form)
    })

    $("#modal").on("hidden.bs.modal", function () {
        $('#users-form button').show()
        $('.password').show()
        $('#users-form :input').attr('disabled', false)
    });
</script>
@endsection
