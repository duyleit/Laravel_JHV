<?php

use Illuminate\Database\Seeder;
use App\posts;
use Illuminate\Database\Eloquent\Model;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //   $faker=Faker\Factory::create();
        $faker=Faker\Factory::create();

        for($i=0;$i<10;++$i)
        {
            posts::create([
               'title' => $faker->sentence,
                'content' => implode('',$faker->sentences(4))
            ]);
        }

    }
}
