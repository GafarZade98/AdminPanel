@extends('website.layout')

@section('title', trans('website.general.contact'))
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.contact')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.contact')</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">@lang('website.general.contact_us')</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" action="{{ route('contact.create') }}" method="POST" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="@lang('admin.placeholders.name_s')"
                                   required="required" data-validation-required-message="@lang('admin.placeholders.name_s')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="@lang('admin.placeholders.email')"
                                   required="required" data-validation-required-message="@lang('admin.placeholders.email')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="phone" class="form-control" id="subject" placeholder="@lang('admin.placeholders.phone')"
                                   required="required" data-validation-required-message="@lang('admin.placeholders.phone')" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="message" rows="6" id="message" placeholder="@lang('admin.placeholders.message')"
                                      required="required"
                                      data-validation-required-message="@lang('admin.placeholders.message')"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">@lang('admin.buttons.send')</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">@lang('website.general.contact')</h5>
                <p>@lang('website.general.contact_body')</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{setting('address')}}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{setting('email')}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>{{setting('phone')}}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
