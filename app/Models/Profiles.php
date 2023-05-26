<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;
    
    public function Profiles()
    {
        return $this->hasMany(Profiles::class,'id');
    }
}
