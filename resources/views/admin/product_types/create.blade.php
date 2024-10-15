@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>@lang('product_types.create_title')</h2>

    <form action="{{ route('admin.product_types.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">@lang('product_types.name')</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">@lang('product_types.create_button')</button>
    </form>
</div>
@endsection
