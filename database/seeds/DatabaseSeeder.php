<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('user_priviledges')->insert([
            ['priviledge_name'=>'Users',
              'created_at'=>date('Y-m-d h:i:s'),
              'updated_at'=>date('Y-m-d h:i:s')
            ],

            ['priviledge_name'=>'Admin',
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s')
             ],

            ['priviledge_name'=>'Super Admin',
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s')
            ]
        ]);

        DB::table('user_statuses')->insert([
            ['status_name'=>'active',
              'created_at'=>date('Y-m-d h:i:s'),
              'updated_at'=>date('Y-m-d h:i:s')
            ],

            ['status_name'=>'blocked',
            'created_at'=>date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s')
            ]
        ]);
    }
}
