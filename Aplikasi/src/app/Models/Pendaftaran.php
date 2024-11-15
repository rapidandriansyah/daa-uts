<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'beasiswa_id', 'nama_pendaftar', 'nilai_akademik', 'prestasi_non_akademik', 'tanggal_pendaftaran'
    ];

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }

    public function dokumens()
    {
        return $this->hasMany(Dokumen::class);
    }
}
