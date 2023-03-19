<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface 
{
    public function getAllOrders() 
    {
        return Order::all();
    }

    public function getOrderById($orderId) 
    {
        return Order::findOrFail($orderId);
    }

    public function getOrderByVehicleId($vehicleId) 
    {
        return Order::where('orderItems.vehicle_id', $vehicleId)->get();
    }
}