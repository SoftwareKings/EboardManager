<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role_name' => 'Admin', 'description' => 'Has full access to the system']);
        Role::create(['role_name' => 'Designer', 'description' => 'Handles the design of electronics']);
        Role::create(['role_name' => 'Supplier', 'description' => 'Supplies components and materials']);
        Role::create(['role_name' => 'Test Lead', 'description' => 'Responsible for testing and quality assurance']);
        Role::create(['role_name' => 'Project Coordinator', 'description' => 'Coordinates the project workflow']);
    }
}
