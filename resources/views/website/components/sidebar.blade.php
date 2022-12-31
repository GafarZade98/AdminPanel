@extends('website.layout')
@section('content')
<div class="ttm-breadcrumb" id="breadcrumb">
    <div class="container">
    </div>
</div>

<div id="account-login" class="container">
    <ul class="breadcrumb">
        <li><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('account') }}">@lang('website.general.account')</a></li>
        <li><a>@yield('title')</a></li>
    </ul>
    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="box">
                <div class="heading-title">
                    <div class="sidebar-heading">@lang('website.general.account')</div>
                </div>
                <div class="list-group">
                    @if(!Auth::check())
                        <a href="{{ route('user-login') }}" class="list-group-item">@lang('website.general.login')</a>
                        <a href="{{ route('register') }}" class="list-group-item">@lang('website.general.register')</a>
                    @else
                        <a href="{{ route('account') }}" class="list-group-item">@lang('website.general.account')</a>
                        <a href="{{ route('wishlist') }}" class="list-group-item">@lang('website.general.wishlist')</a>
                        <a href="#" class="list-group-item">@lang('website.general.my_orders')</a>
                    @endif
                </div>
            </div>
        </aside>
        @yield('accountContent')
    </div>
</div>
@endsection
