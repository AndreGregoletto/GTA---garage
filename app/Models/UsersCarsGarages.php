<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCarsGarages extends Model
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

    public function cars()
    {
        return $this->hasMany(Car::class, 'id', 'user_car_id');
    }

    public function garages()
    {
        return $this->hasMany(Garage::class, 'id', 'user_garage_id');
    }
}
