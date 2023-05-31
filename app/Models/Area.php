<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function areas()
    {
        return $this->hasMany(Area::class,'id');
    }

    public function profiles()
    {
        return $this->belongsTo(Profile::class,'id_profiles');
    }
    public function profesionals()
    {
        return $this->belongsTo(Profesional::class,'id_profesionals');
    }
    
}
