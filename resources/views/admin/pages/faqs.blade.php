@extends('admin.layout')
@section('title', 'Admin Panel | ' . trans('admin.sidebar.faqs'))
@section('content')
    <main id="main" class="main">
        <div>
            <div class="page-title">
                <h1>@lang('admin.sidebar.faqs')</h1>
                <x-bread-crumb>
                    <x-bread-crumb-link :link="route('account.index')">
                        @lang('admin.sidebar.dashboard')
                    </x-bread-crumb-link>
                    <x-bread-crumb-link>
                        @lang('admin.sidebar.faqs')
                    </x-bread-crumb-link>
                </x-bread-crumb>
            </div>
        </div>

        <section class="my-2">
            <div class="row">
                <form action="{{ route('faqs.index') }}" id="filterForm">
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
                    <td>@lang('admin.columns.question')</td>
                    <td>@lang('admin.columns.answer')</td>
                    <td>@lang('admin.columns.status')</td>
                    @can('create', \App\Models\Faq::class)
                        <td><button class="btn btn-outline-success create" data-bs-toggle="modal" data-bs-target="#modal">@lang('admin.buttons.create')</button></td>
                    @endcan
                    </thead>

                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <th>{{$faq->getAttribute('ordering')}}</th>
                            <td>{{$faq->getAttribute('question')}}</td>
                            <td>{{$faq->getAttribute('answer')}}</td>
                            <td>@if ($faq->getAttribute('is_active') == 1) <span class="text-secondary">@lang('admin.fields.active')</span> @else <span class="text-danger">@lang('admin.fields.passive')</span> @endif</td>
                            <td>
                                <a data-faqs='@json($faq)' class="show" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-eye mx-2"></i></a>
                                <a data-faqs='@json($faq)' class="edit" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-pen mx-2"></i></a>
                                <a data-faqs='@json($faq)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
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
                            <form action="" method="POST" id="faqs-form"  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="form-group col-md-6 mb-2 text-value">
                                            <label for="question">@lang('admin.columns.question')</label>
                                            <textarea name="question" class="form-control" id="question" placeholder="@lang('admin.placeholders.question')"></textarea>
                                        </div>

                                        <div class="form-group col-md-6 mb-2 text-value">
                                            <label for="answer">@lang('admin.columns.answer')</label>
                                            <textarea name="answer" class="form-control" id="answer" placeholder="@lang('admin.placeholders.answer')"></textarea>
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="ordering">@lang('admin.columns.ordering')</label>
                                            <input type="text" name="ordering" class="form-control" id="ordering" placeholder="@lang('admin.placeholders.ordering')">
                                        </div>

                                        <div class="form-check form-switch col-md-6 m-2 ms-3">
                                            <label class="form-check-label" for="is_active">@lang('admin.columns.status')</label>
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
            {{$faqs->appends(request()->input())->links()}}
        </div>
    </main>
    <script>

        $('#limit').change(function () {
            $('#filterForm').submit()
        })

        $('.edit').on('click', function () {
            let faqs = $(this).data('faqs');

            $('#faqs-form textarea[name="question"]').val(faqs.question);
            $('#faqs-form textarea[name="answer"]').val(faqs.answer);
            $('#faqs-form input[name="ordering"]').val(faqs.ordering);

            if (faqs.is_active === 1) {
                $('#faqs-form input[type="checkbox"]').prop('checked', true);
            }

            let form = "{{route('faqs.update', 'id')}}".replace('id', faqs.id)
            $('#faqs-form').attr('action', form)
            $('<input>').attr({
                type: 'hidden',
                value: 'PUT',
                name: '_method'
            }).appendTo('#faqs-form');

            $('.main-modal').html('{{trans('admin.sidebar.faqs'). ' '. trans('admin.buttons.edit')}}')
            $('.modal-submit').html('{{trans('admin.buttons.save')}}')
        })

        $('.create').on('click', function () {

            let form = "{{route('faqs.store')}}"
            $('#faqs-form').attr('action', form)
            $('#faqs-form input[name="_method"]').val('POST');
            $('.main-modal').html('{{trans('admin.sidebar.faqs'). ' '. trans('admin.buttons.create')}}')
            $('.modal-submit').html('{{trans('admin.buttons.create')}}')
            $('#image-show').hide()
        })

        $('.show').on('click', function () {
            let faqs = $(this).data('faqs');
            if (faqs.is_active === 1) {
                $('#faqs-form input[type="checkbox"]').prop('checked', true);
            }
            $('#faqs-form textarea[name="question"]').val(faqs.question);
            $('#faqs-form textarea[name="answer"]').val(faqs.answer);
            $('#faqs-form input[name="ordering"]').val(faqs.ordering);
            $('#faqs-form button').hide()
            $('#faqs-form :input').attr('disabled', true)
            $('.main-modal').html('{{trans('admin.sidebar.faqs'). ' '. trans('admin.buttons.show')}}')
        })

        $('.delete').on('click', function () {
            let faqs = $(this).data('faqs');
            let form = "{{route('faqs.destroy', 'id')}}".replace('id', faqs.id)
            $('#delete-form').attr('action', form)
        })

        $("#modal").on("hidden.bs.modal", function () {
            $('#faqs-form button').show()
            $('#faqs-form :input').attr('disabled', false)
        });
    </script>
@endsection
