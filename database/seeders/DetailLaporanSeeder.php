<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailLaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_laporan_id' => 1,
                'laporan_id' => 1,
                'status_laporan' => 'menunggu',
            ],
            [
                'detail_laporan_id' => 2,
                'laporan_id' => 1,
                'status_laporan' => 'proses',
            ],
            [
                'detail_laporan_id' => 3,
                'laporan_id' => 1,
                'status_laporan' => 'selesai',
            ],


        ];


        DB::table('detail_laporan')->insert(
            $data
        );
    }
}
