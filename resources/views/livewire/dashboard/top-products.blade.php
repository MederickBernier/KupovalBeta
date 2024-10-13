<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>{{ __('dashboard.top_products') }}</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>{{ __('dashboard.product') }}</th>
                    <th>{{ __('dashboard.category') }}</th>
                    <th>{{ __('dashboard.sales') }}</th>
                    <th>{{ __('dashboard.revenue') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topProducts as $product)
                    <tr>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['category'] }}</td>
                        <td>{{ $product['sales'] }}</td>
                        <td>${{ number_format($product['revenue'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
