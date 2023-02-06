<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parking',
        'status'
    ];

    public function car()
    {
        return $this->hasMany('garage_id', 'id');
    }

    public function garagesPivot()
    {
        return $this->hasMany(UserCarGarage::class, 'garage_id', 'id');
    }
}
