<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@boss.com',
            'role' => 'admin',
            'password' => '12345678'
        ]);
        User::factory()->create([
            'name' => 'man User',
            'email' => 'man@boss.com',
            'role' => 'editor',
            'password' => '12345678'
        ]);
        User::factory()->create([
            'name' => 'woman User',
            'email' => 'woman@boss.com',
            'role' => 'editor',
            'password' => '12345678'
        ]);
    }
}
