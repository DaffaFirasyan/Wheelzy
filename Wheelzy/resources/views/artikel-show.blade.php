<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight mb-0"
                style="font-size: 30px;">
                {{ __('Detail Artikel') }}
            </h2>
            <a href="{{ route('artikel') }}" class="text-white bg-white bg-opacity-10 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold">{{ $artikel->judul }}</h1>
                    <p class="text-gray-500 text-sm">
                        Penulis: {{ $artikel->user->name }} |
                        <span>Dibuat pada: {{ $artikel->created_at->format('d M Y, H:i') }}</span>
                    </p>
                    @if ($artikel->image)
                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}"
                            class="mt-4 w-full h-64 object-cover">
                    @endif
                    <p class="mt-4">{!! nl2br(e($artikel->deskripsi)) !!}</p>
                </div>
            </div>  
        </div>
    </div>
</x-app-layout>
