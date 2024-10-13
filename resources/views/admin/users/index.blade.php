@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>{{ __('dashboard.manage_users') }}</h1>

    <!-- User Table Layout -->
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>{{ __('dashboard.first_name') }}</th>
                <th>{{ __('dashboard.last_name') }}</th>
                <th>{{ __('dashboard.email') }}</th>
                <th>{{ __('dashboard.role') }}</th>
                <th>{{ __('dashboard.status') }}</th>
                <th class="text-center">{{ __('dashboard.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="{{ $user->trashed() ? 'table-danger' : '' }}">
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->role === 'admin')
                    <span class="badge bg-warning text-dark">{{ __('dashboard.admin') }}</span>
                    @else
                    <span class="badge bg-info text-dark">{{ __('dashboard.client') }}</span>
                    @endif
                </td>
                <td>
                    @if ($user->trashed())
                    <span class="badge bg-danger">{{ __('dashboard.deactivated') }}</span>
                    @else
                    <span class="badge bg-success">{{ __('dashboard.active') }}</span>
                    @endif
                </td>
                <td class="text-center">
                    <!-- Edit Button -->
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning me-1">{{ __('dashboard.edit') }}</a>

                    <!-- Toggle Activation Button -->
                    @if ($user->id !== auth()->id())
                    <form action="{{ route('admin.users.toggle', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')

                        @if ($user->trashed())
                        <button type="submit" class="btn btn-sm btn-info">{{ __('dashboard.activate') }}</button>
                        @else
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('dashboard.confirm_deactivate') }}')">{{ __('dashboard.deactivate') }}</button>
                        @endif
                    </form>
                    @else
                    <!-- Disabled Button for Current Admin -->
                    <button class="btn btn-sm btn-secondary" disabled>{{ __('dashboard.your_account') }}</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $users->links() }}
    </div>
</div>
@endsection
