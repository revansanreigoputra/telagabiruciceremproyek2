<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Individu extends Model
{
    protected $fillable = [
        'user_id', 
        'metode_pembayaran', 
        'status_pembayaran', 
        'status', 
        'jumlah_tiket', 
        'total', 
        'kendaraan',  //  kendaraan
        'tanggal_kedatangan' //  tanggal kedatangan
    ];
    
    protected $casts = [
        'jumlah_tiket' => 'float',
        'total' => 'float',
        'tanggal_kedatangan' => 'date', // Cast tanggal kedatangan sebagai date
    ];    

    // Harga per kendaraan
    private $hargaKendaraan = [
        'roda_dua' => 2000,
        'roda_empat' => 5000,
        'bus' => 10000
    ];

    // Harga tiket per unit
    private $harga_tiket = 15000;

    // Mutator untuk menghitung total
    public function setJumlahTiketAttribute($value)
    {
        $this->attributes['jumlah_tiket'] = $value;

        // Hitung total: (jumlah_tiket * harga_tiket) + harga kendaraan
        $kendaraan = $this->attributes['kendaraan'] ?? 'roda_dua'; // Default ke roda dua
        $hargaKendaraan = $this->hargaKendaraan[$kendaraan];
        $this->attributes['total'] = ($value * $this->harga_tiket) + $hargaKendaraan;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function alamat(){
        return $this->hasOne(Alamat::class);
    }
}
