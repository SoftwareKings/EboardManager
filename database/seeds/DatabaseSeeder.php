<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'William Martin', 'email' => 'supervenus0204@gmail.com', 'password' => 'asd']
        ]);
    }
}
