<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCars extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function cars()
    {
        return $this->hasMany(Car::class, 'id', 'car_id');
    }
}
