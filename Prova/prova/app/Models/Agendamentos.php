<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    use HasFactory;


    protected $fillable = ['pessoa_id','coleta_id', 'data'];

    public function coletas(){
        return $this->belongsTo(Coletas::class);
    }

    public function pessoas(){
        return $this->belongsTo(Pessoas::class);
    }
}
