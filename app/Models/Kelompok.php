<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'total', 'metode_pembayaran', 'status_pembayaran', 'status', 'jumlah'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function alamat() {
        return $this->belongsTo(Alamat::class);
    }
}
