<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Projeto DWIII - Sistema de Gestão') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-8">
                
                <!-- Hero Section -->
                <div class="text-center mb-10">
                    <h1 class="text-4xl font-extrabold text-gray-900 mb-4">
                        Bem-vindo ao Projeto de DWIII
                    </h1>
                    <p class="text-lg text-gray-600">
                        Este sistema foi desenvolvido para gerenciar produtos e clientes de forma prática e eficiente,
                        utilizando Laravel 10, Livewire e TailwindCSS.
                    </p>
                </div>

                <!-- Cards Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card Produtos -->
                    <div class="p-6 bg-blue-50 border border-blue-200 rounded-lg shadow hover:shadow-md transition">
                        <h3 class="text-xl font-semibold text-blue-700 mb-2">Gerenciamento de Produtos</h3>
                        <p class="text-gray-600 mb-4">
                            Cadastre, edite e exclua produtos com facilidade. Controle preços e estoque em tempo real.
                        </p>
                        <a href="{{ route('produtos') }}"
                           class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Acessar Produtos
                        </a>
                    </div>

                    <!-- Card Clientes -->
                    <div class="p-6 bg-green-50 border border-green-200 rounded-lg shadow hover:shadow-md transition">
                        <h3 class="text-xl font-semibold text-green-700 mb-2">Gerenciamento de Clientes</h3>
                        <p class="text-gray-600 mb-4">
                            Mantenha o cadastro de clientes atualizado, com informações de contato e histórico.
                        </p>
                        <a href="{{ route('clientes') }}"
                           class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                            Acessar Clientes
                        </a>
                    </div>
                </div>

                <!-- Extra Section -->
                <div class="mt-10 text-center">
                    <p class="text-gray-500">
                        Projeto desenvolvido na disciplina de <strong>Desenvolvimento Web III</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
