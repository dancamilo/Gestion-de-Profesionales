<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    use HasFactory;

    public function profesionals()
    {
        return $this->hasMany(Profesional::class,'id');
    }
}
