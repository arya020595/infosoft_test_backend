<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'engine', 'capacity', 'type'];
    
    public function vehicle()
    {
        return $this->morphOne(Vehicle::class, 'vehicleable');
    }
}