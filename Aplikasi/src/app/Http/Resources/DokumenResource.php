<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DokumenResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'jenis_dokumen' => $this->jenis_dokumen,
            'url_dokumen' => $this->url_dokumen
        ];
    }
}
