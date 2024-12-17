<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Home Page - telagabirucicerem')]
class HomePage extends Component {
    public function render() {
        $beritas = Berita::where('is_active', 1)->get();
        return view('livewire.home-page', [
            'beritas' => $beritas
        ]);
    }
}
