<?php

namespace App\Http\Controllers;

use App\Models\AnggotaSiswa;
use App\Http\Requests\StoreAnggotaSiswaRequest;
use App\Http\Requests\UpdateAnggotaSiswaRequest;

class AnggotaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggota-siswa.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota-siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnggotaSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AnggotaSiswa $anggotaSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaSiswa $anggotaSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnggotaSiswaRequest $request, AnggotaSiswa $anggotaSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaSiswa $anggotaSiswa)
    {
        //
    }
}
