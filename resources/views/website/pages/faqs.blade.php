@extends('website.layout')

@section('title', trans('website.general.contract'))
@section('content')

    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.faqs')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.faqs')</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">@lang('website.general.faqs')</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordions">
                            @foreach($faqs as $faq)
                                <div class="text-center">
                                    <div data-toggle="collapse" href="#faqs-{{$loop->iteration}}" data-tab="{{$loop->iteration}}">
                                        <h2 style="cursor: pointer">{!! $faq->getAttribute('question') !!} <i class="far fa-chevron-double-right"></i></h2>
                                    </div>
                                    <div class="collapse" id="faqs-{{$loop->iteration}}">
                                        <p>{!! $faq->getAttribute('answer') !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
