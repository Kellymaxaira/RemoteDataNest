<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $fillable = [
        'altitude',
        'longitude',
        'temperature',
        'humidity',
        'device_id'
    ];

    public function device()
    {
       return $this->belongsTo(Device::class);
    }
}
