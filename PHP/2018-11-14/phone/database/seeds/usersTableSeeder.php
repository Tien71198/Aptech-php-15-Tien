<?php

use Illuminate\Database\Seeder;
use App\users;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,10) as $index)
        {
            users::create(
                [
                    'name' => $faker->name,
                ]
                );
        }
    }
}
