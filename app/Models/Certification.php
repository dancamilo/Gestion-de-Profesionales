<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    public function Certification()
    {
        return $this->hasMany(Certification::class,'id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class,'id_courses');
    }
}
