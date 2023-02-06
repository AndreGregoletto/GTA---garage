<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGarage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'garage_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function garages()
    {
        return $this->hasMany(Garage::class, 'id', 'garage_id');
    }
}
