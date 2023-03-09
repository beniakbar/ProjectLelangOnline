<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historie;
use PDF;

class ReportController extends Controller
{

    public function cetakpemenang(Request $request)
    {
        // Ambil data dari database
        $histories = Historie::orderBy('harga', 'desc')->get()->where('status','pemenang');
        $pdf = PDF::loadview('cetak',['cetakpemenang' => $histories]);

        $pdf->setPaper('A4', 'potrait');
        // Format data
        return $pdf->stream('cetakpemenang.pdf');
    }

}
