<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create([
            'name' => 'Behzad Dadashpour',
            'password' => bcrypt('123456'),
            'email' => 'dadashpour.behzad@gmail.com'
        ]);
        \App\Models\User::factory(10)->create();
    }
}
