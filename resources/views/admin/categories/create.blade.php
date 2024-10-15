@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>{{ __('categories.create_title') }}</h2>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('categories.name') }}</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('categories.create_button') }}</button>
    </form>
</div>
@endsection
