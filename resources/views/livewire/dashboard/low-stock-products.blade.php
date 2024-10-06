<div class="card mt-4">
    <div class="card-header">
        <h5>Low Stock Products</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Stock</th>
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
