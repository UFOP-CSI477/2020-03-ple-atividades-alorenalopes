<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $fillable = ['produto_id'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoas::class);
    }
}
