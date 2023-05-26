<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    public function Areas()
    {
        return $this->hasMany(Areas::class,'id');
    }

    public function Profiles()
    {
        return $this->belongsTo(Profiles::class,'id_profiles');
    }
    public function profesionals()
    {
        return $this->belongsTo(profesionals::class,'id_profesionals');
    }
    
}
