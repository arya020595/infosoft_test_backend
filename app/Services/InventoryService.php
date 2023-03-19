<?php

namespace App\Services;

use App\Interfaces\InventoryRepositoryInterface;

class InventoryService
{
    private $orderRepository;

    public function __construct(InventoryRepositoryInterface $orderRepository) 
    {
        $this->orderRepository = $orderRepository;
    }

    public function getAllInventories() 
    {
        return $this->orderRepository->getAllInventories();
    }
}