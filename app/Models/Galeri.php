<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'slug', 'foto', 'judul', 'is_active'];
    
    protected $casts = [
        'foto' => 'array'
    ];

    // public function galeri() {
    //     return $this->belongsTo(Galeri::class);
    // }
    
}
