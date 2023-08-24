<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function typeCount()
    {
        return $this->hasMany(House::class, 'type_id', 'id');
    }
}
