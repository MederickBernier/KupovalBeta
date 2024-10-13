@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('artworks.add_new_artwork') }}</h1>

    <form action="{{ route('admin.artworks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">{{ __('artworks.form.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('artworks.form.description') }}</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="main_image" class="form-label">{{ __('artworks.form.image') }}</label>
            <input type="file" class="form-control" id="main_image" name="main_image" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">{{ __('artworks.form.category') }}</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">{{ __('artworks.form.tags') }}</label>
            <select name="tags[]" class="form-control" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('artworks.form.create') }}</button>
    </form>
</div>
@endsection
