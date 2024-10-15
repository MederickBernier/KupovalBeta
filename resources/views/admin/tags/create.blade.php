@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>{{ __('tags.create_tag') }}</h2>

    <form action="{{ route('admin.tags.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">{{ __('tags.tag_name') }}</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('tags.create_tag_button') }}</button>
    </form>
</div>
@endsection
