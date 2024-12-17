<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Berita Page - telagabirucicerem')]
class BeritaPage extends Component{
    public function render(){
        $beritas = Berita::where('is_active', 1)->get();
        return view('livewire.berita-page', [
            'beritas' => $beritas
        ]);
    }
}
