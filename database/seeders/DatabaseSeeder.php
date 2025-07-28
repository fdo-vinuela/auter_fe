<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Fe',
            'email' => 'admin@auter.cl',
            'password' => Hash::make('123456789'),
        ]);
        User::factory()->create([
            'name' => 'Fernando Viñuela',
            'email' => 'fvinuela@auter.cl',
            'password' => Hash::make('123456789'),
        ]);
        User::factory()->create([
            'name' => 'Manuel Rojas',
            'email' => 'mrojas@auter.cl',
            'password' => Hash::make('123456789'),
        ]);
        User::factory()->create([
            'name' => 'Ricardo Millacura',
            'email' => 'sproduccion@auter.cl',
            'password' => Hash::make('123456789'),
        ]);
    }
}