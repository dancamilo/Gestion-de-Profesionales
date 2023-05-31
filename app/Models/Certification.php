<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    public function certifications()
    {
        return $this->hasMany(Certification::class,'id');
    }
    
    public function courses()
    {
        return $this->belongsTo(Course::class,'id_courses');
    }
}
