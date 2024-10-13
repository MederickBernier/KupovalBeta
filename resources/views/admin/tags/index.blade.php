@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Tags</h2>

    <a href="{{ route('admin.tags.create') }}" class="btn btn-success mb-3">Create New Tag</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
