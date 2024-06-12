<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    use HasFactory;

    protected $table = 'questoes';

    protected $fillable = [
        'enunciado', 'resposta_a', 'resposta_b', 'resposta_c', 
        'resposta_d', 'resposta_e', 'resposta_correta', 'valor_total', 'teste_id'
    ];

    public function teste()
    {
        return $this->belongsTo(Teste::class);
    }
}
