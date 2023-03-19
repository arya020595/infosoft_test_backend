<?php

namespace App\Services;

use App\Interfaces\OrderRepositoryInterface;

class OrderService
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository) 
    {
        $this->orderRepository = $orderRepository;
    }

    public function getAllOrders() 
    {
        return $this->orderRepository->getAllOrders();
    }

    public function getOrderById($orderId) 
    {
        return $this->orderRepository->getOrderById($orderId);
    }
}