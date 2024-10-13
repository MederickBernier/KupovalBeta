<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>{{ __('dashboard.recent_user_registrations') }}</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>{{ __('dashboard.name') }}</th>
                    <th>{{ __('dashboard.email') }}</th>
                    <th>{{ __('dashboard.role') }}</th>
                    <th>{{ __('dashboard.registration_date') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentUsers as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ ucfirst($user['role']) }}</td>
                        <td>{{ \Carbon\Carbon::parse($user['created_at'])->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
