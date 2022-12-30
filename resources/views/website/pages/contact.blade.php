@extends('website.layout')

@section('title', trans('website.general.contact'))
@section('content')
<div id="information-contact">
    <ul class="breadcrumb">
        <li><a href="{{ route('homepage') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('contact') }}">@lang('website.general.contact')</a></li>
    </ul>
    <div class="">
        <div id="content" class="col-sm-12">
            <div class="panel panel-default col-lg-12 col-md-12">
                <div class="container">
                    <div class="panel-body">
                        <div class="row contact-info">
                            <legend>Our Location</legend>
                            <div class="left">

                                <div class="address-detail"><i class="fa fa-map-marker"></i><strong>{{config('app.name')}}</strong>
                                    <address>{{setting('address')}}</address>

                                </div>
                                <div class="telephone">
                                    <i class="fa fa-phone"></i>
                                    <strong>@lang('website.general.phone') </strong>
                                    <address>{{setting('phone')}}</address>
                                </div>
                                <div class="fax">
                                    <i class="fa fa-instagram"></i>
                                    <strong>Instagram </strong>
                                    <address>{{setting('instagram')}}</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact_form_wrapper col-lg-12 col-md-12">
                    <div class="container">

                        <div class="contact_form col-lg-6 col-md-12">
                            <form
                                action=""
                                method="post" enctype="multipart/form-data" class="form-horizontal col-lg-12 col-md-12">
                                <fieldset>
                                    <div class="form-group required">
                                        <label class="col-sm-12 control-label" for="input-name">@lang('admin.placeholders.name')</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="name" value="" id="input-name" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-12 control-label" for="input-email">@lang('admin.placeholders.email')</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="email" value="" id="input-email" class="form-control"/></div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-12 control-label" for="input-enquiry">@lang('admin.placeholders.description')</label>
                                        <div class="col-sm-12">
                                            <textarea name="enquiry" rows="10" id="input-enquiry"
                                                      class="form-control"></textarea></div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input class="btn btn-primary" type="submit" value="@lang('admin.buttons.save')"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="map col-lg-6 col-md-12">
                                <iframe src="{{setting('location')}}" width="650" height="475" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
