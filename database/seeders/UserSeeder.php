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
        //creamos un rol  admin
        $admin = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12345678'),
        ]);
        $admin->assignRole('admin');

        // Crear usuario
        $user = User::factory()->create([
            'name' => 'Co-Admin',
            'email' => 'co-admin@gmail.com',
            'password' => bcrypt('co-admin12345678'),
        ]);
        $user->assignRole('co-admin');
    }
}
