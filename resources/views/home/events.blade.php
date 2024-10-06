@extends('layouts.app')

@section('content')
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h2 class="display-5">@lang('events.title')</h2>
        </div>
    </div>

    @php
        $currentMonth = '';
    @endphp

    @foreach($events as $event)
        @php
            $eventMonth = \Carbon\Carbon::parse($event->date)->translatedFormat('F Y'); // Get month and year
        @endphp

        <!-- Show month separator if it's a new month -->
        @if($eventMonth !== $currentMonth)
            @if($currentMonth)
                </div> <!-- Close previous row -->
            @endif
            <!-- Month and Year Separator -->
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="bg-navbar text-white p-2 text-center rounded month-separator">
                        {{ $eventMonth }}
                    </div>
                </div>
            </div>
            <!-- Event Cards for {{ $eventMonth }} -->
            <div class="row justify-content-center my-3">
            @php
                $currentMonth = $eventMonth;
            @endphp
        @endif

        <!-- Event Card -->
        <div class="col-8">
            <div class="card mb-3 shadow-sm event-card">
                <div class="card-body d-flex align-items-center">
                    <div class="me-4 text-center">
                        <h3 class="mb-0 event-date">{{ \Carbon\Carbon::parse($event->date)->format('d') }}</h3>
                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('M Y') }}</small>
                    </div>
                    <div>
                        <h5 class="card-title event-title">{{ $event->title }}</h5>
                        <p class="card-text event-description">{{ $event->description }}</p>
                        <small class="text-muted d-block"><i class="bi bi-geo-alt"></i> {{ $event->location }}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    </div> <!-- Close the last row -->
</section>
@endsection
