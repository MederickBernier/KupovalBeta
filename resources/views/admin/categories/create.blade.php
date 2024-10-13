@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>{{ __('categories.create_title') }}</h2>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">{{ __('categories.name') }}</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('categories.create_button') }}</button>
    </form>
</div>
@endsection
