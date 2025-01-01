<x-app-layout>
    <div class="bg-white min-h-screen">
        <!-- Banner Section -->
        <div class="w-full bg-cover bg-center h-96 rounded-none px-0 overflow-hidden" style="background-image: url(/images/BackgroundBanner.jpg);">
            <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
                <div class="text-center">
                <h1 class="text-white text-5xl font-bold">WHEELZY</h1>
                <p class="text-white mt-2">Berdiri Sejak Tahun 2010 kami mengutamakan kenyamanan dalam melayani pelanggan</p>
                <p class="text-white">Lebih dari 10.000 pengguna telah menggunakan jasa kami</p>
            </div>
        </div>
    </div>

        <!-- Service Section -->
        <div id="services" class="py-12 bg-black">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-8">
                <!-- Service 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <div class="text-center">
                        <img src="/images/Pelayanan.jpg" alt="Pelayanan" class="mx-auto rounded-lg mb-4 w-92 h-auto">
                        <h3 class="text-lg font-semibold">Pelayanan</h3>
                        <p class="text-gray-600 mt-2">Kami mengutamakan kenyamanan dalam melayani pelanggan</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <div class="text-center">
                        <img src="/images/CustomerService.jpg" alt="Layanan 24 Jam" class="mx-auto rounded-lg mb-4 w-92 h-auto">
                        <h3 class="text-lg font-semibold">Layanan 24 Jam</h3>
                        <p class="text-gray-600 mt-2">Demi kenyamanan pelanggan, kami siap melayani Anda selama 24 jam</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <div class="text-center">
                        <img src="/images/UnitTerbaru.jpg" alt="Unit Terbaru" class="mmx-auto rounded-lg mb-4 w-92 h-auto">
                        <h3 class="text-lg font-semibold">Unit Terbaru</h3>
                        <p class="text-gray-600 mt-2">Wheelzy menyediakan unit-unit kendaraan dengan tahun tinggi</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <div class="text-center">
                        <img src="/images/RentCar.jpg" alt="Layanan Antar Jemput" class="mx-auto rounded-lg mb-4 w-92 h-auto">
                        <h3 class="text-lg font-semibold">Layanan Antar Jemput</h3>
                        <p class="text-gray-600 mt-2">Kami menawarkan jasa antar jemput untuk pelanggan di mana pun</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="py-12 bg-black">
            <div class="text-center">
                <h2 class="text-3xl text-white font-bold mb-6">Apa Kata Pelanggan Kami</h2>
                 <div class="max-w-3xl mx-auto">
                    <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                        <p class="text-gray-600">"Pelayanan yang sangat memuaskan! Saya sangat merekomendasikan Wheelzy kepada teman-teman saya."</p>
                        <p class="font-semibold mt-2">- Andi</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                        <p class="text-gray-600">"Layanan 24 jam sangat membantu saya saat membutuhkan transportasi mendesak."</p>
                        <p class="font-semibold mt-2">- Siti</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600">"Unit kendaraan yang disediakan sangat baru dan nyaman. Sangat puas!"</p>
                        <p class="font-semibold mt-2">- Budi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>