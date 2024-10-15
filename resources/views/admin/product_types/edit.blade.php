@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>@lang('product_types.edit_title')</h2>

    <form action="{{ route('admin.product_types.update', $productType->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">@lang('product_types.name')</label>
            <input type="text" name="name" class="form-control" value="{{ $productType->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">@lang('product_types.update_button')</button>
    </form>
</div>
@endsection
