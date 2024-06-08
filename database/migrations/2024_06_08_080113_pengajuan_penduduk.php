<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('pengajuan_penduduk', function (Blueprint $table) {
            $table->id('pengajuan_penduduk_id');
            $table->unsignedBigInteger('rt_id')->index();
            $table->foreign('rt_id')->references('rt_id')->on('rt');
            $table->string('NKK', 16)->unique();
            $table->string('no_telepon', 20);
            $table->string('NIK', 16)->unique();
            $table->string('nama_penduduk', 50);
            $table->date('tanggal_lahir');
            $table->enum('status_perkawinan', ['kawin', 'belum kawin', 'cerai hidup', 'cerai mati']);
            $table->char('jenis_kelamin', 1);
            $table->enum('golongan_darah', ['a', 'b', 'ab', 'o']);
            $table->string('tempat_lahir', 20);
            $table->string('alamat', 100);
            $table->string('agama', 10);
            $table->enum('pekerjaan', [
                "PNS",
                "TNI",
                "Polri",
                "Karyawan Swasta",
                "Wiraswasta",
                "Mahasiswa",
                "Petani",
                "Nelayan",
                "Pensiunan",
                "Ibu Rumah Tangga",
                "Tidak Bekerja",
                "Lainnya",
                "Pedagang",
                "Buruh",
                "Sopir",
                "Satpam",
                "Tukang",
                "Seniman",
                "Penyiar",
                "Pengusaha",
                "Dosen",
                "Guru",
                "Pengacara",
                "Dokter",
                "Apoteker",
                "Perawat",
                "Penyiar Radio",
                "Penulis",
                "Jurnalis"
            ]);
            $table->enum('status_pengajuan', ['Menunggu', 'Selesai', 'Ditolak'])->default('Menunggu');
            $table->enum('status_tinggal', ['tetap', 'kontrak', 'pindah']);
            $table->date('tanggal_laporan');
            $table->text('pesan')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
