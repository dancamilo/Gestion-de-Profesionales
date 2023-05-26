<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesionals extends Model
{
    use HasFactory;

    public function Profesionals()
    {
        return $this->hasMany(Profesionals::class,'id');
    }
}
