<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PendaftaranResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'beasiswa_id' => $this->beasiswa_id,
            'nama_pendaftar' => $this->nama_pendaftar,
            'nilai_akademik' => $this->nilai_akademik,
            'prestasi_non_akademik' => $this->prestasi_non_akademik,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
            'dokumens' => DokumenResource::collection($this->whenLoaded('dokumens'))
        ];
    }
}
