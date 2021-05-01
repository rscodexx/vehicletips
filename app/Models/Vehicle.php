<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Vehicle extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function version()
    {
        return $this->hasMany(Version::class);
    }
}
