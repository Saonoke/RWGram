<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuanPendudukModel extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_penduduk';
    protected $primaryKey = 'pengajuan_penduduk_id';
    protected $fillable = [
        'rt_id',
        'NKK',
        'no_telepon',
        'NIK',
        'nama_penduduk',
        'tanggal_lahir',
        'status_perkawinan',
        'jenis_kelamin',
        'golongan_darah',
        'tempat_lahir',
        'alamat',
        'agama',
        'pekerjaan',
        'status_pengajuan',
        'status_tinggal',
        'tanggal_laporan',
        'pesan'
    ];

}
