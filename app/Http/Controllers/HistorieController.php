<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historie;
use App\Models\lelang;
use App\Models\barang;

class HistorieController extends Controller
{
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(historie $historie, Lelang $lelang)
    {
        //
        $lelangs = Lelang::find($lelang->id);
        $historie = historie::orderBy('harga', 'desc')->get()->where('lelang_id',$lelang->id);
        return view('lelang.penawaran', compact('lelangs', 'historie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,historie $historie, Lelang $lelang, Barang $barang)
    {
       
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historie  $historie
     * @return \Illuminate\Http\Response
     */
    public function show(historie $historie)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historie  $historie
     * @return \Illuminate\Http\Response
     */
    public function edit(historie $historie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historie  $historie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historie $historie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historie  $historie
     * @return \Illuminate\Http\Response
     */
    public function destroy(historie $historie)
    {
        $historie->delete();
        return redirect()->route('datapenawar.index');
    }
}
