@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Tag</h2>

    <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tag Name</label>
            <input type="text" name="name" class="form-control" value="{{ $tag->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Tag</button>
    </form>
</div>
@endsection
