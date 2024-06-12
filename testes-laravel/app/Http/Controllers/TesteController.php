<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testes = auth()->user()->testes; // Exibir somente testes criados pelo usuário
        return view('testes.index', compact('testes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'pontuacao_minima' => 'required|numeric',
        ]);

        $teste = new Teste();
        $teste->nome = $request->nome;
        $teste->pontuacao_minima = $request->pontuacao_minima;
        $teste->user_id = auth()->user()->id; // Associar o teste ao usuário atual
        $teste->save();

        return redirect()->route('testes.index')->with('success', 'Teste criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teste $teste)
    {
        if ($teste->user_id != auth()->user()->id) {
            abort(403, 'Você não tem permissão para acessar este teste.'); // Verificar se o usuário tem permissão para acessar o teste
        }
        return view('testes.show', compact('teste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teste $teste)
    {
        if ($teste->user_id!= auth()->user()->id) {
            abort(403, 'Você não tem permissão para editar este teste.'); // Verificar se o usuário tem permissão para editar o teste
        }
        return view('testes.edit', compact('teste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teste $teste)
    {
        if ($teste->user_id!= auth()->user()->id) {
            abort(403, 'Você não tem permissão para editar este teste.'); // Verificar se o usuário tem permissão para editar o teste
        }
        $request->validate([
            'nome' => 'required',
            'pontuacao_minima' => 'required|numeric',
        ]);

        $teste->nome = $request->nome;
        $teste->pontuacao_minima = $request->pontuacao_minima;
        $teste->save();

        return redirect()->route('testes.index')->with('success', 'Teste atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teste $teste)
    {
        if ($teste->user_id!= auth()->user()->id) {
            abort(403, 'Você não tem permissão para excluir este teste.'); // Verificar se o usuário tem permissão para excluir o teste
        }
        $teste->delete();
        return redirect()->route('testes.index')->with('success', 'Teste excluído com sucesso!');
    }
}
