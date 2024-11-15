<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kriteria', 'kuota', 'nilai'
    ];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
