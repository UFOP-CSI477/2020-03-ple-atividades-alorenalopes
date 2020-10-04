<?php

namespace App\Models;
use App\Models\Agendamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['nome','tipo'];

    public function agendamento(){
        return $this->hasMany(Agendamento::class);
    }

}
