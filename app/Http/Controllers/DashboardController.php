<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $projects = [
            [
                'name' => 'Apple',
                'status' => 'In Progress',
                'deadline' => '2024-11-25', // ISO format for better handling
                'description' => 'Update Schematics',
                'action' => 'Open Project'
            ],
            [
                'name' => 'Apple',
                'status' => 'In Progress',
                'deadline' => '2024-11-25', // ISO format for better handling
                'description' => 'Update Schematics',
                'action' => 'Open Project'
            ]
        ];

        return view('dashboard', compact('user', 'projects'));
    }
}
