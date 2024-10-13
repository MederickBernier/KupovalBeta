<nav class="admin_sidenav">
    <div class="d-flex flex-column">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand text-center mb-3 text-white fw-bold" style="font-size: 1.5rem;">
            <i class="bi bi-speedometer2"></i> @lang('dashboard.dashboard')
        </a>
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link" target="_blank" href="{{ route('index') }}">
                    <i class="bi bi-arrow-return-left"></i> @lang('dashboard.view_site')
                </a>
            </li>

            <!-- Dashboard Section -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-house-door-fill"></i> @lang('dashboard.dashboard')
                </a>
            </li>

            <!-- User Management Section -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="userCollapse">
                    <i class="bi bi-people-fill"></i> @lang('dashboard.users')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="userCollapse">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.users.index') }}" class="nav-link">@lang('dashboard.list_manage_users')</a></li>
                    </ul>
                </div>
            </li>
            <!-- Artworks Management Section -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#artworksCollapse" role="button" aria-expanded="false" aria-controls="artworksCollapse">
                    <i class="bi bi-brush-fill"></i> @lang('dashboard.artworks')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="artworksCollapse">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.artworks.index') }}" class="nav-link">@lang('dashboard.manage_artworks')</a></li>
                        <li><a href="{{ route('admin.artworks.create') }}" class="nav-link">Create New Artwork</a></li>
                        <li><a href="{{ route('admin.categories.index') }}" class="nav-link">@lang('dashboard.categories')</a></li>
                        <li><a href="{{ route('admin.tags.index') }}" class="nav-link">@lang('dashboard.tags')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.inventory_management')</a></li>
                    </ul>
                </div>
            </li>

            <!-- Order Management Section -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#ordersCollapse" role="button" aria-expanded="false" aria-controls="ordersCollapse">
                    <i class="bi bi-cart-fill"></i> @lang('dashboard.orders')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="ordersCollapse">
                    <ul class="list-unstyled">
                        <li><a href="#" class="nav-link">@lang('dashboard.manage_orders')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.refunds_returns')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.shipping_delivery')</a></li>
                    </ul>
                </div>
            </li>

            <!-- Event Management Section -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#eventsCollapse" role="button" aria-expanded="false" aria-controls="eventsCollapse">
                    <i class="bi bi-calendar-event-fill"></i> @lang('dashboard.events')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="eventsCollapse">
                    <ul class="list-unstyled">
                        <li><a href="#" class="nav-link">@lang('dashboard.manage_events')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.add_new_event')</a></li>
                    </ul>
                </div>
            </li>

            <!-- Content Management Section (Blog and Gallery) -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#contentCollapse" role="button" aria-expanded="false" aria-controls="contentCollapse">
                    <i class="bi bi-file-text-fill"></i> @lang('dashboard.content')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="contentCollapse">
                    <ul class="list-unstyled">
                        <li><a href="#" class="nav-link">@lang('dashboard.manage_pages')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.blog_posts')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.art_gallery')</a></li>
                    </ul>
                </div>
            </li>

            <!-- Analytics & Reports Section -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-bar-chart-fill"></i> @lang('dashboard.analytics_reports')
                </a>
            </li>

            <!-- Reviews & Ratings Section -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-chat-left-text-fill"></i> @lang('dashboard.reviews_ratings')
                </a>
            </li>

            <!-- Settings Section -->
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#settingsCollapse" role="button" aria-expanded="false" aria-controls="settingsCollapse">
                    <i class="bi bi-gear-fill"></i> @lang('dashboard.settings')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="settingsCollapse">
                    <ul class="list-unstyled">
                        <li><a href="#" class="nav-link">@lang('dashboard.general_settings')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.payment_settings')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.shipping_taxes')</a></li>
                        <li><a href="#" class="nav-link">@lang('dashboard.security_access')</a></li>
                    </ul>
                </div>
            </li>

            <!-- Profile & Logout Section -->
            <li class="nav-item mt-4">
                <a class="nav-link d-flex align-items-center" data-bs-toggle="collapse" href="#profileCollapse" role="button" aria-expanded="false" aria-controls="profileCollapse">
                    <i class="bi bi-person-fill"></i> @lang('dashboard.my_account')
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="profileCollapse">
                    <ul class="list-unstyled">
                        <li><a class="nav-link" href="{{ route('profile') }}">@lang('navbar.profile')</a></li>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('navbar.logout')
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
