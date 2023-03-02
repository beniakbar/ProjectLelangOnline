<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\lelang;
use App\Models\barang;
use App\Models\user;
use App\Models\histories;


class Dashboard extends Controller
{
    //
    public function admin()
    {
        $barangs = Barang::all();
        $users = User::all();
        $lelangs = Lelang::all();
  
        return view('dashboard.admin', compact('lelangs','barangs','users'));
    }

    public function petugas()
    {
        $barangs = Barang::all();
        $users = User::all();
        $lelangs = Lelang::all();
        $histories = Histories::all();
        $histories = Histories::orderBy('harga', 'desc')->get();
        return view('dashboard.petugas', compact('histories','lelangs','barangs','users'));
    }

    public function masyarakat(lelang $lelang)
    {
        $lelangs =  Lelang::all();
        return view('dashboard.masyarakat', compact('lelangs',));
    }
}
