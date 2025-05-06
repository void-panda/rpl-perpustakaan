<?php

namespace App\Http\Controllers;

use App\Models\AnggotaNonSiswa;
use App\Http\Requests\StoreAnggotaNonSiswaRequest;
use App\Http\Requests\UpdateAnggotaNonSiswaRequest;

class AnggotaNonSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggota-nonsiswa.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota-nonsiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnggotaNonSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AnggotaNonSiswa $anggotaNonSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaNonSiswa $anggotaNonSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnggotaNonSiswaRequest $request, AnggotaNonSiswa $anggotaNonSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaNonSiswa $anggotaNonSiswa)
    {
        //
    }
}
