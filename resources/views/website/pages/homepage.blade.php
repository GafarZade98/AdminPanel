@extends('website.layout')
@section('title', trans('website.general.homepage'))
@section('content')
    <x-banner></x-banner>

    <div id="ttm_home_section">
        <div class="content-bottom">
            <div id="content">
                <x-category-slider></x-category-slider>
                <x-solutions></x-solutions>
                <x-top-products></x-top-products>
                <x-recent-products></x-recent-products>
                <x-subscription></x-subscription>
                <x-partners></x-partners>
            </div>
        </div>
    </div>

@endsection
