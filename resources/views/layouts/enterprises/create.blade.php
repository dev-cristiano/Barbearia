<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Empresas') }}
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    Gerencie todas as empresas cadastradas no sistema
                </p>
            </div>
            <div>
                <a href="{{ route('enterprises.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    {{ __('Nova Empresa') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('enterprises.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="1">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Nome -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="fantasy_name">Nome da Empresa</label>
                            <input type="text" name="fantasy_name" id="fantasy_name" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- CNPJ -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- E-mail -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="email">E-mail</label>
                            <input type="email" name="email" id="email"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Telefone -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="phone">Telefone</label>
                            <input type="text" name="phone" id="phone"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                    <!-- Botões -->
                    <div class="mt-6 flex justify-start space-x-4">
                        <a href="{{ route('enterprises.index') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 border border-gray-300 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-300 transition">
                            Voltar
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring ring-blue-300 transition">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>]
