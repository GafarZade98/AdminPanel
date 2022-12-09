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
                        <i class="bi bi-person"></i>
                        <span>@lang('admin.sidebar.roles')</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('permissions.index')}}" class="@if(request()->url() == route('permissions.index')) active @endif">
                        <i class="bi bi-person"></i>
                        <span>@lang('admin.sidebar.permissions')</span>
                    </a>
                </li>
            </ul>
        </li>

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link @if(request()->url() !== route('tests.index')) collapsed @endif" href="{{ route('tests.index') }}">--}}
{{--                <i class="bi bi-grid"></i>--}}
{{--                <span>@lang('admin.sidebar.test')</span>--}}
{{--            </a>--}}
{{--        </li>--}}

        <!-- With Head -->
        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link @if(request()->url() !== route('account.index')) collapsed @endif"
               href="{{ route('account.index') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>

    </ul>

</aside>
