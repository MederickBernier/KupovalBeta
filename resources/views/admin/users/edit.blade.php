@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>{{ __('dashboard.edit_user') }}</h1>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="first_name" class="form-label">{{ __('dashboard.first_name') }}</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}" required>
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">{{ __('dashboard.last_name') }}</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('dashboard.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">{{ __('dashboard.role') }}</label>
            <select class="form-select" id="role" name="role" required>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>{{ __('dashboard.admin') }}</option>
                <option value="client" {{ $user->role === 'client' ? 'selected' : '' }}>{{ __('dashboard.client') }}</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __('dashboard.save_changes') }}</button>
    </form>
</div>
@endsection
