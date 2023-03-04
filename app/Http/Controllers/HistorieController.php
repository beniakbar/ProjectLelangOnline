<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historie;
use App\Models\barang;
use App\Models\lelang;
use Illuminate\Support\Facades\auth;  

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
    public function create(historie $historie, Lelang $lelang, Barang $barang)
    {
        //
        $lelangs = Lelang::all();
        $histories = Historie::all();
        return view('lelang.penawaran', compact('lelangs', 'histories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,historie $historie, Lelang $lelang, Barang $barang)
    {
        $validatedData = $request->validate([
            'harga' => [
                'required',
                'numeric',
            ],
        ], 
        [
            'harga.required' => "Harga penawaran harus diisi",
            'harga.numeric' => "Harga penawaran harus berupa angka",
        ]);

        $historie = new Historie();
        $historie->lelang_id = $lelang->id;
        $historie->users_id = Auth::user()->id;
        $histories->barang_id = $lelang->barang->id;
        $historie->harga = $request->harga_penawaran;
        $historie->status = 'pending';
        $historie->save();

        return redirect()->route('lelang.penawaran', $lelang->id)->with('success', 'Anda Berhasil Menawar Barang Ini')->with('ucapan','');
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
