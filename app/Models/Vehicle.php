<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['year_issued', 'colour', 'price'];

    public function vehicleable()
    {
        return $this->morphTo();
    }

    public function storages()
    {
        return $this->hasMany(Storage::class);
    }
}