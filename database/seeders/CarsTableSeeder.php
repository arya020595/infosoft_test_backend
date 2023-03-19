<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = Car::create(['name' => 'Mitsubishi', 'engine' => 'V-Engine Layout', 'capacity' => '4', 'type' => 'Sedan']);
        $car->vehicle()->create(['year_issued' => '2010', 'colour' => 'white', 'price' => '450000000']);

        $car = Car::create(['name' => 'Ferarri', 'engine' => '3l v6', 'capacity' => '2', 'type' => 'Sedan']);
        $car->vehicle()->create(['year_issued' => '2014', 'colour' => 'red', 'price' => '100000000']);

        $car = Car::create(['name' => 'Mercedes', 'engine' => 'c200', 'capacity' => '4', 'type' => 'Sedan']);
        $car->vehicle()->create(['year_issued' => '2015', 'colour' => 'white', 'price' => '550000000']);

        $car = Car::create(['name' => 'Bmw 218i', 'engine' => 'front-wheel-drive (FWD)', 'capacity' => '4', 'type' => 'Sedan']);
        $car->vehicle()->create(['year_issued' => '2018', 'colour' => 'blue', 'price' => '1050000000']);

        $car = Car::create(['name' => 'Bmw 330i', 'engine' => 'rear-wheel-drive (RWD)', 'capacity' => '4', 'type' => 'Sedan']);
        $car->vehicle()->create(['year_issued' => '2015', 'colour' => 'white', 'price' => '2055000000']);
    }
}
