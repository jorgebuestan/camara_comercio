<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin Camara',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ])->assignRole('admin');

        User::create([
            'name' => 'Admin2 Camara',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('admin123')
        ])->assignRole('admin');

        User::create([
            'name' => 'Usuario Camara',
            'email' => 'camara@camara.com',
            'password' => bcrypt('camara123')
        ])->assignRole('camara');
    }
}
