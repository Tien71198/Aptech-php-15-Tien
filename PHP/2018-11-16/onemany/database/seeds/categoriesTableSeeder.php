<?php

use Illuminate\Database\Seeder;
use App\categories;
class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,3) as $index)
        {
           App\categories::create(
                [                   
                   'name' => $faker->name,
                ]
            );
    }
}
}