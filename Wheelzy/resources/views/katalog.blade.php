<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-white text-xl text-gray-800 leading-tight" 
            style="font-size: 30px">
            {{ __('Katalog Kendaraan') }}
        </h2>
    </x-slot>

    <style>
        .btn-filter {
            border-radius: 20px;
            padding: 5px 20px;
            font-weight: 500;
            background-color: #00000; 
            color: #00000; 
            border: 1px solid #ddd;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-filter:hover {
            background-color: #00C853;
            color: #fff;
        }
        .btn-filter.active {
            background-color: #00C853;
            color: #fff;
        }
        .card {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }
        .card img {
            height: 250px;
            max-width: 300px;
            object-fit: scale-down;
            border-radius: 15px 0 0 15px;
        }
        .card-body {
            padding: 15px;
            flex: 1;
            position: relative;
            display: flex;
            flex-direction: column;
        }
        .price-tag {
            background-color: #00C853;
            color: #fff;
            border-radius: 0 15px 0 15px;
            padding: 10px 20px;
            font-weight: 500;
            position: absolute;
            top: 0;
            right: 0;
        }
        .btn-rent {
            border: 1px solid #00C853;
            color: #00C853;
            border-radius: 20px;
            padding: 5px 20px;
            font-weight: 500;
            position: absolute;
            bottom: -20px; 
            right: 20px; 
        }
        .btn-rent:hover {
            background-color: #00C853;
            color: #fff;
        }
        .card-content {
            display: flex;
            flex-direction: column;
        }
        .card-title {
            font-size: 2.5rem; 
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }
        .badge {
            font-size: 1.5rem;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <div class="py-6 bg-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-15 shadow-sm rounded-lg p-4">
                <!-- Filter Kategori -->
                <div class="mb-4 d-flex">
                    <button onclick="setActiveFilter(this); window.location='{{ route('katalog.user') }}'" 
                            class="btn btn-filter text-white me-2 {{ request('kategori') ? '' : 'active' }}">
                        {{ __('All') }}
                    </button>
                    <button onclick="setActiveFilter(this); window.location='{{ route('katalog.user', ['kategori' => 'Mobil']) }}'" 
                            class="btn btn-filter text-white me-2 {{ request('kategori') === 'Mobil' ? 'active' : '' }}">
                        {{ __('Mobil') }}
                    </button>
                    <button onclick="setActiveFilter(this); window.location='{{ route('katalog.user', ['kategori' => 'Motor']) }}'" 
                            class="btn btn-filter text-white me-2 {{ request('kategori') === 'Motor' ? 'active' : '' }}">
                        {{ __('Motor') }}
                    </button>
                </div>

                <!-- List Katalog -->
                @forelse ($katalogs as $katalog)
                    <div class="card">
                        <!-- Gambar Kendaraan -->
                        <div>
                            <img src="{{ asset('storage/' . $katalog->gambar) }}" alt="{{ $katalog->nama_kendaraan }}">
                        </div>

                        <!-- Detail Kendaraan -->
                        <div class="card-body">
                            <div class="card-content">
                                <h5 class="card-title text-white">{{ $katalog->nama_kendaraan }}</h5>
                                <p class="card-text text-white">{{ Str::limit($katalog->deskripsi, 500) }}</p>
                            </div>
                            <!-- Tombol Sewa Sekarang -->
                            <a href="{{ route('pesan.create') }}" class="btn btn-rent">{{ __('Sewa Sekarang') }}</a>
                        </div>

                        <!-- Harga Sewa -->
                        <div class="price-tag">
                            Rp{{ number_format($katalog->harga_sewa, 0, ',', '.') }}
                        </div>
                    </div>
                @empty
                    <p class="text-muted">{{ __('Tidak ada katalog kendaraan yang tersedia.') }}</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function setActiveFilter(button) {
        // Menghapus class 'active' dari semua tombol
        document.querySelectorAll('.btn-filter').forEach(btn => btn.classList.remove('active'));
        
        // Menambahkan class 'active' ke tombol yang diklik
        button.classList.add('active');
    }
</script>
