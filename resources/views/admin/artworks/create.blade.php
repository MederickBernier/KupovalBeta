@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Artwork</h1>

    <form action="{{ route('admin.artworks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Image</label>
            <input type="file" class="form-control" id="image_path" name="image_path">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
