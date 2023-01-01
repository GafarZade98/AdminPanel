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
