@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('events.add_new') }}</h1>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">{{ __('events.form.title') }}</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description">{{ __('events.form.description') }}</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="location">{{ __('events.form.location') }}</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="date">{{ __('events.form.date') }}</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <!-- Hardcoded artist ID -->
        <input type="hidden" name="artist_id" value="{{ $artist->id }}">

        <button type="submit" class="btn btn-primary">{{ __('events.create') }}</button>
    </form>
</div>
@endsection
