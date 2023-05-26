<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    public function profesionals()
    {
        return $this->belongsTo(Profesionals::class,'id_profesionals');
    }

    public function areas()
    {
        return $this->belongsTo(Areas::class,'id_areas');
    }
    
}
