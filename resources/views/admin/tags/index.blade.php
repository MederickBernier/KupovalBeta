@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>{{ __('tags.tags') }}</h2>

    <a href="{{ route('admin.tags.create') }}" class="btn btn-success mb-3">{{ __('tags.create_tag_button') }}</a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>{{ __('tags.name') }}</th>
                <th>{{ __('tags.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning">{{ __('tags.edit_button') }}</a>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('tags.delete_confirmation') }}')">{{ __('tags.delete_button') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
