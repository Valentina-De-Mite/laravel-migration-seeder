<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trains;
use DateInterval;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void{

        for ($i = 0; $i < 10; $i++)
                {
                    $Train = new Trains ();
                    $Train->company = $faker->company;
                    $Train->departure_station = $faker->city();
                    $Train->arrival_station = $faker->city();
                    $Train->departure_time = $faker->dateTimeBetween();
                    $Train->arrival_time = $faker->dateTimeBetween('-1 hour', '+1 hour');
                    $Train->code = $faker->bothify();
                    $Train->n_carriages = $faker->randomNumber(5, false);
                    $Train->on_schedule = $faker->boolean();
                    $Train->deleted = $faker->boolean();
                    $Train->save();
                }

        
    }

    
}
