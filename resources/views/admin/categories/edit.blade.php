@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>{{ __('categories.edit_title') }}</h2>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">{{ __('categories.name') }}</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('categories.update_button') }}</button>
    </form>
</div>
@endsection
