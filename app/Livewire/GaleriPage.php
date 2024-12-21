<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Galeri;

class GaleriPage extends Component
{
    public $galeris;
    public $activeCategory = 'All';

    public function mount()
    {
        $this->galeris = Galeri::where('is_active', true)->get();
    }

    public function filterByCategory($category)
    {
        $this->activeCategory = $category;

        if ($category === 'All') {
            $this->galeris = Galeri::where('is_active', true)->get();
        } else {
            $this->galeris = Galeri::where('is_active', true)->where('nama', $category)->get();
        }
    }

    public function render()
    {
        return view('livewire.galeri-page');
    }
}
