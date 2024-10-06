<div class="card mt-4">
    <div class="card-header">
        <h5>Recent Orders</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentOrders as $order)
                <tr class="
                    @if($order['Status'] === 'Completed') table-success
                    @elseif($order['Status'] === 'Pending') table-warning
                    @elseif($order['Status'] === 'Cancelled') table-danger
                    @elseif($order['Status'] === 'Processing') table-info
                    @else table-light @endif
                ">
                    <td>{{ $order['Order ID'] }}</td>
                    <td>{{ $order['Customer'] }}</td>
                    <td>{{ $order['Status'] }}</td>
                    <td>${{ number_format($order['Total'], 2) }}</td>
                    <td>{{ $order['Date'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
