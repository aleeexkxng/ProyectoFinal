<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','nombre_hash','mime'];
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
