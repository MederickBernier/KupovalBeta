<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>{{ __('dashboard.top_customers') }}</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>{{ __('dashboard.name') }}</th>
                    <th>{{ __('dashboard.total_spent') }}</th>
                    <th>{{ __('dashboard.orders') }}</th>
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
