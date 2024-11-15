<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BeasiswaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'kriteria' => $this->kriteria,
            'kuota' => $this->kuota,
            'nilai' => $this->nilai,
            'pendaftarans' => PendaftaranResource::collection($this->whenLoaded('pendaftarans'))
        ];
    }
}
