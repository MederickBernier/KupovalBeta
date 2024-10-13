@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Artworks</h1>
    <a href="{{ route('admin.artworks.create') }}" class="btn btn-primary mb-3">Add New Artwork</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Category</th>
                <th>Tags</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artworks as $artwork)
                <tr>
                    <td>{{ $artwork->title }}</td>
                    <td>{{ $artwork->artist->name }}</td>
                    <td>{{ $artwork->category->name }}</td>
                    <td>
                        @foreach($artwork->tags as $tag)
                            <span class="badge bg-info">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ $artwork->description }}</td>
                    <td><img src="{{ asset('images/' . $artwork->image_path) }}" width="100" alt="{{ $artwork->title }}"></td>
                    <td>
                        <a href="{{ route('admin.artworks.edit', $artwork->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.artworks.destroy', $artwork->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
