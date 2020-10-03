<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    use HasFactory;

    protected $fillable = ['nome','tipo'];

    public function agendamento(){
        return $this->hasMany(Agendamentos::class);
    }
}
