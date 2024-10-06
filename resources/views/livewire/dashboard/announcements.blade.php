<div class="card mt-4">
    <div class="card-header">
        <h5>Announcements</h5>
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @foreach($announcements as $announcement)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">{{ $announcement['title'] }}</h6>
                            <p class="mb-1">{{ $announcement['message'] }}</p>
                        </div>
                        <small class="text-muted">{{ \Carbon\Carbon::parse($announcement['date'])->format('M d, Y') }}</small>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
