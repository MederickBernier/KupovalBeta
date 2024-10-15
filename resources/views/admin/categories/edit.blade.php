@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>{{ __('categories.edit_title') }}</h2>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('categories.name') }}</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('categories.update_button') }}</button>
    </form>
</div>
@endsection
