<?php

namespace App\Interfaces;

interface InventoryRepositoryInterface 
{
    public function getAllInventories();
    public function getInventoryById($orderId);
}