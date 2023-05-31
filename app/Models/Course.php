<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function courses()
    {
        return $this->hasMany(Course::class,'id');
    }

    public function profesionals()
    {
        return $this->belongsTo(Profesional::class,'id_profesionals');
    }

    public function companies()
    {
        return $this->belongsTo(Company::class,'id_companies');
    }
    public function areas()
    {
        return $this->belongsTo(Area::class,'id_areas');
    }
    
}

