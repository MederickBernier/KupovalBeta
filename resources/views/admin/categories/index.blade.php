@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>{{ __('categories.title') }}</h2>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">{{ __('categories.create_new') }}</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>{{ __('categories.name') }}</th>
                <th>{{ __('categories.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">{{ __('categories.edit') }}</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('categories.confirm_delete') }}')">{{ __('categories.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
