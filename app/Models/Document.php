<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    use HasFactory;

    public function TypeDoc()
    {
        return $this->belongsTo(TypeDoc::class,'id_typedocs');
    }
    public function profesional()
    {
        return $this->belongsTo(Profesional::class,'id_profesionals');
    }
}
