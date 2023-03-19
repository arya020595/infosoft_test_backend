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
            $order->save();
            
            foreach ($vehicles as $vehicle) {
                $quantity = rand(1,3);
                $OrderItems = new OrderItems;
                $OrderItems->vehicle()->associate($vehicle);
                $OrderItems->vehicle_name = $vehicle->vehicleable->name;
                $OrderItems->quantity = $quantity;
                $OrderItems->unit_price = $vehicle->price;
                $OrderItems->total_price = ($vehicle->price * $quantity);
                $OrderItems->save();
                $order->orderItems()->save($OrderItems);
            }


            $sum = array_reduce($order->orderItems->toArray(), function($carry, $item) {
                return $carry + $item['total_price'];
            });

            $order->total_amount = $sum;

            $order->save();
        }
    }
}