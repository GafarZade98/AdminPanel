<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="{{ route('faqs') }}">@lang('website.general.faqs')</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{ route('terms') }}">@lang('website.general.terms')</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{ route('privacy') }}">@lang('website.general.privacy')</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">

                @foreach(config('app.locales') as $key => $lang)
                    <a class="text-dark px-2" href="{{route('locale', $key)}}">{{$key}}</a>
                @endforeach

                <a class="text-dark px-2" href="{{setting('facebook')}}">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="{{setting('twitter')}}">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="{{setting('telegram')}}">
                    <i class="fab fa-telegram"></i>
                </a>
                <a class="text-dark px-2" href="{{setting('instagram')}}">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{ route('homepage') }}" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>{{config('app.name')}}</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input aria-label="search" type="text" class="form-control" placeholder="@lang('admin.buttons.search')">
                    <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                    </div>
                </div>
            </form>
        </div>
       @auth()
            <div class="col-lg-3 col-6 text-right">
{{--                <a href="" class="btn border">--}}
{{--                    <i class="fas fa-heart text-primary"></i>--}}
{{--                    <span class="badge">0</span>--}}
{{--                </a>--}}
                <a href="{{ route('cart') }}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">{{count(\App\Models\Cart::where('user_id', auth()->id())->get())}}</span>
                </a>
            </div>
        @elseguest
            <div class="col-lg-3 col-6 text-right">
                <a href="{{ route('user-login') }}" class="btn border">@lang('website.general.login')</a>
                <a href="{{ route('register') }}" class="btn border">@lang('website.general.register')</a>
            </div>
        @endauth
    </div>
</div>



<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">@lang('website.general.categories')</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse  navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">

                    @php($categories = \App\Models\Category::active()->whereNull('category_id')->get())
                        <div class="nav-item dropdown">
                            @foreach($categories as $cat)
                                @if(count($cat->categories) > 0)
                                    <a href="{{ route('products', $cat->getAttribute('slug')) }}" class="nav-link" data-toggle="dropdown">
                                        {{$cat->getAttribute('name')}} <i class="fa fa-angle-down float-right mt-1"></i>
                                    </a>
                                    <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                        @foreach($cat->categories as $subCategory)
                                            <a href="{{ route('products', $subCategory->getAttribute('slug')) }}"
                                               class="dropdown-item">{{$subCategory->getAttribute('name')}}</a>
                                        @endforeach
                                    </div>
                                @endif
                         @endforeach
                    </div>
                    @foreach($categories as $cat)
                        @if(count($cat->categories) == null)
                            <a href="{{ route('products', $cat->getAttribute('slug')) }}" class="nav-item nav-link">{{$cat->getAttribute('name')}} </a>
                        @endif
                    @endforeach
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>{{config('app.name')}}</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('homepage') }}" class="nav-item nav-link @if(request()->url() == route('homepage')) active @endif">@lang('website.general.homepage')</a>
                        <a href="{{ route('all-products') }}" class="nav-item nav-link @if(request()->url() == route('all-products') || request()->url() == route('products', 'Mal-1')) active @endif">@lang('website.general.products')</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link @if(request()->url() == route('about')) active @endif">@lang('website.general.about')</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link @if(request()->url() == route('contact')) active @endif">@lang('website.general.contact')</a>
                    </div>
                @auth()
                    <div class="navbar-nav ml-auto py-0">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">@lang('website.general.account')</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('account') }}" class="dropdown-item">@lang('website.general.account')</a>
                                <a href="{{ route('cart') }}" class="dropdown-item">@lang('website.general.cart')</a>
                                <a class="dropdown-item " href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>@lang('website.general.signOut')</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                @endauth
                </div>
            </nav>
        </div>
    </div>
</div>
