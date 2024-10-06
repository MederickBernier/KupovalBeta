<div class="card mt-4">
    <div class="card-header">
        <h5>Pending Reviews</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Rating</th>
                    <th>Date</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendingReviews as $review)
                    <tr>
                        <td>{{ $review['customer'] }}</td>
                        <td>{{ $review['product'] }}</td>
                        <td>
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="bi bi-star{{ $i <= $review['rating'] ? '-fill' : '' }}"></i>
                            @endfor
                        </td>
                        <td>{{ \Carbon\Carbon::parse($review['date'])->format('Y-m-d') }}</td>
                        <td>{{ $review['comment'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
