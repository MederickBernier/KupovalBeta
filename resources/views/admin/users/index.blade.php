@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>Manage Users</h1>

    <!-- User Table Layout -->
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
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
                    <span class="badge bg-warning text-dark">Admin</span>
                    @else
                    <span class="badge bg-info text-dark">Client</span>
                    @endif
                </td>
                <td>
                    @if ($user->trashed())
                    <span class="badge bg-danger">Deactivated</span>
                    @else
                    <span class="badge bg-success">Active</span>
                    @endif
                </td>
                <td class="text-center">
                    <!-- Edit Button -->
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning me-1">Edit</a>

                    <!-- Toggle Activation Button -->
                    @if ($user->id !== auth()->id())
                    <form action="{{ route('admin.users.toggle', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')

                        @if ($user->trashed())
                        <button type="submit" class="btn btn-sm btn-info">Activate</button>
                        @else
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to deactivate this user?')">Deactivate</button>
                        @endif
                    </form>
                    @else
                    <!-- Disabled Button for Current Admin -->
                    <button class="btn btn-sm btn-secondary" disabled>Your Account</button>
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
