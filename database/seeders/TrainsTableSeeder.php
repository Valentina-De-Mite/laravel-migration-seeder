<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trains;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $trains = [
            
        ];

    foreach ($trains as $train)
        {
            $newTrain = new Trains ();
            $newTrain->company = $train['company'];
            $newTrain->d_station = $train['departure_station'];
            $newTrain->a_station = $train['arrival_station'];
            $newTrain->arrival = $train['arrival_time'];
            $newTrain->code = $train['code'];
            $newTrain->carriages = $train['n_carriages'];
            $newTrain->on_schedule = $train['on_schedule'];
            $newTrain->delete = $train['deleted'];

        }

    }
}
