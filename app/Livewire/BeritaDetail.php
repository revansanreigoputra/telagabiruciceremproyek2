<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita;

class BeritaDetail extends Component
{
    public $beritaId;
    public $berita;

    public function mount($beritaId)
    {
        $this->beritaId = $beritaId;
        $this->berita = Berita::findOrFail($this->beritaId);
    }

    public function render()
    {
        return view('livewire.berita-detail', [
            'berita' => $this->berita,
        ]);
    }
}
