<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use App\Models\Questao;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Teste $teste)
    {
        $questoes = $teste->questoes;
        return view('questoes.index', compact('questoes', 'teste'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Teste $teste)
    {
        return view('questoes.create', compact('teste'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Teste $teste)
    {
        $request->validate([
            'enunciado' => 'required',
            'resposta_a' => 'required',
            'resposta_b' => 'required',
            'resposta_c' => 'required',
            'resposta_d' => 'required',
            'resposta_e' => 'required',
            'resposta_correta' => 'required',
            'valor_total' => 'required',
        ]);

        $questao = new Questao();
        $questao->enunciado = $request->enunciado;
        $questao->resposta_a = $request->resposta_a;
        $questao->resposta_b = $request->resposta_b;
        $questao->resposta_c = $request->resposta_c;
        $questao->resposta_d = $request->resposta_d;
        $questao->resposta_e = $request->resposta_e;
        $questao->resposta_correta = $request->resposta_correta;
        $questao->valor_total = $request->valor_total;
        $questao->teste_id = $teste->id;
        $questao->save();

        return redirect()->route('testes.index', $teste->id)->with('success', 'Questão criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teste $teste, Questao $questao)
    {
        return view('questoes.show', compact('teste', 'questao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teste $teste, Questao $questao)
    {
        return view('questoes.edit', compact('teste', 'questao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teste $teste, Questao $questao)
    {
        $request->validate([
            'enunciado' => 'required|string',
            'resposta_a' => 'required|string',
            'resposta_b' => 'required|string',
            'resposta_c' => 'required|string',
            'resposta_d' => 'required|string',
            'resposta_e' => 'required|string',
            'resposta_correta' => 'required|string|in:A,B,C,D,E',
            'valor_total' => 'required|numeric',
        ]);
    
        $questao->update([
            'enunciado' => $request->input('enunciado'),
            'resposta_a' => $request->input('resposta_a'),
            'resposta_b' => $request->input('resposta_b'),
            'resposta_c' => $request->input('resposta_c'),
            'resposta_d' => $request->input('resposta_d'),
            'resposta_e' => $request->input('resposta_e'),
            'resposta_correta' => $request->input('resposta_correta'),
            'valor_total' => $request->input('valor_total'),
        ]);
    
        return redirect()->route('questoes.index', $teste)->with('success', 'Questão atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questao $questao)
    {
        $questao->delete();
        return redirect()->route('questoes.index')->with('success', 'Questão excluída com sucesso!');;
    }
}
