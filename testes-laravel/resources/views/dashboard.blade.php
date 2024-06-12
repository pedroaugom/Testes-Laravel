<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Seja bem vindo, ") }} {{ Auth::user()->name }}!
                </div>
                <div class="p-6 text-gray-900 text-center">
                    <p>Aqui você pode realizar a criação dos seus Testes e Questões com segurança</p>
                    <p>Com nossa tecnologia ficou ainda mais fácil você realizar todo o gerênciamento que precisa</p>
                </div>
                <div class="p-6 text-gray-900 text-center flex justify-center">
                    <img src="{{ asset('images/img-testes.png') }}" alt="Prova" style="width: 320px; height: auto;">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
