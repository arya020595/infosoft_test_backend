<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $fillable = ['vehicle_name', 'quantity', 'unit_price', 'total_price', 'vehicle_id'];
    
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
