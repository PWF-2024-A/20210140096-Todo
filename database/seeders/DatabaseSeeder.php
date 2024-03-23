<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
        ]);
        User::factory()->create([

            'name' => 'Maula Ghani',
            'email' => 'ghaniaufa@gmail.com',
            'is_admin' => false,
        ]);
        User::factory(100)->create();
        Todo::factory(100)->create();
    }
}
