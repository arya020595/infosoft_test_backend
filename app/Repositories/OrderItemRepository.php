<?php

namespace App\Repositories;

use App\Interfaces\OrderItemRepositoryInterface;
use App\Models\OrderItems;

class OrderItemRepository implements OrderItemRepositoryInterface 
{
    public function getAllOrderItems() 
    {
        return OrderItems::all();
    }

    public function getOrderItemById($orderItemId) 
    {
        return OrderItems::findOrFail($orderItemId);
    }

    public function getOrderItemByVehicleId($vehicleId) 
    {
        return OrderItems::where('vehicle_id', $vehicleId)->get();
    }
}