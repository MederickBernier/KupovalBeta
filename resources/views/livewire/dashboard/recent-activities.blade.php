<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>Recent Activities</h5>
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @foreach($activities as $activity)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="badge me-2" style="background-color: #17a2b8;">{{ $activity['type'] }}</span>
                        <span>{{ $activity['message'] }}</span>
                    </div>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($activity['date'])->diffForHumans() }}</small>
                </li>
            @endforeach
        </ul>
    </div>
</div>
