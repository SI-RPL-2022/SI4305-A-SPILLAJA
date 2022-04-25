<?php

namespace App\Http\Controllers;

use App\Models\Perundungan;
use Illuminate\Http\Request;

class PerundunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perundungan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = new Perundungan();
 
        $flight->nama = $request->nama;
        $flight->email = $request->email;
        $flight->judul = $request->judul;
        $flight->nomor = $request->nomor;
        $flight->peristiwa = $request->peristiwa;
 
        $flight->save();
        return redirect('/beranda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perundungan  $perundungan
     * @return \Illuminate\Http\Response
     */
    public function show(Perundungan $perundungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perundungan  $perundungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perundungan $perundungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perundungan  $perundungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perundungan $perundungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perundungan  $perundungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perundungan $perundungan)
    {
        //
    }
}
