<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    use HasFactory;

    public function Works()
    {
        return $this->hasMany(Works::class,'id');
    }

    public function profesionlas()
    {
        return $this->belongsTo(profesionlas::class,'id_profesionlas');
    }
    public function companies()
    {
        return $this->belongsTo(companies::class,'id_companies');
    }
    public function courses()
    {
        return $this->belongsTo(courses::class,'id_courses');
    }
}
