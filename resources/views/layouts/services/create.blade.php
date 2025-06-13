<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Serviços') }}
                </h2>
                <p>Gerencie os serviços da sua barbearia</p>
            </div>

            <!-- Botão do Modal -->
            <button
                type="button"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-200"
                onclick="openModal()"
            >
                Abrir Modal
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("API Services Access Successful") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <!-- Cabeçalho do Modal -->
            <div class="flex justify-between items-center pb-3">
                <h3 class="text-lg font-bold text-gray-900">Título do Modal</h3>
                <button
                    type="button"
                    class="text-gray-400 hover:text-gray-600 transition duration-200"
                    onclick="closeModal()"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Conteúdo do Modal (vazio conforme solicitado) -->
            <div class="py-4">
                <p class="text-gray-600">Conteúdo do modal vai aqui...</p>
            </div>

            <!-- Rodapé do Modal -->
            <div class="flex justify-end pt-2">
                <button
                    type="button"
                    class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-gray-700 transition duration-200 mr-2"
                    onclick="closeModal()"
                >
                    Cancelar
                </button>
                <button
                    type="button"
                    class="px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-blue-700 transition duration-200"
                    onclick="closeModal()"
                >
                    Confirmar
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript para controle do Modal -->
    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        // Fechar modal clicando fora dele
        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Fechar modal com a tecla ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</x-app-layout>
