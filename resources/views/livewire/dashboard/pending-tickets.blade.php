<div class="card mt-4 shadow-sm">
    <div class="card-header">
        <h5>Pending Support Tickets</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Subject</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Submitted On</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendingTickets as $ticket)
                    <tr>
                        <td>#{{ $ticket['id'] }}</td>
                        <td>{{ $ticket['subject'] }}</td>
                        <td>{{ $ticket['customer'] }}</td>
                        <td>
                            <span class="badge
                                @if($ticket['status'] == 'Open') bg-danger
                                @elseif($ticket['status'] == 'In Progress') bg-warning
                                @else bg-secondary
                                @endif">
                                {{ $ticket['status'] }}
                            </span>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($ticket['submitted_on'])->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
