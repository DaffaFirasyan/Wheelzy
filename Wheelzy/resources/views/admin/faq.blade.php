<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight"
            style="font-size: 30px; margin-bottom: -20px;">
            {{ __('Daftar FAQ') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Button to add new FAQ -->
                    <div class="mb-4 text-right">
                        <a href="{{ route('admin.faq.create') }}" class="px-4 py-2 rounded-md bg-blue-500 text-white text-sm hover:bg-blue-600">
                            {{ __('Tambah FAQ') }}
                        </a>
                    </div>

                    <!-- Table to display FAQ -->
                    @if ($faqs->count())
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm border border-gray-300 rounded-md">
                                <thead class="bg-gray-100 text-gray-700">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left">{{ __('No') }}</th>
                                        <th class="px-4 py-2 border-b text-left">{{ __('Pertanyaan') }}</th>
                                        <th class="px-4 py-2 border-b text-left">{{ __('Jawaban') }}</th>
                                        <th class="px-4 py-2 border-b text-left">{{ __('Aksi') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-800">
                                    @foreach ($faqs as $faq)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2 border-b">{{ $loop->iteration }}</td>
                                            <td class="px-4 py-2 border-b">{{ $faq->question }}</td>
                                            <td class="px-4 py-2 border-b">{{ Str::limit($faq->answer, 50) }}</td>
                                            <td class="px-4 py-2 border-b">
                                                <a href="{{ route('admin.faq.edit', $faq->id) }}" class="text-blue-500 hover:underline mr-4">
                                                    {{ __('Edit') }}
                                                </a>
                                                <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus FAQ ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:underline">
                                                        {{ __('Hapus') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500">{{ __('Tidak ada FAQ yang ditemukan.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
