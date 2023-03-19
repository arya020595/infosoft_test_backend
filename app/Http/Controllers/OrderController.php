<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\OrderService;

class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderService) 
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->orderService->getAllOrders()
        ]);
    }

    public function show(string $orderId)
    {
        return response()->json([
            'data' => $this->orderService->getOrderById($orderId)
        ]);
    }

    public function getOrderByVehicleId(string $vehicleId)
    {
        return response()->json([
            'data' => $this->orderService->getOrderByVehicleId($vehicleId)
        ]);
    }
}
