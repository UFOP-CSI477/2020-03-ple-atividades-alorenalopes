<?php

namespace App\Models;

use App\Models\Exame;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function exame(){
        return $this->hasMany(Exame::class);
    }
}
