<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'id',
        'nome',
    ];

    public function user() {
        return $this->hasMany(User::class, 'categoria_id', 'id');
    }

    use HasFactory;
}
