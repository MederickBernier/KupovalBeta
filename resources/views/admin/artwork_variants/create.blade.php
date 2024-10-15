@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>@lang('artwork_variants.create_title')</h2>

    <form action="{{ route('admin.artwork_variants.store', $artwork->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_type_id">@lang('artwork_variants.product_type')</label>
            <select name="product_type_id" id="product_type_id" class="form-control" required>
                <option value="">@lang('artwork_variants.select_product_type')</option>
                @foreach ($productTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">@lang('artwork_variants.price')</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stock">@lang('artwork_variants.stock')</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">@lang('artwork_variants.create_button')</button>
    </form>
</div>
@endsection
