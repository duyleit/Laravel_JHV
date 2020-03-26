<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'code' => 'I13042',
            'pass' => '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.',
            'fullname'  =>'Lê Duy',
            'role_code'  => 'ADM',
            'com_code' =>'JHV',
            'dept_code' =>'IT',
            'email'  => 'Duy.Le@jiahsin.com.vn',
            'phone_extend'  => '1159',
            'status'  => '1'
        ]);

        DB::table('user')->insert([
            'code' => 'I12758',
            'pass' => '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.',
            'fullname'  =>'John Nguyễn',
            'role_code'  => 'ADM',
            'com_code' =>'JHV',
            'dept_code' =>'IT',
            'email'  => 'PhucNguyen.Pham@jiahsin.com.vn',
            'phone_extend'  => '1159',
            'status'  => '1'
        ]);

        DB::table('user')->insert([
            'code' => 'steven',
            'pass' => '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.',
            'fullname'  =>'Steven Chang',
            'role_code'  => 'ADM',
            'com_code' =>'JHV',
            'dept_code' =>'IT',
            'email'  => 'steven.chang@jiahsin.com.vn',
            'phone_extend'  => '1159',
            'status'  => '1'
        ]);

        DB::table('user')->insert([
            'code' => 'user_test',
            'pass' => '$2y$10$gp1HRb0EPk5T3ygYsdplseXAcuak1n3Y/xfLvDHwPJvN5tqgGibZm',
            'fullname'  =>'Test',
            'role_code'  => 'ADM',
            'com_code' =>'JHV',
            'dept_code' =>'IT',
            'email'  => 'Test@jiahsin.com.vn',
            'phone_extend'  => '1159',
            'status'  => '1'
        ]);


    }
}
