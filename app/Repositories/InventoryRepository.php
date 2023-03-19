<?php

namespace App\Repositories;

use App\Interfaces\InventoryRepositoryInterface;
use App\Models\Inventory;

class InventoryRepository implements InventoryRepositoryInterface 
{
    public function getAllInventories() 
    {
        return Inventory::all();
    }

    public function getInventoryById($orderId) 
    {
        return Inventory::findOrFail($orderId);
    }
}