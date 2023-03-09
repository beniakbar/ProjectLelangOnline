<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historie;
use App\Models\barang;
use App\Models\lelang;
use App\Models\user;
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
    public function create(historie $historie, lelang $lelang, Barang $barang)
    {
        //
        $lelang = lelang::find($lelang->id);
        $histories = Historie::orderBy('harga', 'desc')->get()->where('lelang_id', $lelang->id);
        return view('lelang.penawaran', compact('lelang', 'histories'));
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

        //  dd($historie);
        $historie = new Historie();
        $historie->lelang_id = $lelang->id;
        $historie->barang_id = $lelang->barang->id;
        $historie->harga = $request->harga;
        $historie->users_id = Auth::user()->id;
        $historie->status = 'pending';
        $historie->save();
        return redirect()->route('historie.create', $lelang->id)->with('success', 'Anda Berhasil Menawar Barang Ini');
    }

    public function setPemenang(Lelang $lelang, $id)
    {
    // Mengambil data history lelang berdasarkan id
    $historie = historie::find($id);

    // Mengubah status pada history lelang menjadi 'pemenang'
    $historie->status = 'pemenang';
    $historie->save();

    // Mengambil data lelang berdasarkan history lelang
    $lelang = $historie->lelang;

    // Mengubah status pada lelang menjadi 'ditutup'
    $lelang->status = 'ditutup';
    $lelang->pemenang = $historie->user->name;
    $lelang->harga_akhir = $historie->harga;

    $histories = historie::where('lelang_id', $historie->lelang_id)
    ->where('status', 'pending')
    ->where('id', '<>', $historie->id)
    ->update(['status' => 'gugur']);

    $lelang->save();

    return redirect()->back()->with('success', 'Pemenang berhasil dipilih!');
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
