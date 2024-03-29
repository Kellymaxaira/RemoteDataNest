<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';
    protected $fillable = [
        'name',
        'type',
        'descrition'
    ];

    public function data()
    {
        return $this->hasMany(Data::class);
    }
}
