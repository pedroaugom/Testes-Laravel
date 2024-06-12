@extends('home')

@section('testes')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Questões do Teste: ') }} {{ $teste->nome }}
                    </h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($questoes->isEmpty())
                        <p>{{ __('Nenhuma questão encontrada para este teste.') }}</p>
                    @else
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th style="padding-left: 20px;">{{ __('Enunciado') }}</th>
                                    <th style="padding-left: 20px;">{{ __('Visualizar') }}</th>
                                    <th style="padding-left: 20px;">{{ __('Editar') }}</th>
                                    <th style="padding-left: 20px;">{{ __('Excluir') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questoes as $questao)
                                    <tr>
                                        <td style="padding-left: 20px;">{{ $questao->enunciado }}</td>
                                        <td style="padding-left: 20px;">
                                            <a href="{{ route('questoes.show', [$teste->id, $questao->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                {{ __('Visualizar') }}
                                            </a>
                                        </td>
                                        <td style="padding-left: 20px;">
                                            <a href="{{ route('questoes.edit', [$teste->id, $questao->id]) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                                {{ __('Editar') }}
                                            </a>
                                        </td>
                                        <td style="padding-left: 20px;">
                                            <form action="{{ route('questoes.destroy', [$teste->id, $questao->id]) }}" method="POST">
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
                    @endif
                </div>
            </div>
            <div class="flex items-center justify-center mt-4">
                <a href="{{ route('testes.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Voltar') }}
                </a>
            </div>
        </div>
    </div>
@endsection
