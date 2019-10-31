<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'role-add',
            'user-create',
            'user-edit',
            'user-delete',
            'post-create',
            'post-list',
            'post-edit',
            'post-delete',
            'post-review'
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }
    }

}
