@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>@lang('gallery.title')</h2>
        <div class="row">
            @foreach($artworks as $artwork)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('images/' . $artwork->image_path) }}" class="card-img-top" alt="{{ $artwork->title }}">
                        <div class="card-body">
                            <p class="card-text">{{ $artwork->title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
