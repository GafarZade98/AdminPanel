@extends('admin.layout')

@section('content')
    <main id="main" class="main">
        <div>
            <div class="page-title">
                <h1>@lang('admin.sidebar.contacts')</h1>
                <x-bread-crumb>
                    <x-bread-crumb-link :link="route('account.index')">
                        @lang('admin.sidebar.dashboard')
                    </x-bread-crumb-link>
                    <x-bread-crumb-link>
                        @lang('admin.sidebar.contacts')
                    </x-bread-crumb-link>
                </x-bread-crumb>
            </div>
        </div>

        <section class="my-2">
            <div class="row">
                <form action="{{ route('contacts.index') }}" id="filterForm">
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
                    <td>@lang('admin.columns.name')</td>
                    <td>@lang('admin.columns.email')</td>
                    <td>@lang('admin.columns.phone')</td>
                    <td>@lang('admin.columns.message')</td>
                    </thead>

                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$contact->getAttribute('name')}}</td>
                            <td>{{$contact->getAttribute('email')}}</td>
                            <td>{{$contact->getAttribute('phone')}}</td>
                            <td>{{$contact->getAttribute('message')}}</td>
                            <td>
                                <a data-contacts='@json($contact)' class="delete" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash mx-2"></i></a>
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
                            <form action="" method="POST" id="contacts-form"  enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="name">@lang('admin.columns.name')</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="@lang('admin.placeholders.name')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="email">@lang('admin.columns.email')</label>
                                            <input name="email" type="text" class="form-control" id="email" placeholder="@lang('admin.placeholders.email')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2">
                                            <label for="phone">@lang('admin.columns.phone')</label>
                                            <input name="phone" type="text" class="form-control" id="phone" placeholder="@lang('admin.placeholders.phone')">
                                        </div>

                                        <div class="form-group col-md-6 mb-2 text-value">
                                            <label for="message">@lang('admin.columns.message')</label>
                                            <textarea name="message" class="form-control" id="message" placeholder="@lang('admin.placeholders.message')"></textarea>
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
            {{$contacts->appends(request()->input())->links()}}
        </div>
    </main>
    <script>

        $('#limit').change(function () {
            $('#filterForm').submit()
        })


        $('.delete').on('click', function () {
            let contacts = $(this).data('contacts');
            let form = "{{route('contacts.destroy', 'id')}}".replace('id', contacts.id)
            $('#delete-form').attr('action', form)
        })

        $("#modal").on("hidden.bs.modal", function () {
            $('#contacts-form button').show()
            $('#contacts-form :input').attr('disabled', false)
        });
    </script>
@endsection
