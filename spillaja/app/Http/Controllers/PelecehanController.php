<?php

namespace App\Http\Controllers;

use App\Models\Pelecehan;
use Illuminate\Http\Request;

class PelecehanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('pelecehan');
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
        $flight = new Pelecehan();
 
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
     * @param  \App\Models\Pelecehan  $pelecehan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelecehan $pelecehan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelecehan  $pelecehan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelecehan $pelecehan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelecehan  $pelecehan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelecehan $pelecehan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelecehan  $pelecehan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelecehan $pelecehan)
    {
        //
    }
}
