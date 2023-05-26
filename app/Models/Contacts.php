<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    public function Contacts()
    {
        return $this->hasMany(Contacts::class,'id');
    }

    public function companies()
    {
        return $this->belongsTo(companies::class,'id_companies');
    }
}
