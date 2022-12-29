@extends('website.layout')
@section('content')
<div class="ttm-breadcrumb" id="breadcrumb">
    <div class="container">

    </div>
</div>


<div id="account-login" class="container">
    <ul class="breadcrumb">
        <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="indexe223.html?route=account/account">Account</a></li>
        <li><a href="indexe223.html?route=account/login">Login</a></li>
    </ul>
    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="box">
                <div class="heading-title">
                    <div class="sidebar-heading">Account</div>
                </div>
                <div class="list-group">
                    <a href="indexe223.html?route=account/login" class="list-group-item">Login </a>
                    <a href="index5502.html?route=account/register" class="list-group-item">Register</a>
                    <a href="indexacda.html?route=account/forgotten" class="list-group-item">Forgotten Password </a>
                    <a href="indexe223.html?route=account/account" class="list-group-item">My Account </a>
                    <a href="indexe223.html?route=account/address" class="list-group-item">Address Book</a>
                    <a href="indexe223.html?route=account/wishlist" class="list-group-item">Wish List </a>
                    <a href="indexe223.html?route=account/order" class="list-group-item">Order History </a>

                </div>
            </div>
        </aside>
        <div id="content" class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <div class="well">
                        <h2>New Customer</h2>
                        <p><strong>Register Account</strong></p>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status,
                            and keep track of the orders you have previously made.</p>
                        <a href="index5502.html?route=account/register" class="btn btn-primary">Continue</a></div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h2>Returning Customer</h2>
                        <p><strong>I am a returning customer</strong></p>
                        <form action="http://themetechmount.net/opencart/autovio-layout2/index.php?route=account/login"
                              method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
                                <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email"
                                       class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="password" value="" placeholder="Password"
                                       id="input-password" class="form-control"/>
                                <a href="indexacda.html?route=account/forgotten">Forgotten Password</a></div>
                            <input type="submit" value="Login" class="btn btn-primary"/> <input type="hidden"
                                                                                                name="redirect"
                                                                                                value="http://themetechmount.net/opencart/autovio-layout2/index.php?route=account/account"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
