@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>{{ __('events.edit_artwork') }}</h1>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">{{ __('events.form.title') }}</label>
            <input type="text" name="title" class="form-control" value="{{ $event->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('events.form.description') }}</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $event->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">{{ __('events.form.location') }}</label>
            <input type="text" name="location" class="form-control" value="{{ $event->location }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">{{ __('events.form.date') }}</label>
            <input type="date" name="date" class="form-control" value="{{ $event->date->format('Y-m-d') }}" required>
        </div>

        <div class="mb-3">
            <label for="artist_id" class="form-label">{{ __('events.form.artist') }}</label>
            <select name="artist_id" class="form-select" required>
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}" {{ $event->artist_id == $artist->id ? 'selected' : '' }}>{{ $artist->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('events.update') }}</button>
    </form>
</div>
@endsection
