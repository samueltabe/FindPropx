<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function localGovernments()
    {
      return $this->hasMany('App\Models\Lga', 'state_id',);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public static function findByName($name)
    {
      return Self::where('name', $name)->first();
    }
}
