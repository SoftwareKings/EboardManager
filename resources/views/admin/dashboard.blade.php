@extends('layouts.app')

@section('content')
<div class="flex-1 p-6">
    <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Admin Dashboard</h1>

    <!-- Projects Table -->
    <div class="overflow-hidden rounded-lg shadow-md">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr class="text-left text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700">
                    <th class="px-6 py-3 text-sm font-semibold">Name</th>
                    <th class="px-6 py-3 text-sm font-semibold">Status</th>
                    <th class="px-6 py-3 text-sm font-semibold">Deadline</th>
                    <th class="px-6 py-3 text-sm font-semibold">Description</th>
                    <th class="px-6 py-3 text-sm font-semibold text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($projects as $project)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-6 py-4 text-sm">
                        <p class="font-semibold">{{ $project->name }}</p>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $project->status == 'In Progress' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                            {{ $project->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        {{ \Carbon\Carbon::parse($project->deadline)->format('M d, Y') }}
                    </td>
                    <td class="px-6 py-4 text-sm">
                        {{ $project->description }}
                    </td>
                    <td class="px-6 py-4 text-sm text-center">
                        <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">{{ $project->action }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-end space-x-4 mt-6">
            <a href="#" class="px-6 py-3 bg-green-500 text-white rounded-lg text-sm hover:bg-green-600">Add New Project</a>
            <a href="#" class="px-6 py-3 bg-indigo-500 text-white rounded-lg text-sm hover:bg-indigo-600">Manage Users</a>
            <a href="#" class="px-6 py-3 bg-gray-500 text-white rounded-lg text-sm hover:bg-gray-600">View All Flow Diagrams</a>
    </div>
</div>
@endsection