<footer>
    <div id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>

        <div class="footer_center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 column first">
                        <div class="footer-logo">
                            <div id="logo">
                                <a href="{{ route('homepage') }}">
                                    <img src="{{image(setting('footer_logo'))}}" title="" alt="" class="img-responsive"/>
                                </a>
                            </div>
                        </div>
                        <div id="ttmblockaboutus">
                            <ul class="blockaboutus-inner">
                                <div class="block-aboutus">
                                    <span class="block-details">{{setting('description')}}</span>
                                </div>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-3 column second">
                        <h5>@lang('website.general.info')</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('about') }}">@lang('website.general.about')</a></li>
                            <li><a href="{{ route('privacy') }}">@lang('website.general.privacy')</a></li>
                            <li><a href="{{ route('terms') }}">@lang('website.general.terms')</a></li>
                            <li><a href="{{ route('terms') }}">@lang('website.general.terms')</a></li>
                            <li><a href="{{ route('contract') }}">@lang('website.general.contract')</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 column third">
                        <h5>@lang('website.general.customer_service')</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('account') }}">@lang('website.general.account')</a></li>
                            <li><a href="{{ route('wishlist') }}">@lang('website.general.wishlist')</a></li>
                            <li><a href="{{ route('cart') }}">@lang('website.general.cart')</a></li>
                            <li><a href="{{ route('partners') }}">@lang('website.general.partners')</a></li>
                            <li><a href="{{ route('products', 3) }}">@lang('website.general.products')</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 column forth">
                        <div id="ttmcontact">

                            <h5>@lang('website.general.contact')</h5>

                            <ul id="foote_contact_list">
                                <li>
                                    <div class="data">
                                        <span class="contact_title"><span>@lang('website.general.address'):
                                        </span>{{setting('address')}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="data">
                                        <span class="contact_title"><span>@lang('website.general.phone'): </span>
                                            {{setting('phone')}}
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="data">
                                        <span class="contact_title"><span>Website: </span>{{setting('website')}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="data">
                                            <span class="contact_title"><span>Email: </span><a
                                                    href="#">{{setting('email')}}</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="footer_middle">
            <div class="container">
                <div class="row">
                    <div class="ttm-social-block">
                        <div class="social">
                            <h5 class="hidden-lg hidden-md">@lang('website.general.follow')</h5>
                            <ul>
                                <li class="facebook"><a href="{{setting('facebook')}}">Facebook</a></li>
                                <li class="instagram"><a href="{{setting('instagram')}}">Instagram</a></li>
                                <li class="twitter"><a href="{{setting('twitter')}}">Twitter</a></li>
                                <li class="telegram"><a href="{{setting('telegram')}}">Telegram</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="copyright-block">All Right Reserved By <a href="www.instagram.com/gafar_zade_/?hl=tr/">Gafar Zade</a>
                    Copyright {{config('app.name')}} &copy; 2022
                </div>
{{--                <div id="ttmpaymentblock">--}}
{{--                    <div class="ttmpayment">--}}
{{--                        <ul class="payment-block-inner">--}}
{{--                            <li class="icon"><a href="#"><img--}}
{{--                                        src="{{asset('assets/img/frontend/image/catalog/banners/card-1.png')}}" alt=""></a>--}}
{{--                            </li>--}}
{{--                            <li class="icon"><a href="#"><img--}}
{{--                                        src="{{asset('assets/img/frontend/image/catalog/banners/card-2.png')}}" alt=""></a>--}}
{{--                            </li>--}}
{{--                            <li class="icon"><a href="#"><img--}}
{{--                                        src="{{asset('assets/img/frontend/image/catalog/banners/card-3.png')}}" alt=""></a>--}}
{{--                            </li>--}}
{{--                            <li class="icon"><a href="#"><img--}}
{{--                                        src="{{asset('assets/img/frontend/image/catalog/banners/card-4.png')}}" alt=""></a>--}}
{{--                            </li>--}}
{{--                            <li class="icon"><a href="#"><img--}}
{{--                                        src="{{asset('assets/img/frontend/image/catalog/banners/card-5.png')}}" alt=""></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
</footer>
