<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDocs extends Model
{
    use HasFactory;
    protected $table="type_docs";

    public function TypeDocs()
    {
        return $this->hasMany(TypeDocs::class,'id');
    }
}
