<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['id','name','link','group_id','unit_id'];

    use HasFactory;

    public function group(){
        return $this->belongsTo(Group::class);

    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
