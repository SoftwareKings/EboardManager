<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $default_password = 'P@ssw0rd';
    public function run()
    {
        User::create([
            'name' => 'William Martin',
            'email' => 'supervenus0204@gmail.com',
            'role_id' => 1,
            'password' => Hash::make($this->default_password) // Make sure to hash the password
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'role_id' => 3,
            'password' => Hash::make($this->default_password) // Another user with hashed password
        ]);
    }
}
