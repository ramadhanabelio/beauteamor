<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama_produk' => 'Lipstick Merah',
            'jenis_produk' => 'Kosmetik',
            'stok' => 100,
            'harga' => 50000,
            'gambar' => 'uploads/lipstick_merah.jpg',
        ]);

        Product::create([
            'nama_produk' => 'Moisturizer',
            'jenis_produk' => 'Skincare',
            'stok' => 50,
            'harga' => 75000,
            'gambar' => 'uploads/moisturizer.jpg',
        ]);
    }
}
