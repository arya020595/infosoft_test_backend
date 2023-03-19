<?php

namespace App\Interfaces;

interface OrderItemRepositoryInterface 
{
    public function getAllOrderItems();
    public function getOrderItemById($orderId);
    public function getOrderItemByVehicleId($orderId);
}