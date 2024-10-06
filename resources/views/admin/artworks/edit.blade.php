@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Artwork</h1>

    <form action="{{ route('admin.artworks.update', $artwork->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $artwork->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $artwork->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Image</label>
            <input type="file" class="form-control" id="image_path" name="image_path">
            @if($artwork->image_path)
                <img src="{{ asset('images/' . $artwork->image_path) }}" width="100" alt="{{ $artwork->title }}">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
