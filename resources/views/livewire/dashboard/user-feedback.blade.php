<div class="card mt-4">
    <div class="card-header">
        <h5>{{ __('dashboard.user_feedback') }}</h5>
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @foreach($feedbacks as $feedback)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $feedback['user'] }}</strong>
                        <p class="mb-1">{{ $feedback['message'] }}</p>
                        <span class="badge
                            {{ $feedback['rating'] >= 4 ? 'bg-success' : ($feedback['rating'] >= 2 ? 'bg-warning' : 'bg-danger') }}">
                            {{ __('dashboard.rating') }}: {{ $feedback['rating'] }}
                        </span>
                    </div>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($feedback['date'])->format('M d, Y') }}</small>
                </li>
            @endforeach
        </ul>
    </div>
</div>
