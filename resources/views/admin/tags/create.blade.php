@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Tag</h2>

    <form action="{{ route('admin.tags.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tag Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Tag</button>
    </form>
</div>
@endsection
