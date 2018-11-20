<?php

use Illuminate\Database\Seeder;
use App\posts;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categories = App\categories::pluck('id')->toArray();
        foreach($categories as $key=>$value)
        {
            App\posts::create(
                [
                    'title' => $faker->name,
                    'description' => $faker->paragraph,
                    'content' => $faker->randomHtml(),
                    'ct_id' => $categories[array_rand($categories)],
                ]
            );
        }
    }
}
