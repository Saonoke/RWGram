<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengajuanPendudukSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'rt_id' => 1,
            'NKK' => '3351231212345678',
            'no_telepon' => '+62',
            'NIK' => '1234567812345678',
            'nama_penduduk' => 'Andi Nugraha',
            'tanggal_lahir' => now(),
            'status_perkawinan' => 'belum kawin',
            'jenis_kelamin' => 'L',
            'golongan_darah' => 'a',
            'tempat_lahir' => 'mojokerto',
            'alamat' => 'GPI',
            'agama' => 'islam',
            'pekerjaan' => 'Mahasiswa',
            'status_tinggal' => 'kontrak',
            'tanggal_laporan' => now()
        ];

        DB::table('pengajuan_penduduk')->insert($data);
    }
}
