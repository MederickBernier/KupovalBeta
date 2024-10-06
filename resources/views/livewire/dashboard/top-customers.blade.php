<div class="card mt-4">
    <div class="card-header">
        <h5>Top Customers</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Total Spent</th>
                    <th>Orders</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topCustomers as $customer)
                    <tr>
                        <td>{{ $customer['name'] }}</td>
                        <td>${{ number_format($customer['total_spent'], 2) }}</td>
                        <td>{{ $customer['orders'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
