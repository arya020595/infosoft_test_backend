<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\OrderItemService;

class OrderItemController extends Controller
{
    private $orderItemService;

    public function __construct(OrderItemService $orderItemService) 
    {
        $this->orderItemService = $orderItemService;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->orderItemService->getAllOrderItems()
        ]);
    }

    public function show(string $orderItemId)
    {
        return response()->json([
            'data' => $this->orderItemService->getOrderItemById($orderItemId)
        ]);
    }

    public function getOrderItemByVehicleId(string $vehicleId)
    {
        return response()->json([
            'data' => $this->orderItemService->getOrderItemByVehicleId($vehicleId)
        ]);
    }
}
