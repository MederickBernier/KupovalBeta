<header>
    <nav class="navbar navbar-expand-lg {{ $page != 'index' ? 'navbar-shadow' : '' }}">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">{{ env('APP_NAME', 'Kupoval') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="@lang('navbar.toggle_navigation')">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $page == 'index' ? 'active' : '' }}" href="{{ route('index') }}">@lang('navbar.home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page == 'gallery' ? 'active' : '' }}" href="{{ route('gallery') }}">@lang('navbar.gallery')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page == 'shop' ? 'active' : '' }}" href="{{ route('shop.index') }}">@lang('navbar.shop')</a> <!-- Link to the shop -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page == 'about' ? 'active' : '' }}" href="{{ route('about') }}">@lang('navbar.about')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page == 'events' ? 'active' : '' }}" href="{{ route('events') }}">@lang('navbar.events')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">@lang('navbar.contact')</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="btn btn-primary me-2 mb-2 mb-lg-0" href="{{ route('login') }}">@lang('navbar.login')</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary mb-2 mb-lg-0" href="{{ route('register') }}">@lang('navbar.register')</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">@lang('navbar.profile')</a></li>
                                @if(Auth::user()->isAdmin())
                                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">@lang('navbar.dashboard')</a></li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        @lang('navbar.logout')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
