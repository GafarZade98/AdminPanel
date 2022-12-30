<header>

    <div class="top_bar hidden-sm hidden-md hidden-lg hidden-xs">
        <div class="container">
            <div class="top_bar_left"></div>
            <div class="top_bar_right"></div>
        </div>
    </div>

    <div class="header_main">
        <div class="container">

            <div class="header-logo">
                <div id="logo">
                    <a href="{{route('homepage')}}">
                        <img src="{{image(setting('logo'))}}" alt="logo" class="img-responsive"/>
                    </a>
                </div>
            </div>

            <div class="dropdown ttm_search">
                <div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Search here..." class="form-control input-lg"/>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-lg"> <span class="search_button">Search</span></button>
                    </span>
                </div>
            </div>
            <div class="ttm_contactcms">
                <div class="ttm_contactcms_inner">
                    <div class="text">
                        <span class="desc"> <i class="fa fa-truck"></i> Free Shipping </span>
                    </div>
                    <div class="text">
                        <a href="{{route('contact')}}" class="desc"> <i class="fa fa-headphones"></i> Need help? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom_block">
        <div class="container">
            <div class="vertical-menu">
                <div class="vertical-category">
                    <div class="vertical-menu-heading"><span class="menu-icon">&nbsp;</span> <span
                            class="vertical-heading-text">@lang('website.general.categories') <i class="fa fa-angle-down"></i></span>
                    </div>
                    <div class="vertical-content">
                        <ul id="nav-one" class="dropmenu top-vertical-category">
                            @php($categories = \App\Models\Category::active()->whereNull('category_id')->get())
                                @foreach($categories as $cat)
                                <li class="menu_item @if(count($cat->categories) >> 0) dropdown @endif">
                                    <a href="{{ route('products', $cat->id) }}">{{$cat->getAttribute('name')}}</a>
                                    <div class="dropdown-menu megamenu column1">
                                        <div class="dropdown-inner">
                                            <ul class="subchilds_1 list-unstyled">
                                                @foreach($cat->categories as $subCategory)
                                                    <li><a href="{{ route('products', $subCategory->id ) }}">{{$subCategory->getAttribute('name')}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-main-menu">
                <nav class="nav-container" role="navigation">
                    <div class="nav-inner">
                        <div id="menu" class="header-main-menu">
                            <div class="nav-responsive"><span>Menu</span>
                                <div class="expandable"></div>
                            </div>

                            <ul class="nav navbar-nav">
                                <li class="home menu-category"><a class="a-top-link" href="{{ route('homepage') }}">@lang('website.general.homepage')</a></li>
                                <li class="menu-category"><a class="a-top-link" href="{{route('about')}}">@lang('website.general.about')</a></li>
                                <li class="menu-category"><a class="a-top-link" href="{{route('contact')}}">@lang('website.general.contact')</a></li>
                                <li class="last menu-category"><a class="a-top-link" href="{{route('blogs')}}">@lang('website.general.blogs')</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

            <div class="header-cart">
                <div id="cart" class="btn-group btn-block">
                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                            class="btn btn-inverse btn-block btn-lg dropdown-toggle" title="Shopping Cart"><span
                            id="cart-title">cart </span> <span id="cart-total"><span>0</span> $0.00</span></button>
                    <ul class="dropdown-menu pull-right cart-menu">
                        <li>
                            <p class="text-center">@lang('website.general.cart_is_empty')</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown ttm_myaccount">
                <a href="{{ route('account') }}" title="@lang('website.general.account')" class="dropdown-toggle" data-toggle="dropdown">
                    <span>My Account</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
                    <li><a href="{{ route('register') }}" title="Register">@lang('website.general.register')</a></li>
                    <li><a href="{{ route('login') }}" title="Login">@lang('website.general.login')</a></li>
                    <li><a href="{{ route('cart') }}" title="Shopping Cart">@lang('website.general.cart')</a></li>
                </ul>
            </div>
            <div class="top_bar_wishlist">
                <a href="{{ route('wishlist') }}" id="wishlist-total" title="wishlist"><span class="wishlist">@lang('website.general.wishlist') <span>0</span></span></a>
            </div>
        </div>
    </div>

</header>
