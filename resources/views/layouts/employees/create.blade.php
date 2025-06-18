<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Employees') }}
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    Manage all employee registered in the system
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="full_name">Full Name</label>
                            <input type="text" name="full_name" id="full_name" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- E-mail -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="email">E-mail</label>
                            <input type="email" name="email" id="email"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" maxlength="11"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- CPF -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" required maxlength="11"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Specialties -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="specialties">Specialties</label>
                            <select name="specialties" id="specialties" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Specialties</option>
                                <option value="0">Barber</option>
                                <option value="1">Hair</option>
                                <option value="2">Barber + Hair</option>
                            </select>
                        </div>

                        <!-- Enterprises -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="enterprise_id">Enterprises</label>
                            <select name="enterprise_id" id="enterprise_id" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Enterprise</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <!-- Buttons -->
                        <div class="mt-6 flex justify-start space-x-4">
                            <a href="{{ route('enterprises.index') }}"
                               class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 border border-gray-300 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-300 transition">
                                Back
                            </a>
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring ring-blue-300 transition">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>]
