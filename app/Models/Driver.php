<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'birth_place',
        'birth_date',
        'gender',
        'address',
        'medical_history',        
        'license_number',
        'photo',
        'status',
    ];
}
