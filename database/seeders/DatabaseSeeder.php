<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role_id' => 1,
        ]);

        User::factory()->create([
            'name' => 'Perusahaan',
            'email' => 'perusahaan@example.com',
            'password' => Hash::make('perusahaan'),
            'role_id' => 2,
        ]);

        User::factory()->create([
            'name' => 'Pekerja',
            'email' => 'pekerja@example.com',
            'password' => Hash::make('pekerja'),
            'role_id' => 3,
        ]);
    }
}
