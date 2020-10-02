<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sigla']; #permite ser adiciondo no bd
    # protected $guarded = ['admin']; #não permite ser adicionado no bd

    // 1 estado tem muitas cidades
    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }
}
