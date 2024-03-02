<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
        $train = new Train();
        $train->company = 'Italo';
        $train->departure_station = 'Palermo';
        $train->arrival_station = 'Torino';
        $train->departure_time = '11:00:00';
        $train->arrival_time = '20:00:00';
        $train->code = 'ABC'.rand(1, 9999);
        $train->carriages_num = 8;
        $train->on_time = false;
        $train->canceled = false;
        $train->save();
        }
    }
}
