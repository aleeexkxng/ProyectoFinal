<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'id'];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function Temas()
    {
        return $this->belongsToMany(Tema::class);
    }
}
