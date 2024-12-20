<?php

namespace App\Livewire;

use App\Models\Individu;
use Livewire\Component;
use Livewire\WithPagination;

class MyOrdersPage extends Component
{
    use WithPagination;

    public function render()
    {
        // Menggunakan query builder untuk mendapatkan data berdasarkan user_id
        $my_orders = Individu::where('user_id', auth()->id())->latest()->paginate(5);

        return view('livewire.my-orders-page', [
            'individus' => $my_orders,
        ]);
    }
}
