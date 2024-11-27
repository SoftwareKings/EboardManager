<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $projects = collect([
            (object)[
                'name' => 'Apple',
                'status' => 'In Progress',
                'deadline' => '2024-11-25', // ISO format
                'description' => 'Update Schematics',
                'action' => 'Open Project',
            ],
            (object)[
                'name' => 'Orange',
                'status' => 'Completed',
                'deadline' => '2024-10-15',
                'description' => 'Finalize Marketing Plan',
                'action' => 'Review Report',
            ]
        ]);

        return view('admin.dashboard', compact('projects'));
    }
}
