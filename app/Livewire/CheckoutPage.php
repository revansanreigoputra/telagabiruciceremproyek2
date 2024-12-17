<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Individu;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;
use App\Models\Alamat;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CheckoutPage extends Component
{
    public $nama_awal;
    public $nama_terakhir;
    public $no_telepon;
    public $jalan;
    public $desa;
    public $kecamatan;
    public $kabupaten;
    public $kode_pos;
    public $provinsi;
    public $metode_pembayaran;
    public $summary;

    public function mount()
    {
        $this->summary = session('checkout_summary', []);

        if (empty($this->summary)) {
            return redirect()->route('cart')->with('message', 'Silakan kembali ke halaman ini untuk melanjutkan.');
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'nama_awal' => 'required|max:255',
            'nama_terakhir' => 'required|max:255',
            'no_telepon' => 'required|max:15',
            'jalan' => 'required|max:255',
            'desa' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kabupaten' => 'required|max:255',
            'kode_pos' => 'required|numeric|digits_between:5,10',
            'provinsi' => 'required|max:255',
            'metode_pembayaran' => 'required|in:transfer,cod',
        ]);

        // Simpan data ke tabel `individus`
        $individu = Individu::create([
            'user_id' => auth()->id(),
            'jumlah_tiket' => $this->summary['jumlah_tiket'] ?? 0,
            'kendaraan' => $this->summary['kendaraan'] ?? 'roda_dua',
            'tanggal_kedatangan' => $this->summary['tanggal_kedatangan'] ?? null,
            'total' => $this->summary['totalFinal'] ?? 0,
            'metode_pembayaran' => $this->metode_pembayaran,
            'status_pembayaran' => 'tertunda',
            'status' => 'baru',
        ]);

        // Simpan data ke tabel `alamats`
        Alamat::create([
            'individu_id' => $individu->id,
            'nama_awal' => $this->nama_awal,
            'nama_terakhir' => $this->nama_terakhir,
            'no_telepon' => $this->no_telepon,
            'jalan' => $this->jalan,
            'desa' => $this->desa,
            'kecamatan' => $this->kecamatan,
            'kabupaten' => $this->kabupaten,
            'kode_pos' => $this->kode_pos,
            'provinsi' => $this->provinsi,
        ]);

        // Logika untuk menentukan redirect URL berdasarkan metode pembayaran
        $redirect_url = '';
        if ($this->metode_pembayaran == 'tf') {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $line_items = [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Pesanan Anda',
                        ],
                        'unit_amount' => $this->summary['totalFinal'] * 100, // Konversi ke cents
                    ],
                    'quantity' => 1,
                ],
            ];

            $sessionCheckout = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => auth()->user()->email,
                'line_items' => $line_items,
                'mode' => 'payment',
                'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('cancel'),
            ]);

            $redirect_url = $sessionCheckout->url;
        } else {
            $redirect_url = route('success');
        }

        // Reset session checkout
        session()->forget('checkout_summary');

        Mail::to(request()->user())->send(new OrderPlaced($individu));

        // Redirect ke URL yang sesuai
        return redirect($redirect_url)->with('message', 'Pesanan berhasil diproses!');
    }

    public function render()
    {
        return view('livewire.checkout-page', ['summary' => $this->summary]);
    }
}
