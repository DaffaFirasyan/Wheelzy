<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="font-size: 30px; margin-bottom: -20px">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h3 class="text-2xl font-bold mb-4 text-white">{{ __("Welcome to the Admin Dashboard!") }}</h3>
                    <p class="text-white">{{ __("Manage your platform easily using the tools below.") }}</p>
                </div>

                <!-- Buttons Section -->
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-6">
                    <!-- Form Button -->
                    <a href="{{ route('admin.form') }}"
                        class="flex flex-col items-center bg-white text-black font-bold py-4 px-6 rounded-lg shadow-md transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                        </svg>
                        {{ __('Form') }}
                    </a>

                    <!-- Catalog Button -->
                    <a href="{{ route('admin.katalog') }}"
                        class="flex flex-col items-center bg-white text-black font-bold py-4 px-6 rounded-lg shadow-md transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
                        </svg>
                        {{ __('Catalog') }}
                    </a>

                    <!-- Artikel Button -->
                    <a href="{{ route('admin.artikel') }}"
                        class="flex flex-col items-center bg-white text-black font-bold py-4 px-6 rounded-lg shadow-md transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        {{ __('Artikel') }}
                    </a>

                    <!-- FAQ Button -->
                    <a href="{{ route('admin.faq') }}"
                        class="flex flex-col items-center bg-white text-black font-bold py-4 px-6 rounded-lg shadow-md transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6M9 8h.01M17 16V8a2 2 0 00-2-2H7a2 2 0 00-2 2v8a2 2 0 002 2h8z" />
                        </svg>
                        {{ __('FAQ') }}
                    </a>

                    <!-- User Button -->
                    <a href="{{ route('admin.user') }}"
                        class="flex flex-col items-center bg-white text-black font-bold py-4 px-6 rounded-lg shadow-md transform hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 14h-1v-4h-4V9a1 1 0 00-1-1H7a1 1 0 00-1 1v4H5m16 4a2 2 0 01-2 2H5a2 2 0 01-2-2m2 2V9a4 4 0 014-4h4a4 4 0 014 4v7" />
                        </svg>
                        {{ __('User') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
