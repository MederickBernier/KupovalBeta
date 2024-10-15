@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>{{ __('events.add_new') }}</h1>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">{{ __('events.form.title') }}</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('events.form.description') }}</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">{{ __('events.form.location') }}</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">{{ __('events.form.date') }}</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <!-- Hardcoded artist ID -->
        <input type="hidden" name="artist_id" value="{{ $artist->id }}">

        <button type="submit" class="btn btn-primary">{{ __('events.create') }}</button>
    </form>
</div>
@endsection
