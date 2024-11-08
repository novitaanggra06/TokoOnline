<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'nama' => 'Administrator',
            'email' => 'Admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '088123456789',
            'password' => bcrypt('p@55word'),
        ]);

        User::factory()->create([
            'nama' => 'Novita Anggraini',
            'email' => 'Novita@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '088223456789',
            'password' => bcrypt('p@55word'),
        ]);
    }
}
