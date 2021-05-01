<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function version()
    {
        return $this->hasMany(Version::class);
    }
}