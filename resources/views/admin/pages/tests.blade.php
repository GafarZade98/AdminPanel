@extends('admin.layout')

@section('content')
<main id="main" class="main">
    <div>
        <div class="page-title">
            <h1>@lang('admin.sidebar.tests')</h1>
            <x-bread-crumb>
                <x-bread-crumb-link :link="route('account.index')">
                    @lang('admin.sidebar.dashboard')
                </x-bread-crumb-link>
                <x-bread-crumb-link>
                    @lang('admin.sidebar.tests')
                </x-bread-crumb-link>

            </x-bread-crumb>
        </div>
    </div>

    <section class="my-2">
        <form action="{{ route('tests.index') }}" id="filterForm">
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
                    <td>@lang('admin.columns.about')</td>
                    <td>Operator</td>
                    @can('create', \App\Models\User::class)
                    <td>
                        <button class="btn btn-outline-success create float-end" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button>
                    </td>
                    @endcan
                </thead>

                <tbody>
                @foreach($tests as $test)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$test->getAttribute('name')}}</td>
                        <td>{{$test->getAttribute('detail')}}</td>
                        <td>
                            <a data-tests='@json($test)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                            <a data-tests='@json($test)' class="edit" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-pen mx-2"></i></a>
                            <a data-tests='@json($test)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
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
                        <form action="" method="POST" id="tests-form"  enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group col-md-12 mb-2">
                                    <label for="name">@lang('admin.columns.name')</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Test Adı Yazın">
                                </div>

                                <div class="form-group col-md-12 mb-2">
                                    <label for="detail">@lang('admin.columns.name')</label>
                                    <input name="detail" type="text" class="form-control" id="detail" placeholder="Test Detail Yazın">
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
        {{$tests->appends(request()->input())->links()}}
    </div>
</main>
<script>

    $('#limit').change(function () {
        $('#filterForm').submit()
    })

    $('.edit').on('click', function (e) {
        let tests = $(this).data('tests');

        $('#tests-form input[name="name"]').val(tests.name);
        $('#tests-form input[name="detail"]').val(tests.detail);

        let form = "{{route('tests.update', 'id')}}".replace('id', tests.id)
        $('#tests-form').attr('action', form)
        $('<input>').attr({
            type: 'hidden',
            value: 'PUT',
            name: '_method'
        }).appendTo('#tests-form');

        $('.main-modal').html('{{trans('admin.sidebar.test'). ' '. trans('admin.buttons.edit')}}')
        $('.modal-submit').html('{{trans('admin.buttons.save')}}')
    })

    $('.create').on('click', function (e) {

        let form = "{{route('tests.store')}}"
        $('#tests-form').attr('action', form)
        $('#tests-form input[name="_method"]').val('POST');
        $('.main-modal').html('{{trans('admin.sidebar.test'). ' '. trans('admin.buttons.create')}}')
        $('.modal-submit').html('{{trans('admin.buttons.create')}}')
    })

    $('.show').on('click', function (e) {
        let tests = $(this).data('tests');

        $('#tests-form input[name="name"]').val(tests.name);
        $('#tests-form input[name="detail"]').val(tests.detail);

        $('#tests-form button').hide()
        $('#tests-form :input').attr('disabled', true)
        $('.main-modal').html('{{trans('admin.sidebar.test'). ' '. trans('admin.buttons.show')}}')
    })

    $('.delete').on('click', function (e) {
        let tests = $(this).data('tests');

        let form = "{{route('tests.destroy', 'id')}}".replace('id', tests.id)
        $('#delete-form').attr('action', form)
    })

    $("#modal").on("hidden.bs.modal", function () {
        $('#tests-form button').show()
        $('#tests-form :input').attr('disabled', false)
    });

    // $(document).ready(function() {
    //     $('#js-example-basic-multiple').select2();
    // });

    $("#selectPermissions").select2({
        maximumSelectionLength: 8,
        dropdownParent: $('#modal'),
        allowClear: true,
        theme: 'classic'
    });


</script>
@endsection
