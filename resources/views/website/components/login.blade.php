@extends('website.components.sidebar')
@section('title', trans('website.general.login'))
@section('accountContent')

    <div id="content" class="col-sm-9">
        <div class="row">
            <div class="col-sm-6">
                <div class="well">
                    <h2>@lang('website.general.new_customer')</h2>
                    <p><strong>@lang('website.general.register')</strong></p>
                    <p>@lang('website.general.login_body')</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">@lang('website.general.continue')</a></div>
            </div>
            <div class="col-sm-6">
                <div class="well">
                    <h2>@lang('website.general.returning_customer')</h2>
                    <p><strong>@lang('website.general.i_am_returning')</strong></p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="input-email">@lang('website.general.email')</label>
                            <input type="email" name="email" value="" placeholder="@lang('admin.placeholders.email')" id="input-email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-password">@lang('website.general.password')</label>
                            <input type="password" name="password" value="" placeholder="Password"
                                   id="input-password" class="form-control"/>
                            @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}">@lang('website.general.forgot_password')</a></div>
                            @endif
                        <input type="submit" value="Login" class="btn btn-primary"/>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
