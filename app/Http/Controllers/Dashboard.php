<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\lelang;
use App\Models\barang;
use App\Models\user;
use App\Models\historie;


class Dashboard extends Controller
{
    //
    public function admin()
    {
        $barangs = Barang::all();
        $users = User::all();
        $historie = historie::all();
        $lelangs = Lelang::all();
  
        return view('dashboard.admin', compact('lelangs','barangs','users','historie'));
    }

    public function petugas()
    {
        $barangs = Barang::all();
        $lelangs = Lelang::all();
        $historie = historie::all();
        return view('dashboard.petugas', compact('lelangs','barangs','historie'));
    }

    public function masyarakat(lelang $lelang)
    {
        $lelangs =  Lelang::all();
        return view('dashboard.masyarakat', compact('lelangs',));
    }
}
