<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('index')) collapsed @endif" href="{{ route('index') }}">
                <i class="bi bi-grid"></i>
                <span>@lang('admin.sidebar.dashboard')</span>
            </a>
        </li>

        <!-- Collapse -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i>
                <span>@lang('admin.sidebar.users')</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
{{--                @can('viewAny',\App\Models\User::class)--}}
                <li>
                    <a href="{{route('users.index')}}" class="@if(request()->url() == route('users.index')) active @endif">
                        <i class="bi bi-person"></i>
                        <span>@lang('admin.sidebar.users')</span>
                    </a>
                </li>
{{--                @endcan--}}
                <li>
                    <a href="{{route('roles.index')}}" class="@if(request()->url() == route('roles.index')) active @endif">
                        <i class="bi bi-bezier"></i>
                        <span>@lang('admin.sidebar.roles')</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('permissions.index')}}" class="@if(request()->url() == route('permissions.index')) active @endif">
                        <i class="bi bi-diagram-3"></i>
                        <span>@lang('admin.sidebar.permissions')</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('settings.index')) collapsed @endif"
               href="{{ route('settings.index') }}">
                <i class="bi bi-gear"></i>
                <span>@lang('admin.sidebar.settings')</span>
            </a>
        </li>

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link @if(request()->url() !== route('tests.index')) collapsed @endif" href="{{ route('tests.index') }}">--}}
{{--                <i class="bi bi-grid"></i>--}}
{{--                <span>@lang('admin.sidebar.test')</span>--}}
{{--            </a>--}}
{{--        </li>--}}

        <!-- With Head -->
        <li class="nav-heading">Pages</li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link @if(request()->url() !== route('account.index')) collapsed @endif"--}}
{{--               href="{{ route('account.index') }}">--}}
{{--                <i class="bi bi-person"></i>--}}
{{--                <span>Profile</span>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('banners.index')) collapsed @endif"
               href="{{ route('banners.index') }}">
                <i class="bi bi-file-easel-fill"></i>
                <span>@lang('admin.sidebar.banners')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('solutions.index')) collapsed @endif"
               href="{{ route('solutions.index') }}">
                <i class="bi bi-hdd-rack"></i>
                <span>@lang('admin.sidebar.solutions')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('faqs.index')) collapsed @endif"
               href="{{ route('faqs.index') }}">
                <i class="bi bi-patch-question"></i>
                <span>@lang('admin.sidebar.faqs')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('partners.index')) collapsed @endif"
               href="{{ route('partners.index') }}">
                <i class="bi bi-person-plus"></i>
                <span>@lang('admin.sidebar.partners')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('categories.index')) collapsed @endif"
               href="{{ route('categories.index') }}">
                <i class="bi bi-tag"></i>
                <span>@lang('admin.sidebar.categories')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('products.index')) collapsed @endif"
               href="{{ route('products.index') }}">
                <i class="bi bi-bag-check"></i>
                <span>@lang('admin.sidebar.products')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('orders.view')) collapsed @endif"
               href="{{ route('orders.view') }}">
                <i class="bi bi-cart-check"></i>
                <span>@lang('admin.sidebar.orders')</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('contacts.index')) collapsed @endif"
               href="{{ route('contacts.index') }}">
                <i class="bi bi-telephone-plus"></i>
                <span>@lang('admin.sidebar.contacts')</span>
            </a>
        </li>
    </ul>

</aside>
