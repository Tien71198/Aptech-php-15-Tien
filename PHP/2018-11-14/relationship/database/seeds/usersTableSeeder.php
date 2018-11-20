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
        $Faker = Faker\Factory::create();
        $passports = App\passports::pluck('id');
        foreach($passports as $key => $value)
        {
            App\users::create(
                [
                    'name' => $Faker->name,
                    'passport_id' => $value,
                ]
                );
        }
    }
}
