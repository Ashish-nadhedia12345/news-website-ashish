<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         \App\Models\User::factory()->create([
           'name' => 'Super Admin',
            'email' => 'admin@localhost.com',
            'role' => 'Admin',
            'password' => '123456'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test1',
             'email' => 'test1@localhost.com',
             'role' => 'Registered',
             'password' => '123456'
         ]);
    }
}
