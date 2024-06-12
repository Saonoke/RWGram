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
                'laporan_id' => 1,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-04-12 11:11:11'

            ],
            [
                'laporan_id' => 1,
                'status_laporan' => 'proses',
                'created_at' => '2024-04-12 12:11:11'
            ],
            [
                'laporan_id' => 1,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-04-12 15:11:11'
            ],
            [
                'laporan_id' => 2,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-04-13 11:11:11'

            ],
            [
                'laporan_id' => 2,
                'status_laporan' => 'proses',
                'created_at' => '2024-04-29 12:11:11'
            ],
            [
                'laporan_id' => 2,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-05-19 13:10:11'
            ],
            [
                'laporan_id' => 3,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-04-09 09:11:11'

            ],
            [
                'laporan_id' => 3,
                'status_laporan' => 'proses',
                'created_at' => '2024-04-11 10:10:11'
            ],
            [
                'laporan_id' => 3,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-05-15 10:30:11'
            ],
            [
                'laporan_id' => 4,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-03-09 09:11:11'

            ],
            [
                'laporan_id' => 4,
                'status_laporan' => 'proses',
                'created_at' => '2024-03-11 10:10:11'
            ],
            [
                'laporan_id' => 4,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-03-28 10:30:11'
            ],
            [
                'laporan_id' => 5,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-06-09 09:11:11'

            ],
            [
                'laporan_id' => 5,
                'status_laporan' => 'proses',
                'created_at' => '2024-06-11 10:10:11'
            ],
            [
                'laporan_id' => 5,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-06-24 10:30:11'
            ],
            [
                'laporan_id' => 6,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-05-12 11:11:11'

            ],
            [
                'laporan_id' => 6,
                'status_laporan' => 'proses',
                'created_at' => '2024-05-22 12:11:11'
            ],
            [
                'laporan_id' => 6,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-05-24 15:11:11'
            ],
            [
                'laporan_id' => 7,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-04-13 11:11:11'

            ],
            [
                'laporan_id' => 7,
                'status_laporan' => 'proses',
                'created_at' => '2024-04-29 13:10:11'
            ],
            [
                'laporan_id' => 7,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-05-19 20:10:11'
            ],
            [
                'laporan_id' => 8,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-04-09 05:11:11'

            ],
            [
                'laporan_id' => 8,
                'status_laporan' => 'proses',
                'created_at' => '2024-04-11 15:10:11'
            ],
            [
                'laporan_id' => 8,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-04-11 17:30:11'
            ],
            [
                'laporan_id' => 9,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-06-09 06:11:11'

            ],
            [
                'laporan_id' => 9,
                'status_laporan' => 'proses',
                'created_at' => '2024-06-11 18:10:11'
            ],
            [
                'laporan_id' => 9,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-06-28 20:30:11'
            ],
            [
                'laporan_id' => 10,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-07-09 09:11:11'

            ],
            [
                'laporan_id' => 10,
                'status_laporan' => 'proses',
                'created_at' =>'2024-07-11 10:10:11'
            ],
            [
                'laporan_id' => 10,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-07-24 10:30:11'
            ],
            [
                'laporan_id' => 11,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-07-03 09:11:11'

            ],
            [
                'laporan_id' => 11,
                'status_laporan' => 'proses',
                'created_at' =>'2024-07-05 10:10:11'
            ],
            [
                'laporan_id' => 11,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-07-07 09:30:11'
            ],
            [
                'laporan_id' => 12,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-08-03 09:11:11'

            ],
            [
                'laporan_id' => 12,
                'status_laporan' => 'proses',
                'created_at' =>'2024-08-05 09:19:11'
            ],
            [
                'laporan_id' => 12,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-08-07 09:30:11'
            ],
            [
                'laporan_id' => 13,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-08-04 08:11:11'

            ],
            [
                'laporan_id' => 13,
                'status_laporan' => 'proses',
                'created_at' =>'2024-08-09 08:19:11'
            ],
            [
                'laporan_id' => 13,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-08-12 09:30:11'
            ],
            [
                'laporan_id' => 14,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-08-16 08:11:11'

            ],
            [
                'laporan_id' => 14,
                'status_laporan' => 'proses',
                'created_at' =>'2024-08-17 08:19:11'
            ],
            [
                'laporan_id' => 14,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-08-22 09:30:11'
            ],
            [
                'laporan_id' => 15,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-09-16 08:11:11'

            ],
            [
                'laporan_id' => 15,
                'status_laporan' => 'proses',
                'created_at' =>'2024-09-17 09:19:11'
            ],
            [
                'laporan_id' => 15,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-09-25 09:30:11'
            ],
            [
                'laporan_id' => 16,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-09-03 09:11:11'

            ],
            [
                'laporan_id' => 16,
                'status_laporan' => 'proses',
                'created_at' =>'2024-09-05 05:05:11'
            ],
            [
                'laporan_id' => 16,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-09-07 09:30:11'
            ],
            [
                'laporan_id' => 17,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-10-03 09:11:11'

            ],
            [
                'laporan_id' => 17,
                'status_laporan' => 'proses',
                'created_at' =>'2024-10-05 09:19:11'
            ],
            [
                'laporan_id' => 17,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-10-07 09:30:11'
            ],
            [
                'laporan_id' => 18,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-11-17 11:11:11'

            ],
            [
                'laporan_id' => 18,
                'status_laporan' => 'proses',
                'created_at' =>'2024-11-18 11:19:11'
            ],
            [
                'laporan_id' => 18,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-11-20 09:30:11'
            ],
            [
                'laporan_id' => 19,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-12-16 12:11:11'

            ],
            [
                'laporan_id' => 19,
                'status_laporan' => 'proses',
                'created_at' =>'2024-12-18 12:19:11'
            ],
            [
                'laporan_id' => 19,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-12-20 09:30:11'
            ],
            [
                'laporan_id' => 20,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-01-16 08:11:11'

            ],
            [
                'laporan_id' => 20,
                'status_laporan' => 'proses',
                'created_at' =>'2024-01-17 12:19:11'
            ],
            [
                'laporan_id' => 20,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-01-25 16:30:11'
            ],
            [
                'laporan_id' => 21,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-02-12 11:11:11'

            ],
            [
                'laporan_id' => 21,
                'status_laporan' => 'proses',
                'created_at' => '2024-02-12 12:11:11'
            ],
            [
                'laporan_id' => 21,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-02-12 15:11:11'
            ],
            [
                'laporan_id' => 22,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-03-17 11:11:11'

            ],
            [
                'laporan_id' => 22,
                'status_laporan' => 'proses',
                'created_at' => '2024-03-19 13:10:11'
            ],
            [
                'laporan_id' => 22,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-03-20 20:10:11'
            ],
            [
                'laporan_id' => 23,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-04-19 09:11:11'

            ],
            [
                'laporan_id' => 23,
                'status_laporan' => 'proses',
                'created_at' =>'2024-04-21 10:10:11'
            ],
            [
                'laporan_id' => 23,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-05-25 10:30:11'
            ],
            [
                'laporan_id' => 24,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-06-11 09:11:11'

            ],
            [
                'laporan_id' => 24,
                'status_laporan' => 'proses',
                'created_at' =>'2024-06-12 10:10:11'
            ],
            [
                'laporan_id' => 24,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-06-16 10:30:11'
            ],
            [
                'laporan_id' => 25,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-08-19 09:11:11'

            ],
            [
                'laporan_id' => 25,
                'status_laporan' => 'proses',
                'created_at' => '2024-08-20 10:10:11'
            ],
            [
                'laporan_id' => 25,
                'status_laporan' => 'selesai',
                 'created_at' =>  '2024-08-30 10:30:11'
            ],
            [
                'laporan_id' => 26,
                'status_laporan' => 'menunggu',
                'created_at' =>'2024-08-19 09:11:11'

            ],
            [
                'laporan_id' => 26,
                'status_laporan' => 'proses',
                'created_at' => '2024-08-20 10:10:11'
            ],
            [
                'laporan_id' => 26,
                'status_laporan' => 'selesai',
                 'created_at' =>  '2024-08-30 10:30:11'
            ],
            [
                'laporan_id' => 27,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-05-12 11:11:11'

            ],
            [
                'laporan_id' => 27,
                'status_laporan' => 'proses',
                'created_at' => '2024-05-22 12:11:11'
            ],
            [
                'laporan_id' => 27,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-05-24 15:11:11'
            ],
            [
                'laporan_id' => 28,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-07-13 11:11:11'

            ],
            [
                'laporan_id' => 28,
                'status_laporan' => 'proses',
                'created_at' => '2024-07-19 13:10:11'
            ],
            [
                'laporan_id' => 28,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-08-04 20:10:11'
            ],
            [
                'laporan_id' => 29,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-10-17 05:11:11'

            ],
            [
                'laporan_id' => 29,
                'status_laporan' => 'proses',
                'created_at' => '2024-10-19 15:10:11'
            ],
            [
                'laporan_id' => 29,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-10-26 17:30:11'
            ],
            [
                'laporan_id' => 30,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-12-27 12:11:11'

            ],
            [
                'laporan_id' => 30,
                'status_laporan' => 'proses',
                'created_at' => '2024-12-28 18:10:11'
            ],
            [
                'laporan_id' => 30,
                'status_laporan' => 'selesai',
                 'created_at' => '2024-12-29 20:30:11'
            ],
            [
                'laporan_id' => 31,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-05-12 11:11:11',

            ],
            [
                'laporan_id' => 31,
                'status_laporan' => 'ditolak',
                'created_at' => '2024-05-24 15:11:11'
            ],
            [
                'laporan_id' => 32,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-07-13 11:11:11'

            ],
            [
                'laporan_id' => 32,
                'status_laporan' => 'ditolak',
                'created_at' => '2024-08-04 20:10:11'
            ],
            [
                'laporan_id' => 33,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-10-17 05:11:11'

            ],
            [
                'laporan_id' => 33,
                'status_laporan' => 'ditolak',
                'created_at' => '2024-10-26 17:30:11'
            ],
            [
                'laporan_id' => 34,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-10-17 05:11:11'

            ],
            [
                'laporan_id' => 34,
                'status_laporan' => 'ditolak',
                'created_at' => '2024-10-26 17:30:11'
            ],
            [
                'laporan_id' => 35,
                'status_laporan' => 'menunggu',
                'created_at' => '2024-10-17 05:11:11'

            ],
            [
                'laporan_id' => 35,
                'status_laporan' => 'ditolak',
                'created_at' => '2024-10-26 17:30:11'
            ],






        ];


        DB::table('detail_laporan')->insert(
            $data
        );
    }
}
