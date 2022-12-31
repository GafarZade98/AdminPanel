@extends('website.components.sidebar')
@section('title', trans('website.general.register'))
@section('accountContent')

    <div id="content" class="col-sm-9">
        <h1>@lang('website.general.register')</h1>
        <p>@lang('website.general.already_login')<a href="{{ route('user-login') }}">login
                page</a>.</p>
        <form method="POST" action="{{ route('register') }}" class="form-horizontal">
            @csrf
            <fieldset id="account">
                <legend>@lang('website.general.personal_info')</legend>

                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-name">@lang('admin.columns.name_s')</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="input-name" class="form-control" placeholder="@lang('admin.placeholders.user_name')" required/>
                    </div>
                </div>

                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-email">@lang('admin.columns.email')</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="input-email" placeholder="@lang('admin.placeholders.email')" required/>
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-phone">@lang('admin.columns.phone')</label>
                    <div class="col-sm-10">
                        <input type="tel" name="phone" id="input-phone" class="form-control" placeholder=" @lang('admin.placeholders.phone')" required/>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>@lang('admin.columns.password')</legend>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-password">@lang('admin.columns.password')</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" id="input-password" class="form-control" placeholder="@lang('admin.placeholders.password')" required/>
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-confirm">@lang('admin.columns.password_confirm')</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" id="input-confirm" class="form-control" placeholder="@lang('admin.placeholders.password_confirm')" required/>
                    </div>
                </div>
            </fieldset>

            <div class="buttons">
                <div class="pull-right">@lang('website.general.i_read') <a
                        href="{{ route('privacy') }}" class="agree"><b>@lang('website.general.privacy')</b></a>
                    <input type="checkbox" name="agree" value="1"/> &nbsp
                    <input type="submit" value="Continue" class="btn btn-primary"/>
                </div>
            </div>
        </form>
    </div>
@endsection
