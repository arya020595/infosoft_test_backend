<?php

namespace App\Services;

use App\Interfaces\OrderItemRepositoryInterface;

class OrderItemService
{
    private $orderItemRepository;

    public function __construct(OrderItemRepositoryInterface $orderItemRepository) 
    {
        $this->orderItemRepository = $orderItemRepository;
    }

    public function getAllOrderItems() 
    {
        return $this->orderItemRepository->getAllOrderItems();
    }

    public function getOrderItemById($orderItemId) 
    {
        return $this->orderItemRepository->getOrderItemById($orderItemId);
    }

    public function getOrderItemByVehicleId($vehicleId) 
    {
        return $this->orderItemRepository->getOrderItemByVehicleId($vehicleId);
    }
}