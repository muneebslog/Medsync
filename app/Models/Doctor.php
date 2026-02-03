<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $casts = [
        'days' => 'array',
        'is_on_payroll' => 'boolean',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_prices')
            ->withPivot('total_price', 'doctor_percentage', 'hospital_percentage')
            ->withTimestamps();
    }
}
