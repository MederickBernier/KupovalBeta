@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>{{ __('tags.edit_tag') }}</h2>

    <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">{{ __('tags.tag_name') }}</label>
            <input type="text" name="name" class="form-control" value="{{ $tag->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('tags.update_tag_button') }}</button>
    </form>
</div>
@endsection
