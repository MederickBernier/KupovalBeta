<div class="row">
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text h4">{{ number_format($totalUsers) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text h4">{{ number_format($totalOrders) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text h4">{{ number_format($totalProducts) }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total Revenue</h5>
                <p class="card-text h4">${{ number_format($totalRevenue, 2) }}</p>
            </div>
        </div>
    </div>
</div>
