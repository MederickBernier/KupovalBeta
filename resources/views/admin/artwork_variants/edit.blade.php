@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>@lang('artwork_variants.edit_title')</h2>

    <form action="{{ route('admin.artwork_variants.update', [$variant->artwork_id, $variant->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_type_id">@lang('artwork_variants.product_type')</label>
            <select name="product_type_id" id="product_type_id" class="form-control" required>
                <option value="">@lang('artwork_variants.select_product_type')</option>
                @foreach ($productTypes as $type)
                    <option value="{{ $type->id }}" {{ $variant->product_type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">@lang('artwork_variants.price')</label>
            <input type="number" name="price" class="form-control" value="{{ $variant->price }}" required>
        </div>

        <div class="form-group">
            <label for="stock">@lang('artwork_variants.stock')</label>
            <input type="number" name="stock" class="form-control" value="{{ $variant->stock }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">@lang('artwork_variants.update_button')</button>
    </form>
</div>
@endsection
