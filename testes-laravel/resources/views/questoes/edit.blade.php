@extends('home')

@section('testes')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Editar Questão') }}
                    </h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('questoes.update', [$teste->id, $questao->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <label for="enunciado" class="block font-medium text-sm text-gray-700">{{ __('Enunciado') }}</label>
                            <textarea name="enunciado" id="enunciado" class="form-input rounded-md shadow-sm mt-1 block w-full">{{ $questao->enunciado }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="resposta_a" class="block font-medium text-sm text-gray-700">{{ __('Resposta A') }}</label>
                            <input type="text" name="resposta_a" id="resposta_a" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $questao->resposta_a }}" />
                        </div>

                        <div class="mt-4">
                            <label for="resposta_b" class="block font-medium text-sm text-gray-700">{{ __('Resposta B') }}</label>
                            <input type="text" name="resposta_b" id="resposta_b" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $questao->resposta_b }}" />
                        </div>

                        <div class="mt-4">
                            <label for="resposta_c" class="block font-medium text-sm text-gray-700">{{ __('Resposta C') }}</label>
                            <input type="text" name="resposta_c" id="resposta_c" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $questao->resposta_c }}" />
                        </div>

                        <div class="mt-4">
                            <label for="resposta_d" class="block font-medium text-sm text-gray-700">{{ __('Resposta D') }}</label>
                            <input type="text" name="resposta_d" id="resposta_d" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $questao->resposta_d }}" />
                        </div>

                        <div class="mt-4">
                            <label for="resposta_e" class="block font-medium text-sm text-gray-700">{{ __('Resposta E') }}</label>
                            <input type="text" name="resposta_e" id="resposta_e" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $questao->resposta_e }}" />
                        </div>

                        <div class="mt-4">
                            <label for="resposta_correta" class="block font-medium text-sm text-gray-700">{{ __('Resposta Correta') }}</label>
                            <select name="resposta_correta" id="resposta_correta" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                <option value="A" {{ $questao->resposta_correta == 'A' ? 'selected' : '' }}>A</option>
                                <option value="B" {{ $questao->resposta_correta == 'B' ? 'selected' : '' }}>B</option>
                                <option value="C" {{ $questao->resposta_correta == 'C' ? 'selected' : '' }}>C</option>
                                <option value="D" {{ $questao->resposta_correta == 'D' ? 'selected' : '' }}>D</option>
                                <option value="E" {{ $questao->resposta_correta == 'E' ? 'selected' : '' }}>E</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="valor_total" class="block font-medium text-sm text-gray-700">{{ __('Valor Total') }}</label>
                            <input type="number" name="valor_total" id="valor_total" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $questao->valor_total }}" />
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
