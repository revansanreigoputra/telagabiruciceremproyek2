<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = ['individu_id', 'nama_awal', 'nama_terakhir', 'no_telepon', 'jalan', 'desa', 'kecamatan', 'kabupaten', 'kode_pos', 'provinsi'];

    public function user() {
        return $this->belongsTo(User::class); 
    }

    public function getFullNameAttribute() {
        return "{$this->nama_awal} {$this->nama_terakhir}";
    }

}
