<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $casts = [
        'is_standalone' => 'boolean',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'service_prices')
            ->withPivot('total_price', 'doctor_percentage', 'hospital_percentage')
            ->withTimestamps();
    }
}
