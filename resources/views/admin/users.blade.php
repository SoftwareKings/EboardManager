@extends('layouts.app')

@section('content')
<div class="flex-1 p-6">
    <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200 mb-6">User Management</h1>

    <!-- User Table -->
    <div class="overflow-hidden rounded-lg shadow-md mb-6">
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
    </div>

    <!-- Button to Open Modal -->
    <div class="text-right">
        <button 
            class="px-4 py-2 bg-blue-600 text-white font-semibold rounded shadow-md hover:bg-blue-700" 
            onclick="document.getElementById('createUserModal').classList.remove('hidden');">
            Create User
        </button>
    </div>

    <!-- Create User Modal -->
    <div 
        id="createUserModal" 
        class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-md">
            <div class="px-6 py-4">
                <h2 class="text-xl font-bold text-gray-700 dark:text-gray-200 mb-4">Create User</h2>
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            class="w-full px-4 py-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            class="w-full px-4 py-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            class="w-full px-4 py-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Confirm Password</label>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            class="w-full px-4 py-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Role</label>
                        <select 
                            name="role_id" 
                            class="w-full px-4 py-2 mt-2 border rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            required>
                            @foreach (\App\Role::all() as $role)
                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button 
                            type="button" 
                            class="px-4 py-2 text-gray-600 bg-gray-200 rounded-md hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600" 
                            onclick="document.getElementById('createUserModal').classList.add('hidden');">
                            Cancel
                        </button>
                        <button 
                            type="submit" 
                            class="ml-2 px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
