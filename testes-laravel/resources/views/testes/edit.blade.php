@extends('home')

@section('testes')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Editar Teste') }}
                    </h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('testes.update', $teste) }}">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <label for="nome" class="block font-medium text-sm text-gray-700">{{ __('Nome') }}</label>
                            <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $teste->nome }}" />
                        </div>

                        <div class="mt-4">
                            <label for="pontuacao_minima" class="block font-medium text-sm text-gray-700">{{ __('Pontuação Mínima') }}</label>
                            <input type="number" name="pontuacao_minima" id="pontuacao_minima" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $teste->pontuacao_minima }}" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Salvar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
