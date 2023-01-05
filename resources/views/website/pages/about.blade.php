@extends('website.layout')
@section('title', trans('website.general.about'))
@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.about')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.about')</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">@lang('website.general.about')</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">
                <div class="aboutus-secktion paddingTB60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="strong">{{config('app.name')}}</h1>
                                <p class="lead">{{setting('about_title')}}</p>
                            </div>
                            <div class="col-md-6">
                                {{setting('description')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
