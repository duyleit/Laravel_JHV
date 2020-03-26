<?php

use Illuminate\Database\Seeder;

class DeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr=[
            'code' =>'WIP',
            'name' => 'Kiểm Hàng'
        ];
        DB::table('department')->insert(
           $arr
        );

//        DB::table('department')->insert([
//            'code' => 'GA',
//            'name' => 'Tổng Vụ|一般事情|General Affair'
//        ]);
//
//        DB::table('department')->insert([
//            'code' => 'HR',
//            'name' => 'Nhân Sự|人力资源|Human Resource'
//        ]);
//
//        DB::table('department')->insert([
//            'code' => 'IN',
//            'name' => 'Y tế|医务室|Infirmary'
//        ]);
//
//        DB::table('department')->insert([
//            'code' => 'IT',
//            'name' => 'CNTT|信息技术|IT'
//        ]);
    }
}
