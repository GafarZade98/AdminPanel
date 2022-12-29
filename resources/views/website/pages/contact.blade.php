@extends('website.layout')

@section('content')
<div id="information-contact">
    <ul class="breadcrumb">
        <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="index2724.html?route=information/contact">How can we help you?</a></li>
    </ul>
    <div class="">
        <div id="content" class="col-sm-12">
            <div class="container">
                <h2 class="page-title">How can we help you?</h2>
            </div>

            <div class="panel panel-default col-lg-12 col-md-12">
                <div class="container">
                    <div class="panel-body">
                        <div class="row contact-info">
                            <legend>Our Location</legend>
                            <div class="left">

                                <div class="address-detail"><i class="fa fa-map-marker"></i><strong>Autovio</strong>
                                    <address>No: 58 A, United State
                                    </address>

                                </div>
                                <div class="telephone">
                                    <i class="fa fa-phone"></i>
                                    <strong>Telephone </strong>
                                    <address>+123-456-7890</address>
                                </div>
                                <div class="fax">
                                    <i class="fa fa-fax"></i>
                                    <strong>Fax </strong>
                                    <address>123456789</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact_form_wrapper col-lg-12 col-md-12">
                    <div class="container">

                        <div class="contact_form col-lg-6 col-md-12">
                            <form
                                action="http://themetechmount.net/opencart/autovio-layout2/index.php?route=information/contact"
                                method="post" enctype="multipart/form-data" class="form-horizontal col-lg-12 col-md-12">
                                <fieldset>
                                    <div class="form-group required">
                                        <label class="col-sm-12 control-label" for="input-name">Your Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="name" value="" id="input-name" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-12 control-label" for="input-email">E-Mail Address</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="email" value="" id="input-email" class="form-control"/></div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-12 control-label" for="input-enquiry">Enquiry</label>
                                        <div class="col-sm-12">
                                            <textarea name="enquiry" rows="10" id="input-enquiry"
                                                      class="form-control"></textarea></div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input class="btn btn-primary" type="submit" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="map col-lg-6 col-md-12">
                            <div id="wrapper-Googlemap">
                                    map
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
