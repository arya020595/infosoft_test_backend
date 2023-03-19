<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Car;
use App\Models\Vehicle;
use App\Models\OrderItems;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::all();
        
        foreach ($customers as $customer) {
            $vehicles = Vehicle::All()->take(rand(1,3));
            $order = new Order;
            $order->order_status = 'paid';
            $order->customer()->associate($customer);
            
            foreach ($vehicles as $vehicle) {
                $quantity = rand(1,3);
                $OrderItems = new OrderItems;
                $OrderItems->vehicle()->associate($vehicle);
                $OrderItems->vehicle_name = $vehicle->vehicleable->name;
                $OrderItems->quantity = $quantity;
                $OrderItems->unit_price = $vehicle->price;
                $OrderItems->total_price = ($vehicle->price * $quantity);
                $order->orderItems()->associate($OrderItems);
            }
            
            $order->save();
        }
    }
}