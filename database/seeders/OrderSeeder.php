<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create(['tanggal_pesan' => '2024-10-01', 'total_bayar' => 150000]);
        Order::create(['tanggal_pesan' => '2024-10-02', 'total_bayar' => 200000]);
        Order::create(['tanggal_pesan' => '2024-10-03', 'total_bayar' => 120000]);
        Order::create(['tanggal_pesan' => '2024-10-04', 'total_bayar' => 300000]);
        Order::create(['tanggal_pesan' => '2024-10-05', 'total_bayar' => 180000]);
    }
}
