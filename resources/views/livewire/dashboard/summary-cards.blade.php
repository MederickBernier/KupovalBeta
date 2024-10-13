<div class="row">
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ __('dashboard.total_users') }}</h5>
                <p class="card-text h4">{{ number_format($totalUsers) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ __('dashboard.total_orders') }}</h5>
                <p class="card-text h4">{{ number_format($totalOrders) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ __('dashboard.total_products') }}</h5>
                <p class="card-text h4">{{ number_format($totalProducts) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ __('dashboard.total_revenue') }}</h5>
                <p class="card-text h4">${{ number_format($totalRevenue, 2) }}</p>
            </div>
        </div>
    </div>
</div>
