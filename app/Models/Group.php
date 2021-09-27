<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function artis(){
        return $this->hasMany(Artist::class);
    }

    public function units(){
        return $this->hasMany(Unit::class);
    }

    public function music(){
        return $this->hasMany(Music::class);
    }

    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
