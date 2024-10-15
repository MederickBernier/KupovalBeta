@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>@lang('product_types.title')</h1>
    <a href="{{ route('admin.product_types.create') }}" class="btn btn-primary mb-3">@lang('product_types.add_new')</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>@lang('product_types.name')</th>
                <th>@lang('product_types.actions')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productTypes as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>
                        <a href="{{ route('admin.product_types.edit', $type->id) }}" class="btn btn-warning">@lang('product_types.edit')</a>
                        <form action="{{ route('admin.product_types.destroy', $type->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('@lang('product_types.confirm_delete')')">@lang('product_types.delete')</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
