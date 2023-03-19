<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;
use App\Models\Vehicle;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $inventory = new Inventory;
            $inventory->stock_quantity = rand(10,100);
            $inventory->vehicle()->associate($vehicle);
            $inventory->save();
        }
    }
}
