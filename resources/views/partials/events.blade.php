<section class="container my-5">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2 class="display-5">@lang('events.upcoming_events')</h2>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($events as $event)
        <div class="col-md-4">
            <article class="card event-card">
                <div class="card-body popout-hover">
                    <h5 class="card-title event-title">{{ $event->title }}</h5>
                    <p class="card-text event-description">{{ $event->description }}</p>
                    <p class="text-muted"><strong>@lang('events.location'):</strong> {{ $event->location }}</p>
                    <p class="text-muted"><strong>@lang('events.date'):</strong> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</p>
                    <a href="#" class="btn btn-general">@lang('events.learn_more')</a>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</section>
