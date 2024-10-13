@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('artworks.edit_artwork') }}</h1>

    <form action="{{ route('admin.artworks.update', $artwork->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">{{ __('artworks.form.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $artwork->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">{{ __('artworks.form.description') }}</label>
            <textarea class="form-control" id="description" name="description">{{ $artwork->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="main_image" class="form-label">{{ __('artworks.form.image') }}</label>
            <input type="file" class="form-control" id="main_image" name="main_image">
            @if($artwork->image_path)
                <img src="{{ asset('images/' . $artwork->image_path) }}" width="100" alt="{{ $artwork->title }}">
            @endif
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">{{ __('artworks.form.category') }}</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $artwork->category_id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">{{ __('artworks.form.tags') }}</label>
            <select name="tags[]" class="form-control" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" @if($artwork->tags->contains($tag->id)) selected @endif>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('artworks.form.update') }}</button>
    </form>
</div>
@endsection
