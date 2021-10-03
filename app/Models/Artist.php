<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','birthday','position','zodiac','weight','height','blood_type','instagram','ideal','photo','group_id'];

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function units(){
        return $this->belongsToMany(Unit::class,'units_has_artists');
    }
}
