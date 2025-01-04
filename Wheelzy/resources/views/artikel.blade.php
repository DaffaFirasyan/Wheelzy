<x-app-layout>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #e0e0e0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #333;
        }
        .navbar a {
            text-decoration: none;
            color: #e0e0e0;
            margin: 0 15px;
            font-size: 16px;
        }
        .navbar a.active {
            color: #00b894;
        }
        .navbar a.faq {
            border: 1px solid #00b894;
            padding: 5px 10px;
            border-radius: 20px;
        }
        .navbar .user {
            color: #00b894;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .article {
            display: flex;
            align-items: center;
            border: 1px solid #00b894;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #1e1e1e;
        }
        .article img {
            width: 400px; 
            height: 200px; 
            border-radius: 10px;
            margin-left: 20px;
            object-fit: cover;
        }
        .article .text {
            flex: 1;
        }
        .article .text h2 {
            font-size: 20px;
            margin: 0;
        }
        .article .text p {
            font-size: 14px;
            color: #b0b0b0;
        }
        .article .text .author {
            color: #00b894;
            font-weight: bold;
            margin-bottom: 10px;
            margin-top: -20px;
        }
        @media (max-width: 768px) {
            .article {
                flex-direction: column;
                text-align: center;
            }
            .article img {
                margin: 20px 0 0 0;
                width: 100%;
            }
        }
    </style>

    <div class="py-12 content">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-xl text-white font-semibold mb-10 "
            style="font-size: 30px">Daftar Artikel</h1>
            <div>
                @foreach ($artikels as $artikel)
                    <div class="article">
                        <div class="text">
                            <div class="author">Penulis: {{ $artikel->user->name }}</div>
                            <h2>
                                <a href="{{ route('artikel-show', $artikel->id) }}" class="text-white font-bold hover:underline">
                                    {{ $artikel->judul }}
                                </a>
                            </h2>
                            <p>{{ \Illuminate\Support\Str::limit($artikel->deskripsi, 600, '...') }}</p>
                        </div>
                        @if ($artikel->image)
                            <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="w-20 h-20 object-cover rounded-md">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
