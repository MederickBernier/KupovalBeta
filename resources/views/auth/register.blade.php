@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h3>@lang('register.create_account')</h3>
                    <p>@lang('register.join_today')</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">@lang('register.first_name')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">@lang('register.last_name')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">@lang('register.address')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">@lang('register.city')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zip_code" class="col-md-4 col-form-label text-md-right">@lang('register.zip_code')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('register.email')</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('register.password')</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">@lang('register.confirm_password')</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('register.register_button')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
