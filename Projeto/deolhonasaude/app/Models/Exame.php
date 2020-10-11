<?php

namespace App\Models;

use App\Models\Pasta;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pasta_id',
        'data',
        'resultado',
        'observacoes'
    ];

    public function pasta(){
        return $this->belongsTo(Pasta::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
