<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Brand extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function vehicles()
    {
        return $this->hasOne(Brand::class, 'vehicle_id', 'id');
    }
}
