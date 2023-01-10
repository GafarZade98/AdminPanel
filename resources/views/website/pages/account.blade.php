@extends('website.layout')
@section('title', trans('website.general.account'))

@section('content')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.account')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.account')</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="container">
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <a class="mb-0 @if(request()->url() == route('account')) active @endif" href="{{ route('account') }}">@lang('website.general.account')</a>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <a class="mb-0 @if(request()->url() == route('orders.my-orders')) active @endif" href="{{ route('orders.my-orders') }}">@lang('website.general.my_orders')</a>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                                        <a class=mb-0" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('website.general.signOut')
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @yield('my-account')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
