<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Individu;

class MyOrderDetailPage extends Component
{
    public $individu_id;

    public function mount($individu_id)
    {
        $this->individu_id = $individu_id;
    }

    public function render()
    {
        // Menggunakan relasi untuk mendapatkan alamat terkait
        $individu = Individu::with('alamat')->find($this->individu_id);

        if (!$individu) {
            abort(404, 'Individu tidak ditemukan.');
        }

        return view('livewire.my-order-detail-page', [
            'individu' => $individu,
            'alamat' => $individu->alamat ?? null, // Menggunakan relasi
        ]);
    }
}
