<?php

namespace App\Livewire;

use App\Models\Individu;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class SuccessPage extends Component
{

    public $session_id;

    public function render()
    {

        $latest_order = Individu::with('alamat')->where('user_id', auth()->user()->id)->latest()->first();

        if($this->session_id){
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $session_info = Session::retrieve($this->session_id);

            if($session_info->status_pembayaran != 'paid'){
                $latest_order->status_pembayaran = 'failed';
                $latest_order->save();
                return redirect()->route('cancel');
            }else if($session_info->status_pembayaran == 'paid'){
                $latest_order->status_pembayaran = 'paid';
                $latest_order->save();
            }

        }

        return view('livewire.success-page', [
            'individu' => $latest_order,
        ]);
    }
}
