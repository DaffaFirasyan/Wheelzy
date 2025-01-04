<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight"
            style="font-size:30px;">
            {{ __('Edit FAQ') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white shadow-sm rounded-lg p-4">
                <!-- Form untuk mengedit FAQ -->
                <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-4">
                        <!-- Pertanyaan -->
                        <div>
                            <label for="question" class="block text-sm font-medium text-gray-700">{{ __('Pertanyaan') }}</label>
                            <input type="text" name="question" id="question" value="{{ old('question', $faq->question) }}" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md" required>
                            @error('question')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Jawaban -->
                        <div>
                            <label for="answer" class="block text-sm font-medium text-gray-700">{{ __('Jawaban') }}</label>
                            <textarea name="answer" id="answer" rows="4" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md" required>{{ old('answer', $faq->answer) }}</textarea>
                            @error('answer')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Update -->
                        <div class="text-right">
                            <button type="submit" class="bg-gray-700 text-white px-4 py-2 rounded-md hover:bg-gray-800">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Kembali ke Daftar FAQ -->
                <div class="mt-4">
                    <a href="{{ route('admin.faq') }}" class="text-sm text-gray-600 hover:underline">
                        {{ __('Kembali ke Daftar FAQ') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
