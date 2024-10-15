<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>{{ __('dashboard.recent_activities') }}</h5>
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @foreach($activities as $activity)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="badge me-2 bg-info">{{ $activity['type'] }}</span> <!-- Bootstrap info badge -->
                        <span>{{ $activity['message'] }}</span>
                    </div>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($activity['date'])->diffForHumans() }}</small>
                </li>
            @endforeach
        </ul>
    </div>
</div>
