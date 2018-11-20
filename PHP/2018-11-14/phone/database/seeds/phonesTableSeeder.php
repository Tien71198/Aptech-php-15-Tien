<?php

use Illuminate\Database\Seeder;
use App\phones;

class phonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker  = Faker\Factory::create();
        $users = App\users::pluck('id');
        foreach($users as $key => $value)
        {
           App\phones::create(
                [                   
                    'number' => $faker->phoneNumber,
                    'user_id' => $value,
                ]
            );

    }

    }
}
