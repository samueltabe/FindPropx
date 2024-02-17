<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function house()
    {
        return $this ->belongsToMany(House::class);
    }

    // public function houses()
    // {
    //     return $this->belongsToMany(House::class, 'house_feature', 'feature_id', 'house_id');
    // }


}
