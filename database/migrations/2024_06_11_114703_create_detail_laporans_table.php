<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_laporan', function (Blueprint $table) {
            $table->id('detail_laporan_id');
            $table->unsignedBigInteger('laporan_id')->index();
            $table->foreign('laporan_id')->references('laporan_id')->on('laporan');
            $table->enum('status_laporan', ['menunggu', 'selesai', 'proses', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_laporan');
    }
};
