<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder {

    public function run() {
//        $faker = Factory::create();
        $createtole = [
            'Admin',
            'Users'
        ];


        foreach ($createtole as $roles) {
            Role::create(['name' => $roles]);
        }
        $role = Role::create(['name' => 'SuperAdmin']);
        $permission = Permission::all();
        $role->givePermissionTo($permission);

        $user = new User();
        $user->full_name = 'Adike Kizito';
        $user->description = 'Am a Software Dev';
        $user->location = 'Enugu';
        $user->status_id = 1;
        $user->email = "admin@naijacrawl.com";
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('secret');
        $user->save();
        $user->assignRole($role);
    }

}
