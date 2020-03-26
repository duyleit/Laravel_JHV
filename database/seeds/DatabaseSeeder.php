<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DeptTableSeeder::class);
        $this->call(RoleTableSeeder::class);
//        DB::table('users')->insert([
//            'id' => 3,
//            'username' => 'user',
//            'password' => bcrypt('user@'),
//            'remember_token' => '',
//        ]);

    }
}
