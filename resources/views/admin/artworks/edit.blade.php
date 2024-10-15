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

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_for_sale" name="is_for_sale" @if($artwork->is_for_sale) checked @endif>
            <label class="form-check-label" for="is_for_sale">{{ __('artworks.form.is_for_sale') }}</label>
        </div>

        <div id="shopFields" style="display: @if($artwork->is_for_sale) block @else none @endif;">
            <div class="mb-3">
                <label for="price" class="form-label">{{ __('artworks.form.price') }}</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $artwork->price }}">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">{{ __('artworks.form.stock') }}</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $artwork->stock }}">
            </div>
            <!-- Add a component for variants if needed -->
        </div>

        <button type="submit" class="btn btn-primary">{{ __('artworks.form.update') }}</button>
    </form>
</div>

<script>
    document.getElementById('is_for_sale').addEventListener('change', function() {
        document.getElementById('shopFields').style.display = this.checked ? 'block' : 'none';
    });

    // Trigger the change event to ensure the correct initial state
    document.getElementById('is_for_sale').dispatchEvent(new Event('change'));
</script>
@endsection
