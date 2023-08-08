<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseFeature extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function features()

    {
        return $this->belongsTo(House::class);
    }
}
