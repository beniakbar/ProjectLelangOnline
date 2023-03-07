<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\lelang;
use App\Models\barang;

class historie extends Model
{
    use HasFactory;
    protected $table = 'histories';
    protected $fillable = [
        'lelang_id',
        'user_id',
        'barang_id',
        'nama_barang',
        'harga',
        'tanggal',
        'status'
    ];
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    public function lelang()
    {
        return $this->hasOne('App\Models\lelang', 'id', 'lelang_id', 'status');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
