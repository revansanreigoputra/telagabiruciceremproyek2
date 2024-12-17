<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\PriceCalculator;

class CartPage extends Component
{
    public $jumlah_tiket = 0;
    public $kendaraan = '';
    public $tanggal_kedatangan = null;
    public $total = 0;
    public $hargaKendaraan = 0;
    public $totalFinal = 0;

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['jumlah_tiket', 'kendaraan'])) {
            $this->updateTotal();
        }
    }

    public function updateTotal()
    {
        $result = PriceCalculator::calculateTotal($this->jumlah_tiket, $this->kendaraan);
        $this->total = $result['totalHargaTiket'];
        $this->hargaKendaraan = $result['hargaKendaraan'];
        $this->totalFinal = $result['totalFinal'];
    }

    public function save()
    {
    $this->validate([
        'jumlah_tiket' => 'required|integer|min:1',
        'kendaraan' => 'required|string|in:roda_dua,roda_empat,bus',
        'tanggal_kedatangan' => 'required|date',
    ]);

    $this->updateTotal();

    session()->put('checkout_summary', [
        'jumlah_tiket' => $this->jumlah_tiket,
        'kendaraan' => $this->kendaraan,
        'totalHargaTiket' => $this->total,
        'hargaKendaraan' => $this->hargaKendaraan,
        'totalFinal' => $this->totalFinal,
        'tanggal_kedatangan' => $this->tanggal_kedatangan,
    ]);

    session()->flash('message', 'Data berhasil disimpan. Silakan lanjut ke halaman checkout!');
    return redirect('/checkout');
    }


    public function render()
    {
        return view('livewire.cart-page');
    }
}
