<?php

use Illuminate\Database\Seeder;
use App\Phase;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phase::create([
            'name' => 'Flow Diagram',
            'description' => 'Create a flow diagram for the system.',
            'comment' => [1, 2], // Roles allowed to comment (Admin and Designer)
            'upload' => [1, 3], // Roles allowed to upload (Admin and Test Lead)
            'view' => [1, 2, 3, 4], // Roles allowed to view
            'modify' => [1], // Only Admin can modify
        ]);

        Phase::create([
            'name' => 'Schematics',
            'description' => 'Develop detailed schematics.',
            'comment' => [1, 3],
            'upload' => [1, 2],
            'view' => [1, 2, 3, 4],
            'modify' => [1],
        ]);

        Phase::create([
            'name' => 'Schematic1',
            'description' => 'Develop detailed schematics.',
            'comment' => [1, 3],
            'upload' => [1, 2],
            'view' => [1, 2, 3, 4],
            'modify' => [1],
        ]);
    }
}
