<?php

namespace App\Repositories;

use App\Interfaces\InventoryRepositoryInterface;
use App\Models\Inventory;

class InventoryRepository implements InventoryRepositoryInterface 
{
    public function getAllInventories() 
    {
        return Inventory::all()->map(function ($inventory) {
            return $this->format($inventory);
        });
    }

    public function getInventoryById($orderId) 
    {
        $inventory = Inventory::findOrFail($orderId);

        return $this->format($inventory);;
    }

    private function format($inventory) 
    {
        return [
            'id' => $inventory->id,
            'vehicle_name' => $inventory->vehicle->vehicleable->name,
            'year_issued' => $inventory->vehicle->year_issued,
            'colour' => $inventory->vehicle->colour,
            'price' => $inventory->vehicle->price,
            'stock_quantity' => $inventory->stock_quantity,
            'updated_at' => $inventory->updated_at,
            'created_at' => $inventory->created_at,
        ];
    }
}