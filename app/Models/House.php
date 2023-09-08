<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    //     public function users()
    // {
    //     return $this->belongsTo(User::class)?? 'Default Value';
    // }


    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function states()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function lgas()
    {
        return $this->belongsTo(Lga::class, 'lga_id', 'id');
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }


}
