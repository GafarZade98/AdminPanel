@extends('website.layout')
@section('title', trans('website.general.login'))
@section('content')

    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.login')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.contract')</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">@lang('website.general.returning_customer')</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="input-email">@lang('website.general.email')</label>
                        <input type="email" name="email" value="" placeholder="@lang('admin.placeholders.email')"
                               id="input-email" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="input-password">@lang('website.general.password')</label>
                        <input type="password" name="password" value="" placeholder="Password"
                               id="input-password" class="form-control"/>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">@lang('website.general.forgot_password')</a></div>
                    @endif
                    <input type="submit" value="Login" class="btn btn-primary"/>

                </form>
            </div>
            <div class="col-lg-6">
                <div class="text-right">
                    <h2>@lang('website.general.new_customer')</h2>
                    <p><strong>@lang('website.general.register')</strong></p>
                    <p>@lang('website.general.login_body')</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">@lang('website.general.continue')</a>
                </div>
            </div>
        </div>
    </div>

@endsection
