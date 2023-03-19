<?php

namespace App\Interfaces;

interface OrderRepositoryInterface 
{
    public function getAllOrders();
    public function getOrderById($orderId);
    public function getOrderByVehicleId($vehicleId);
}