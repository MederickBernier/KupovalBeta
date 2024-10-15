@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ __('artworks.title') }}</h1>
    <a href="{{ route('admin.artworks.create') }}" class="btn btn-primary mb-3">{{ __('artworks.add_new') }}</a>

    <table class="table">
        <thead>
            <tr>
                <th>{{ __('artworks.table.title') }}</th>
                <th>{{ __('artworks.table.artist') }}</th>
                <th>{{ __('artworks.table.category') }}</th>
                <th>{{ __('artworks.table.tags') }}</th>
                <th>{{ __('artworks.table.description') }}</th>
                <th>{{ __('artworks.table.price') }}</th>
                <th>{{ __('artworks.table.stock') }}</th>
                <th>{{ __('artworks.table.image') }}</th>
                <th>{{ __('artworks.table.actions') }}</th>
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
                    <td>{{ $artwork->price }}</td>
                    <td>{{ $artwork->stock }}</td>
                    <td><img src="{{ asset('images/' . $artwork->image_path) }}" width="100" alt="{{ $artwork->title }}"></td>
                    <td>
                        <a href="{{ route('admin.artworks.edit', $artwork->id) }}" class="btn btn-warning">{{ __('artworks.edit') }}</a>
                        <form action="{{ route('admin.artworks.destroy', $artwork->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('artworks.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
