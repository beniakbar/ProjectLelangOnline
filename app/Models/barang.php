<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lelang;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'nama_barang',
        'tanggal',
        'harga_awal',
        'deskripsi_barang',
        'image'
    ];

    public function lelang()
    {
        return $this->belongsTo(lelang::class);
    }
    public function histories()
    {
        return $this->belongsTo(histories::class);
    }
}