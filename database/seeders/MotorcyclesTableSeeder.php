<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motorcycle;

class MotorcyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motorcycle = Motorcycle::create(['name' => 'Honda Revo', 'engine' => 'SOHC', 'suspension_type' => 'Teleskopik', 'transmission_type' => '4 Kecepatan']);
        $motorcycle->vehicle()->create(['year_issued' => '2012', 'colour' => 'black', 'price' => '13000000']);

        $motorcycle = Motorcycle::create(['name' => 'Honda Supra X 125 FI', 'engine' => 'Silinder Tunggal', 'suspension_type' => 'Teleskopik', 'transmission_type' => '4 Speed, Rotary']);
        $motorcycle->vehicle()->create(['year_issued' => '2011', 'colour' => 'black', 'price' => '20000000']);

        $motorcycle = Motorcycle::create(['name' => 'Honda Genio', 'engine' => 'eSP', 'suspension_type' => 'Telescopic', 'transmission_type' => 'Automatic, V-Matic']);
        $motorcycle->vehicle()->create(['year_issued' => '2010', 'colour' => 'white', 'price' => '15000000']);

        $motorcycle = Motorcycle::create(['name' => 'Suzuki Motor GIXXER SF 250', 'engine' => '4-Cycle, 1-Cylinder, Oil-Cooled', 'suspension_type' => 'Telescopic', 'transmission_type' => '6 Speed, MT']);
        $motorcycle->vehicle()->create(['year_issued' => '2015', 'colour' => 'black', 'price' => '50000000']);

        $motorcycle = Motorcycle::create(['name' => 'Suzuki Motor GSX-S150', 'engine' => 'Water-cooled, 4-stroke', 'suspension_type' => 'Telescopic', 'transmission_type' => '6-speed, return']);
        $motorcycle->vehicle()->create(['year_issued' => '2020', 'colour' => 'blue', 'price' => '12000000']);
    }
}
