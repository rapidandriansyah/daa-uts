<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Http\Resources\PendaftaranResource;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return PendaftaranResource::collection(Pendaftaran::all());
    }

    public function show($id)
    {
        return new PendaftaranResource(Pendaftaran::with('dokumens')->findOrFail($id));
    }
}
