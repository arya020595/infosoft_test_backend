<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $guard = [];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}