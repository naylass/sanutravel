<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'can_choose_time',
    ];

    // Logika otomatis: jika type = eksklusif, maka can_choose_time = true
    protected static function booted()
    {
        static::saving(function ($service) {
            $service->can_choose_time = $service->type === 'eksklusif';
        });
    }
}