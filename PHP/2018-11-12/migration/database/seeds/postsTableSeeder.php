<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;
//use Illuminate\Database\factories;
use App\Posts;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $factory->define(App\User::class, function (Faker $faker) use ($factory){
           // return [
       $Faker = Faker\Factory::create();
        
            for($i = 0; $i<10; $i++)
            {
                Posts::create([
                'title' => $Faker ->title,
                'decription' => $Faker ->name,
                'content' => $Faker ->name,
                'id_ct' =>  rand(1,5),
                ]);
            }
        
    }
}
