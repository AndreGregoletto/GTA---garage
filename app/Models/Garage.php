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

}
