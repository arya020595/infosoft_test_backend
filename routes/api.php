<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
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

Route::resource('posts', PostController::class)->only([
   'destroy', 'show', 'store', 'update'
]);

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'authenticate']);
Route::get('open', [DataController::class, 'open']);

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

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', [UserController::class, 'getAuthenticatedUser']);
    Route::get('closed', [DataController::class, 'closed']);
});