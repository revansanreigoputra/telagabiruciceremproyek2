<?php

namespace App\Helpers;

class PriceCalculator
{
    public static function calculateTotal($jumlahTiket, $jenisKendaraan)
    {
        $hargaPerorangan = 15000;
        $hargaKendaraan = [
            'roda_dua' => 2000,
            'roda_empat' => 5000,
            'bus' => 10000,
        ];

        $totalHargaTiket = $hargaPerorangan * $jumlahTiket;
        $hargaKendaraanDipilih = $hargaKendaraan[$jenisKendaraan] ?? 0;

        return [
            'totalHargaTiket' => $totalHargaTiket,
            'hargaKendaraan' => $hargaKendaraanDipilih,
            'totalFinal' => $totalHargaTiket + $hargaKendaraanDipilih,
        ];
    }
}
