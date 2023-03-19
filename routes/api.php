<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'authenticate']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::resource('inventories', InventoryController::class)->only([
        'index', 'show'
    ]);
    
    Route::resource('orders', OrderController::class)->only([
        'index', 'show'
    ]);
    
    Route::resource('orderItems', OrderItemController::class)->only([
        'index', 'show'
    ]);

    Route::get('orderItems/vehicle/{id}', [OrderItemController::class, 'getOrderItemByVehicleId']);
});