<div class="card mt-4">
    <div class="card-header">
        <h5>{{ __('dashboard.recent_orders') }}</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>{{ __('dashboard.order_id') }}</th>
                    <th>{{ __('dashboard.customer') }}</th>
                    <th>{{ __('dashboard.status') }}</th>
                    <th>{{ __('dashboard.total') }}</th>
                    <th>{{ __('dashboard.date') }}</th>
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
                    <td>{{ \Carbon\Carbon::parse($order['Date'])->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
