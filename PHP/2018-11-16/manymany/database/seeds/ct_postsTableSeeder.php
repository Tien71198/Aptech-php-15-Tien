<?php

use Illuminate\Database\Seeder;

class ct_postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $ct_posts = App\ct_posts::pluck('id')->toArray();
       // $categories = App\categories::pluck('id')->toArray();
        //$posts = App\posts::pluck('id')->toArray();
       
    }
}
