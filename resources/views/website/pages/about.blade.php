@extends('website.layout')
@section('title', trans('website.general.about'))
@section('content')
    <div class="ttm-breadcrumb" id="breadcrumb">
        <div class="container">

        </div>
    </div>
    <script>
        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }
        jQuery(document).ready(function () {
            quickbox();
        });
        jQuery(window).resize(function () {
            quickbox();
        });

    </script>

    <div id="information-information" class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('about') }}">@lang('website.general.about')</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12">
                <h2 class="page-title">About Us</h2>
                <div class="themetechmount_aboutus">
                    <div class="section-title">
                        <div class="title-header">
                            <h1 class="title">{{setting('about_title')}}</h1>
                        </div>
                        <div class="title-desc"
                             style="font-size:16px; line-height:27px;margin: 20px 0;">{{setting('about_content')}}</div>
                    </div>
                    <ul class="list-1">
                        @foreach(\App\Models\Solution::active()->get() as $solution)

                            <li><em class="icon-ok"></em>{{$solution->getAttribute('title')}}</li>
                        @endforeach
                    </ul>
                    <div class="row" style="margin-top: 30px;margin-bottom: 50px;">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="layer-content">
                                <div class="featured-icon-box style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-desc">
                                            @lang('website.general.contact_us')
                                        </div>
                                        <div class="featured-title">
                                            {{setting('phone')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="layer-content">
                                <div class="featured-icon-box style2">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-desc">
                                            @lang('website.general.email'):
                                        </div>
                                        <div class="featured-title">
                                            {{setting('email')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
