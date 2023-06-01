<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function Work()
    {
        return $this->hasMany(Work::class,'id');
    }

    public function profesional()
    {
        return $this->belongsTo(Profesional::class,'id_profesionlas');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'id_companies');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'id_courses');
    }
}
