@extends('layouts.app')

@section('dashboard')

<!-- <div>
    This is Dashboard
    Welcome to Dashboard, {{ $user->role->role_name }}!
    
</div> -->
<div class="flex-1 p-6">
    <h1 class="text-3xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Project Management</h1>

    <!-- Project Table -->
    <div class="overflow-hidden rounded-lg shadow-md">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr class="text-left text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700">
                    <th class="px-6 py-3 text-sm font-semibold">Project</th>
                    <th class="px-6 py-3 text-sm font-semibold">Status</th>
                    <th class="px-6 py-3 text-sm font-semibold">Deadline</th>
                    <th class="px-6 py-3 text-sm font-semibold">Description</th>
                    <th class="px-6 py-3 text-sm font-semibold">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                <?php foreach ($projects as $project): ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-6 py-4 text-sm">
                            <p class="font-semibold"><?= htmlspecialchars($project['name'], ENT_QUOTES) ?></p>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <span class="px-2 py-1 font-semibold rounded-full
                                <?php
                                    switch (strtolower($project['status'])) {
                                        case 'in progress':
                                            echo 'text-blue-700 bg-blue-100 dark:text-blue-100 dark:bg-blue-700';
                                            break;
                                        case 'completed':
                                            echo 'text-green-700 bg-green-100 dark:text-green-100 dark:bg-green-700';
                                            break;
                                        case 'pending':
                                            echo 'text-yellow-700 bg-yellow-100 dark:text-yellow-100 dark:bg-yellow-700';
                                            break;
                                        case 'on hold':
                                            echo 'text-red-700 bg-red-100 dark:text-red-100 dark:bg-red-700';
                                            break;
                                        default:
                                            echo 'text-gray-700 bg-gray-100 dark:text-gray-100 dark:bg-gray-700';
                                            break;
                                    }
                                ?>"><?= htmlspecialchars($project['status'], ENT_QUOTES) ?></span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= htmlspecialchars($project['deadline'], ENT_QUOTES) ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= htmlspecialchars($project['description'], ENT_QUOTES) ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800"><?= htmlspecialchars($project['action'], ENT_QUOTES) ?></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
@endsection
