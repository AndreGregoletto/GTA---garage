<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarageCars extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_car_id',
        'user_garage_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function userCars()
    {
        return $this->hasMany(UserCars::class, 'car_id', 'user_car_id');
    }

    public function userGarages()
    {
        return $this->hasMany(UserGarage::class, 'garage_id', 'user_garage_id');
    }
}
