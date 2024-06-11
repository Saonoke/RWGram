<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailLaporan extends Model
{
    use HasFactory;

    protected $table = "detail_laporan";
    protected $primaryKey = "detail_laporan_id";

    protected $fillable = [
        'detail_laporan_id',
        'laporan_id',
        'status_laporan',
    ];

    public function laporan(): BelongsTo
    {
        return $this->belongsTo(LaporanModel::class, 'laporan_id', 'laporan_id');
    }
}
