<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderItems()
    {
        return $this->embedsMany(OrderItems::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
