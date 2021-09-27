<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function music(){
        return $this->hasMany(Music::class);
    }

    public function artists(){
        return $this->belongsToMany(Artist::class,'units_has_artists');
    }
}
