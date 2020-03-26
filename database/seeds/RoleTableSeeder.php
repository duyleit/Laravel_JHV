<?php

use Illuminate\Database\Seeder;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->insert([

            'code' => 'TE',
            'name' => 'Test'
        ]);
//        DB::table('role')->insert([
//
//            'code' => 'USR',
//            'name' => 'User'
//        ]);
//        DB::table('role')->insert([
//
//            'code' => 'GST',
//            'name' => 'Guest'
//        ]);
    }
}
