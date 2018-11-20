<?php

use Illuminate\Database\Seeder;
use App\passports;

class passportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* passports::create(
            ['number'=> '123456',
            'number'=> '123457A',
            'number'=> '123457B',
            'number'=> '123457C',
            'number'=> '123458D',
            'number'=> '123459E',
        ]
        );*/
        $Faker = Faker\Factory::create();
        foreach(range(1,5) as $indext)
        {
            passports::create(
                [
                    'number' => $Faker ->creditCardNumber,
                ]
                );
        }
    }
}
