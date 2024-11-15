<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Http\Resources\BeasiswaResource;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        return BeasiswaResource::collection(Beasiswa::all());
    }

    public function show($id)
    {
        return new BeasiswaResource(Beasiswa::with('pendaftarans')->findOrFail($id));
    }
}
