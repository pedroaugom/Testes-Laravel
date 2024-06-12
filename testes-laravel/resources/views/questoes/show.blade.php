@extends('home')

@section('testes')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Detalhes da Questão') }}
                    </h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Enunciado:') }}</h3>
                        <p>{{ $questao->enunciado }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Resposta A:') }}</h3>
                        <p>{{ $questao->resposta_a }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Resposta B:') }}</h3>
                        <p>{{ $questao->resposta_b }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Resposta C:') }}</h3>
                        <p>{{ $questao->resposta_c }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Resposta D:') }}</h3>
                        <p>{{ $questao->resposta_d }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Resposta E:') }}</h3>
                        <p>{{ $questao->resposta_e }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Resposta Correta:') }}</h3>
                        <p>{{ $questao->resposta_correta }}</p>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-700">{{ __('Valor Total:') }}</h3>
                        <p>{{ $questao->valor_total }}</p>
                    </div>
                    
                    <div class="flex items-center justify-center mt-4">
                        <a href="{{ route('questoes.index', $teste->id) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Voltar') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
