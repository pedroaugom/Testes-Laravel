<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;

    protected $table = 'testes';

    protected $fillable = ['nome', 'pontuacao_minima', 'user_id'];

    public function questoes()
    {
        return $this->hasMany(Questao::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
