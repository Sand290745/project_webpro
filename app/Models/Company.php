<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['id','logo','name','other_name','founded','founder','location','description'];

    public function groups(){
        return $this->hasMany(Group::class);
    }
}
