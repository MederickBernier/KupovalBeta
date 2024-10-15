@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 mb-4">
            @if($artist->profile_picture)
                <img src="{{ asset('images/' . $artist->profile_picture) }}" class="img-fluid rounded" alt="{{ $artist->alias }}">
            @else
                <img src="{{ asset('images/default-avatar.png') }}" class="img-fluid rounded" alt="@lang('artist.default_image_alt')">
            @endif
        </div>
        <div class="col-md-7">
            <h2 class="mb-3">{{ $artist->alias }}</h2>
            <p class="text-muted">{{ $artist->bio }}</p>
        </div>
    </div>
</div>
@endsection
