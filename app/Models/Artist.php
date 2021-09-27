<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function units(){
        return $this->belongsToMany(Unit::class);
    }
}