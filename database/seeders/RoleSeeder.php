<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $guardName = 'web';
        // -------------------------
        // Creación de Roles
        // -------------------------

        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => $guardName]);
        $user  = Role::firstOrCreate(['name' => 'user', 'guard_name' => $guardName]);

        // -------------------------
        // Creación de Permirsos
        // -------------------------

        $editar = Permission::firstOrCreate(['name' => 'editar', 'guard_name' => $guardName]);
        $eliminar = Permission::firstOrCreate(['name' => 'eliminar', 'guard_name' => $guardName]);

        $admin->syncPermissions([$editar, $eliminar]);
    }
}
