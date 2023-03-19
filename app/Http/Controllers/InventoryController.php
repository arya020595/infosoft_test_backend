<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\InventoryService;

class InventoryController extends Controller
{
    private $InventoryService;

    public function __construct(InventoryService $InventoryService) 
    {
        $this->InventoryService = $InventoryService;
    }

    public function index() 
    {
        return response()->json([
            'data' => $this->InventoryService->getAllInventories()
        ]);
    }
}