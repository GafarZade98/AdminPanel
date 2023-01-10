@extends('website.pages.account')
{{--@section('title', trans('website.general.account'))--}}

@section('my-account')
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">@lang('admin.columns.name_s')</h6>
                    </div>
                    <div class="col-sm-9 ">
                        {{auth()->user()->getAttribute('name')}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">@lang('admin.columns.email')</h6>
                    </div>
                    <div class="col-sm-9 ">
                        {{auth()->user()->getAttribute('email')}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">@lang('admin.columns.phone')</h6>
                    </div>
                    <div class="col-sm-9 ">
                        {{auth()->user()->getAttribute('phone')}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">@lang('admin.columns.address')</h6>
                    </div>
                    <div class="col-sm-9 ">
                        {{auth()->user()->getAttribute('address')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
