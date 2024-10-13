<div class="card mt-4">
    <div class="card-header">
        <h5>{{ __('dashboard.low_stock_products') }}</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>{{ __('dashboard.product_name') }}</th>
                    <th>{{ __('dashboard.stock') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lowStockProducts as $product)
                    <tr class="{{ $product['stock'] <= 2 ? 'table-danger' : ($product['stock'] <= 5 ? 'table-warning' : '') }}">
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['stock'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
