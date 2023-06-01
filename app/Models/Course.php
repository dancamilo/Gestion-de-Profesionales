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

    public function profesional()
    {
        return $this->belongsTo(Profesional::class,'id_profesionals');
    }

    public function company()
    {
        return $this->belongsTo(Company::class,'id_companies');
    }
    public function area()
    {
        return $this->belongsTo(Area::class,'id_areas');
    }
    
}

