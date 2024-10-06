<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>Top Products</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Sales</th>
                    <th>Revenue</th>
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
