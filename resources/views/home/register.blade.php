@extends('layouts.app')

@section('content')
<section class="py-5">
  <div class="container">
    <h1 class="text-center text-primary mb-4">@lang('register.title')</h1>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">@lang('register.full_name')</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">@lang('register.email_address')</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">@lang('register.password')</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">@lang('register.confirm_password')</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>
      <button type="submit" class="btn btn-primary">@lang('register.register_button')</button>
    </form>
  </div>
</section>
@endsection
