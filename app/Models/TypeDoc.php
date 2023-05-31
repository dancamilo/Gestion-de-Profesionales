<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDoc extends Model
{
    use HasFactory;
    protected $table="type_docs";

    public function typeDocs()
    {
        return $this->hasMany(TypeDoc::class,'id');
    }
}
