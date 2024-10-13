@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Category</h2>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Category</button>
    </form>
</div>
@endsection
