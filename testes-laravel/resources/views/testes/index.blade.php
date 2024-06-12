@extends('home')

@section('testes')
    <div class="mt-4">
        <a href="{{ route('testes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ __('Criar Teste') }}
        </a>
    </div>
    @if(isset($testes) && count($testes) > 0)
        <br>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Pontuação mínima</th>
                    <th>Criado por</th>
                    <th style="padding-left: 20px;">Adicionar Questão</th>
                    <th>Visualizar Questões</th>
                    <th>Editar</th>
                    <th style="padding-left: 20px;">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testes as $teste)
                    <tr>
                        <td>{{ $teste->nome }}</td>
                        <td>{{ $teste->pontuacao_minima }}</td>
                        <td>{{ $teste->user->name }}</td>
                        <td style="padding-left: 20px;">
                            <a href="{{ route('questoes.create', $teste) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Adicionar Questão') }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('questoes.index', $teste) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Visualizar') }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('testes.edit', $teste) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Editar') }}
                            </a>
                        </td>
                        <td style="padding-left: 20px;">
                            <form action="{{ route('testes.destroy', $teste) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1.5 px-5 rounded w-full">
                                    {{ __('Excluir') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <br>
        <p>Nenhum teste criado.</p>
    @endif
@endsection
