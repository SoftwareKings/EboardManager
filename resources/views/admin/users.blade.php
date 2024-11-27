
@extends('layouts.app')

@section('content')
<div class="flex-1 p-6">
    <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200 mb-6">User Management</h1>

    <!-- User Table -->
    <div class="overflow-hidden rounded-lg shadow-md">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr class="text-left text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700">
                    <th class="px-6 py-3 text-sm font-semibold">Name</th>
                    <th class="px-6 py-3 text-sm font-semibold">Email</th>
                    <th class="px-6 py-3 text-sm font-semibold">Role</th>
                    <th class="px-6 py-3 text-sm font-semibold text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($users as $user)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-6 py-4 text-sm">
                        <p class="font-semibold">{{ $user->name }}</p>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4 text-sm">
                        {{ $user->role->role_name }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h1>Create User</h1>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select name="role_id" class="form-control" required>
                    @foreach (\App\Role::all() as $role)
                        <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>        
    </div>
</div>
@endsection
