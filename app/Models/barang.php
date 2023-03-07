<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lelang;
use App\Models\historie;
use App\Models\user;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'users_id',
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
    public function historie()
    {
        return $this->hasMany(historie::class);
    }
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
}
