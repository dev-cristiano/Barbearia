<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Enterprises') }}
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    Manage all companies registered in the system
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('enterprises.update', $enterprise->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="hidden" value="{{ Auth::user()->id  }}" name="user_id">
                        <!-- Fantasy Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="fantasy_name">Name</label>
                            <input type="text" name="fantasy_name" id="fantasy_name" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('fantasy_name', $enterprise->fantasy_name) }}">
                        </div>

                        <!-- CNPJ -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('cnpj', $enterprise->cnpj) }}">
                        </div>

                        <!-- E-mail -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="email">E-mail</label>
                            <input type="email" name="email" id="email"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('fantasy_name', $enterprise->email) }}">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="phone">Phone</label>
                            <input type="text" name="phone" id="phone"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('phone', $enterprise->phone) }}">
                        </div>

                        <!-- Address -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="address" class="block text-sm font-medium text-gray-700">
                                Address
                            </label>
                            <input type="text" name="address" id="address"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('phone', $enterprise->address) }}">
                        </div>

                        <!-- City -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="city" class="block text-sm font-medium text-gray-700">
                                City
                            </label>
                            <input type="text" name="city" id="city"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('phone', $enterprise->city) }}">
                        </div>

                        <!-- Number -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="number" class="block text-sm font-medium text-gray-700">
                                Number
                            </label>
                            <input type="text" name="number" id="number"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('phone', $enterprise->number) }}">
                        </div>

                        <!-- Complement -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="complement" class="block text-sm font-medium text-gray-700">
                                Complement
                            </label>
                            <input type="text" name="complement" id="complement"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                   value="{{ old('phone', $enterprise->complement) }}">
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="status">Status</label>
                            <select name="status" id="status" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="" disabled {{ old('status', $enterprise->status ?? '') === null ? 'selected' : '' }}>Select Status</option>
                                <option value="1" {{ old('status', $enterprise->status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $enterprise->status ?? '') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                    </div>
                    <div class="mt-6 flex justify-start space-x-2">
                        <a href="{{ route('enterprises.index') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 border border-gray-300 rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-300 transition">
                            Back
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring ring-blue-300 transition">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>]
