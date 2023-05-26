<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifications extends Model
{
    use HasFactory;

    public function Certifications()
    {
        return $this->hasMany(Certifications::class,'id');
    }
    
    public function courses()
    {
        return $this->belongsTo(courses::class,'id_courses');
    }
}
