<x-layouts.guest-enterprise-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-8">
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800">Register Company</h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Fill in the company details to continue.
                    </p>
                </div>

                <form action="{{ route('enterprises.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="1">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Nome -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="fantasy_name" class="block text-sm font-medium text-gray-700">
                                Fantasy Name
                            </label>
                            <input type="text" name="fantasy_name" id="fantasy_name" required
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- CNPJ -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="cnpj" class="block text-sm font-medium text-gray-700">
                                CNPJ
                            </label>
                            <input type="text" name="cnpj" id="cnpj" required
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- E-mail -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                E-mail
                            </label>
                            <input type="email" name="email" id="email"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Phone -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="phone" class="block text-sm font-medium text-gray-700">
                                Phone
                            </label>
                            <input type="text" name="phone" id="phone"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Address -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="address" class="block text-sm font-medium text-gray-700">
                                Address
                            </label>
                            <input type="text" name="address" id="address"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- City -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="city" class="block text-sm font-medium text-gray-700">
                                City
                            </label>
                            <input type="text" name="city" id="city"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Number -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="number" class="block text-sm font-medium text-gray-700">
                                Number
                            </label>
                            <input type="text" name="number" id="number"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Complement -->
                        <div class="col-span-2 md:col-span-1">
                            <label for="complement" class="block text-sm font-medium text-gray-700">
                                Complement
                            </label>
                            <input type="text" name="complement" id="complement"
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <!-- Botões -->
                    <div class="flex justify-end space-x-4 pt-4">
                        <button type="submit"
                                class="inline-flex items-center px-6 py-2 bg-blue-600 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring ring-blue-300 transition">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest-enterprise-layout>
