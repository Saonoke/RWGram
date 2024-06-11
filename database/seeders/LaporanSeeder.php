<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // Define data source
        // $keluhan = [
        //     "Masalah sanitasi di lingkungan",
        //     "Kerusakan infrastruktur jalan",
        //     "Kekurangan fasilitas pendidikan",
        //     "Ketidaknyamanan lingkungan akibat sampah",
        //     "Kualitas air minum yang buruk",
        //     "Tingkat kejahatan yang meningkat",
        //     "Kerusakan saluran air",
        //     "Ketidakamanan transportasi umum",
        //     "Ketidakmampuan layanan kesehatan",
        //     "Kerusakan fasilitas umum",
        //     "Kerusakan listrik di wilayah",
        //     "Kebisingan dari industri di sekitar",
        //     "Ketidakstabilan harga kebutuhan pokok",
        //     "Ketidakmampuan akses internet yang baik",
        //     "Ketidakmampuan pengelolaan sampah",
        //     "Masalah polusi udara",
        //     "Kurangnya penerangan jalan di malam hari",
        //     "Kemacetan lalu lintas",
        //     "Kurangnya ruang hijau dan taman",
        //     "Kualitas udara yang buruk",
        //     "Kurangnya fasilitas olahraga",
        //     "Kurangnya aksesibilitas untuk penyandang disabilitas",
        //     "Banjir saat musim hujan",
        //     "Kurangnya tempat parkir umum",
        //     "Masalah pengelolaan limbah industri",
        //     "Kurangnya pusat kegiatan masyarakat",
        //     "Kualitas jalan yang buruk",
        //     "Kurangnya pos keamanan lingkungan",
        //     "Masalah keberlanjutan lingkungan",
        //     "Masalah dengan kebisingan kendaraan",
        //     "Kurangnya fasilitas untuk anak-anak",
        //     "Kurangnya perawatan taman kota",
        //     "Masalah kebersihan di pasar tradisional",
        //     "Kerusakan jembatan",
        //     "Kekurangan pasokan air bersih",
        //     "Masalah dengan binatang liar",
        //     "Kurangnya tempat penampungan hewan",
        //     "Pengelolaan bencana yang tidak memadai",
        //     "Masalah dengan lalu lintas berat",
        //     "Kurangnya program kesehatan masyarakat",
        //     "Kurangnya fasilitas untuk lansia",
        //     "Masalah dengan kualitas udara dalam ruangan",
        //     "Kurangnya fasilitas daur ulang",
        //     "Masalah dengan vandalisme",
        //     "Kurangnya pengawasan lingkungan",
        //     "Masalah dengan drainase air hujan",
        //     "Kurangnya penerangan di fasilitas umum",
        //     "Masalah dengan akses ke perawatan kesehatan mental",
        //     "Kurangnya pengelolaan hutan kota",
        //     "Masalah dengan serangga dan hama",
        //     "Kurangnya program pendidikan lingkungan",
        //     "Masalah dengan layanan darurat",
        //     "Kurangnya tempat rekreasi",
        //     "Masalah dengan infrastruktur air limbah",
        //     "Kurangnya fasilitas seni dan budaya",
        //     "Masalah dengan keamanan cyber",
        //     "Kurangnya pengelolaan lalu lintas sepeda",
        //     "Masalah dengan penyediaan air minum",
        //     "Kurangnya fasilitas kebugaran",
        //     "Masalah dengan jaringan listrik",
        //     "Kurangnya perlindungan terhadap polusi suara",
        //     "Masalah dengan pemeliharaan bangunan bersejarah",
        //     "Kurangnya fasilitas transportasi publik",
        //     "Masalah dengan kualitas makanan di pasar",
        //     "Kurangnya pusat bantuan hukum",
        //     "Masalah dengan layanan telekomunikasi",
        //     "Kurangnya program beasiswa pendidikan",
        //     "Masalah dengan penyediaan energi terbarukan",
        //     "Kurangnya fasilitas sanitasi di sekolah"
        // ];

        // $status = ["menunggu", "proses", "selesai", "ditolak"];

        // // Generate 100 reports
        // for ($i = 0; $i < 20; $i++) {
        //     $pendudukId = rand(1, 10); // Assuming you have 10 penduduk records
        //     $deskripsiLaporan = $keluhan[array_rand($keluhan)];
        //     $statusLaporan = $status[array_rand($status)];
        //     $tanggalLaporan = date('Y-m-d H:i:s', mt_rand(strtotime('2024-01-01'), strtotime('2024-12-31')));

        //     // Insert report data into database
        //     DB::table('laporan')->insert([
        //         'penduduk_id' => $pendudukId,
        //         'deskripsi_laporan' => $deskripsiLaporan,
        //         'status_laporan' => $statusLaporan,
        //         'tanggal_laporan' => $tanggalLaporan,
        //     ]);
        // }

        $data = [
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-04-12 11:11:11',
            ],
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-04-12 12:11:11',
            ],
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-04-12 15:11:11',
            ],

            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-04-13 11:11:11',
            ],
            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-04-29 13:10:11',
            ],
            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-05-19 20:10:11',
            ],

            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-04-09 09:11:11',
            ],
            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-04-11 10:10:11',
            ],
            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-05-15 10:30:11',
            ],

            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Kualitas air minum yang buruk",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-03-09 09:11:11',
            ],
            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Kualitas air minum yang buruk",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-03-11 10:10:11',
            ],
            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Kualitas air minum yang buruk",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-03-28 10:30:11',
            ],

            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-06-09 09:11:11',
            ],
            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-06-11 10:10:11',
            ],
            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-06-24 10:30:11',
            ],

            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan dirumahku",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-05-12 11:11:11',
            ],
            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan dirumahku",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-05-22 12:11:11',
            ],
            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan dirumahku",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-05-24 15:11:11',
            ],

            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan sumber sekar",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-04-13 11:11:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan sumber sekar",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-04-29 13:10:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan sumber sekar",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-05-19 20:10:11',
            ],

            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah rumah tangga",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-04-09 05:11:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah rumah tangga",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-04-11 15:10:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah rumah tangga",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-04-11 17:30:11',
            ],

            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kualitas air minum yang buruk dan bau",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-06-09 06:11:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kualitas air minum yang buruk dan bau",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-06-11 18:10:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kualitas air minum yang buruk dan bau",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-06-28 20:30:11',
            ],

            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat sekali",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-07-09 09:11:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat sekali",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-07-11 10:10:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat sekali",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-07-24 10:30:11',
            ],

            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Masalah dengan jaringan listrik",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-07-03 09:11:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Masalah dengan jaringan listrik",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-07-05 10:10:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Masalah dengan jaringan listrik",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-07-07 09:30:11',
            ],

            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kurangnya fasilitas kebugaran",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-08-03 09:11:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kurangnya fasilitas kebugaran",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-08-05 09:19:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kurangnya fasilitas kebugaran",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-08-07 09:30:11',
            ],

            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Masalah dengan drainase air hujan",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-08-04 08:11:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Masalah dengan drainase air hujan",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-08-09 08:19:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Masalah dengan drainase air hujan",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-08-12 09:30:11',
            ],

            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kurangnya pengawasan lingkungan",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-08-16 08:11:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kurangnya pengawasan lingkungan",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-08-17 08:19:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kurangnya pengawasan lingkungan",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-08-22 09:30:11',
            ],

            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Kurangnya program kesehatan masyarakat",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-09-16 08:11:11',
            ],
            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Kurangnya program kesehatan masyarakat",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-09-17 09:19:11',
            ],
            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Kurangnya program kesehatan masyarakat",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-09-25 09:30:11',
            ],

            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Masalah dengan jaringan listrik saya dan sekitarnya",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-09-03 09:11:11',
            ],
            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Masalah dengan jaringan listrik saya dan sekitarnya",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-09-05 05:05:11',
            ],
            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Masalah dengan jaringan listrik saya dan sekitarnya",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-09-07 09:30:11',
            ],

            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Kurangnya fasilitas kebugaran jasmani dan rohani",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-10-03 09:11:11',
            ],
            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Kurangnya fasilitas kebugaran jasmani dan rohani",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-10-05 09:19:11',
            ],
            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Kurangnya fasilitas kebugaran jasmani dan rohani",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-10-07 09:30:11',
            ],

            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Masalah dengan drainase air hujan didepan masjid",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-11-17 11:11:11',
            ],
            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Masalah dengan drainase air hujan didepan masjid",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-11-18 11:19:11',
            ],
            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Masalah dengan drainase air hujan didepan masjid",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-11-20 09:30:11',
            ],

            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Kurangnya pengawasan lingkungan di rt04",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-12-16 12:11:11',
            ],
            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Kurangnya pengawasan lingkungan di rt04",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-12-18 12:19:11',
            ],
            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Kurangnya pengawasan lingkungan di rt04",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-12-20 09:30:11',
            ],

            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Kurangnya program kesehatan masyarakat sekitar",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-01-16 08:11:11',
            ],
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Kurangnya program kesehatan masyarakat sekitar",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-01-17 12:19:11',
            ],
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Kurangnya program kesehatan masyarakat sekitar",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-01-25 16:30:11',
            ],

            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Kurangnya ruang hijau dan taman",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-02-12 11:11:11',
            ],
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Kurangnya ruang hijau dan taman",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-02-12 12:11:11',
            ],
            [
                'penduduk_id' => 1,
                'deskripsi_laporan' => "Kurangnya ruang hijau dan taman",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-02-12 15:11:11',
            ],

            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Ketidakmampuan pengelolaan sampah rumah tangga disini",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-03-17 11:11:11',
            ],
            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Ketidakmampuan pengelolaan sampah rumah tangga disini",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-03-19 13:10:11',
            ],
            [
                'penduduk_id' => 2,
                'deskripsi_laporan' => "Ketidakmampuan pengelolaan sampah rumah tangga disini",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-03-20 20:10:11',
            ],

            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Masalah dengan layanan darurat yang harus sigap",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-04-19 09:11:11',
            ],
            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Masalah dengan layanan darurat yang harus sigap",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-04-21 10:10:11',
            ],
            [
                'penduduk_id' => 3,
                'deskripsi_laporan' => "Masalah dengan layanan darurat yang harus sigap",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-05-25 10:30:11',
            ],

            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Masalah dengan vandalisme",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-06-11 09:11:11',
            ],
            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Masalah dengan vandalisme",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-06-12 10:10:11',
            ],
            [
                'penduduk_id' => 4,
                'deskripsi_laporan' => "Masalah dengan vandalisme",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-06-16 10:30:11',
            ],

            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Masalah dengan pemeliharaan bangunan bersejarah",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-08-19 09:11:11',
            ],
            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Masalah dengan pemeliharaan bangunan bersejarah",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-08-20 10:10:11',
            ],
            [
                'penduduk_id' => 5,
                'deskripsi_laporan' => "Masalah dengan pemeliharaan bangunan bersejarah",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-08-30 10:30:11',
            ],

            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan rt03",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-05-12 11:11:11',
            ],
            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan rt03",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-05-22 12:11:11',
            ],
            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah sanitasi di lingkungan rt03",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-05-24 15:11:11',
            ],

            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan sumber kembar",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-07-13 11:11:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan sumber kembar",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-07-19 13:10:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Kerusakan infrastruktur jalan sumber kembar",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-08-04 20:10:11',
            ],

            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah daur ulang",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-10-17 05:11:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah daur ulang",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-10-19 15:10:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah daur ulang",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-10-26 17:30:11',
            ],

            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kualitas air minum yang buruk sekali",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-12-27 12:11:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kualitas air minum yang buruk sekali",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-12-28 18:10:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "Kualitas air minum yang buruk sekali",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-12-29 20:30:11',
            ],

            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat dan tidak terkendali",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-09-01 09:11:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat dan tidak terkendali",
                'status_laporan' => 'proses',
                'tanggal_laporan' => '2024-09-02 10:10:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Tingkat kejahatan yang meningkat dan tidak terkendali",
                'status_laporan' => 'selesai',
                'tanggal_laporan' => '2024-09-03 10:30:11',
            ],

            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah dengan tetangga sebelah masjid",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-05-12 11:11:11',
            ],

            [
                'penduduk_id' => 6,
                'deskripsi_laporan' => "Masalah dengan tetangga sebelah masjid",
                'status_laporan' => 'ditolak',
                'tanggal_laporan' => '2024-05-24 15:11:11',
            ],

            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Tetangga sebelah berisik banget",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-07-13 11:11:11',
            ],
            [
                'penduduk_id' => 7,
                'deskripsi_laporan' => "Tetangga sebelah berisik banget",
                'status_laporan' => 'ditolak',
                'tanggal_laporan' => '2024-08-04 20:10:11',
            ],

            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah-sampah yang berserakan",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-10-17 05:11:11',
            ],
            [
                'penduduk_id' => 8,
                'deskripsi_laporan' => "Ketidaknyamanan lingkungan akibat sampah-sampah yang berserakan",
                'status_laporan' => 'ditolak',
                'tanggal_laporan' => '2024-10-26 17:30:11',
            ],

            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "kurangnya fasilitas transportasi umum",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-10-17 05:11:11',
            ],
            [
                'penduduk_id' => 9,
                'deskripsi_laporan' => "kurangnya fasilitas transportasi umum",
                'status_laporan' => 'ditolak',
                'tanggal_laporan' => '2024-10-26 17:30:11',
            ],

            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Kurangnya pengelolaan hutan kota",
                'status_laporan' => 'menunggu',
                'tanggal_laporan' => '2024-10-17 05:11:11',
            ],
            [
                'penduduk_id' => 10,
                'deskripsi_laporan' => "Kurangnya pengelolaan hutan kota",
                'status_laporan' => 'ditolak',
                'tanggal_laporan' => '2024-10-26 17:30:11',
            ],

        ];


        DB::table('laporan')->insert(
            $data
        );

    }
}
