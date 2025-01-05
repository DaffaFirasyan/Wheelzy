<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama' => 'Motor'],
            ['nama' => 'Mobil'],
            ['nama' => 'Bus']
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
