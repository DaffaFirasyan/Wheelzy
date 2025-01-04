<x-app-layout>
    <div class="py-12 content bg-black min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl text-white font-bold mb-10 ">Frequently Asked Questions</h1>
            <div>
                <div class="py-12 bg-white bg-opacity-10 shadow-lg rounded-lg">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        @foreach($faqs as $faq)
                            <div x-data="{ open: false }" class="border-b border-gray-800">
                                <button @click="open = !open" 
                                        class="w-full text-left py-4 px-4 flex justify-between items-center bg-black hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-2 focus:ring-white rounded-md transition-all duration-300">
                                    <span class="font-semibold text-lg text-white">{{ $faq->question }}</span>
                                    <svg x-bind:class="{ 'rotate-180': open }" 
                                         class="h-6 w-6 transform transition-transform duration-300 text-white" 
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" 
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                                              clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" 
                                     x-transition:enter="transition ease-out duration-300 transform" 
                                     x-transition:enter-start="opacity-0 scale-95" 
                                     x-transition:enter-end="opacity-100 scale-100" 
                                     x-transition:leave="transition ease-in duration-200 transform" 
                                     x-transition:leave-start="opacity-100 scale-100" 
                                     x-transition:leave-end="opacity-0 scale-95" 
                                     class="p-4 text-white bg-white bg-opacity-5 rounded-b-md">
                                    {!! nl2br(e($faq->answer)) !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
