<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function Course()
    {
        return $this->hasMany(Course::class,'id');
    }

    public function profesionals()
    {
        return $this->belongsTo(Profesionals::class,'id_profesionals');
    }

    public function companies()
    {
        return $this->belongsTo(Companies::class,'id_companies');
    }
    public function areas()
    {
        return $this->belongsTo(areas::class,'id_areas');
    }
    
}

