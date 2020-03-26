<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('company')->insert([
            'code'  => 'JHV',
            'name'  => 'Jiahsin'
        ]);

        DB::table('company')->insert([
            'code'  => 'SHM',
            'name'  => 'Shimmer'
        ]);
    }
}
