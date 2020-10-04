<?php

namespace App\Models;
use App\Models\Coleta;
use App\Models\Pessoa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = ['pessoa_id','coleta_id', 'data'];

    public function coleta(){
        return $this->belongsTo(Coleta::class);
    }

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
