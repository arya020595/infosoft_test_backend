<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Interfaces\InventoryRepositoryInterface;
use App\Repositories\InventoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(InventoryRepositoryInterface::class, InventoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
