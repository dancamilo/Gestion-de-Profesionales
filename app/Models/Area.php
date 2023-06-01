<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function Area()
    {
        return $this->hasMany(Area::class,'id');
    }

    public function Profile()
    {
        return $this->belongsTo(Profile::class,'id_profiles');
    }
    public function profesional()
    {
        return $this->belongsTo(Profesional::class,'id_profesionals');
    }
    
}
