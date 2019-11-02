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
        $user->email = "admin@wiki.com";
        $user->email_verified_at = Carbon::now();
        $user->password = bcrypt('secret');
        $user->save();
        $user->assignRole($role);
        $role2 = Role::whereName('Admin')->first();
        $user2 = new User();
        $user2->full_name = 'Adike Kizito';
        $user2->description = 'Am a Software Dev';
        $user2->location = 'Enugu';
        $user2->status_id = 1;
        $user2->email = "admin@wiki2.com";
        $user2->email_verified_at = Carbon::now();
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->assignRole($role2);

        $user3 = new User();
        $user3->full_name = 'Adelugba Emmanuel';
        $user3->description = 'Web Developer';
        $user3->location = 'Ibadan, Nigeria';
        $user3->status_id = 1;
        $user3->email = "bringforthjoy@gmail.com";
        $user3->email_verified_at = Carbon::now();
        $user3->password = bcrypt('000000');
        $user3->save();
        $user3->assignRole($role);
        $user4 = new User();
        $user4->full_name = 'Adelugba Emmanuel';
        $user4->description = 'Web Developer';
        $user4->location = 'Ibadan, Nigeria';
        $user4->status_id = 1;
        $user4->email = "adelugba.emma@gmail.com";
        $user4->email_verified_at = Carbon::now();
        $user4->password = bcrypt('000000');
        $user4->save();
        $user4->assignRole($role2);
        
    }

}
