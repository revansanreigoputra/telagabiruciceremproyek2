<?php

use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\BeritaPage;
use App\Livewire\CancelPage;
use App\Livewire\SuccessPage;
use App\Livewire\GaleriPage;
use App\Livewire\HomePage;
use App\Livewire\CartPage;
use App\Livewire\CheckoutPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\PetaPage;
use App\Livewire\PilihTiketPage;
use App\Livewire\SejarahPage;
use App\Livewire\StrukturPage;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

// Berita detail route
Route::get('/berita/{id}', function ($id) {
    $berita = Berita::findOrFail($id); // Mengambil berita berdasarkan ID
    return view('livewire.berita-detail', compact('berita'));  // Memperbaiki nama tampilan
});

// Public routes
Route::get('/', HomePage::class);
Route::get('/peta', PetaPage::class);
Route::get('/struktur', StrukturPage::class);
Route::get('/sejarah', SejarahPage::class);
Route::get('/berita', BeritaPage::class);
Route::get('/galeri', GaleriPage::class);
Route::get('/pilih', PilihTiketPage::class);

// Routes for guest users
Route::middleware('guest')->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class);
    Route::get('/forgot', ForgotPasswordPage::class)->name('password.request');
    Route::get('/reset{token}', ResetPasswordPage::class)->name('password.reset');
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    })->name('logout');

    Route::get('/cart', CartPage::class)->name('cart');
    Route::get('/checkout', CheckoutPage::class)->name('checkout');
    Route::get('/my-orders', MyOrdersPage::class)->name('my-orders');
    Route::get('/my-orders/{order}', MyOrderDetailPage::class)->name('my-orders.show');
    Route::get('/success', SuccessPage::class)->name('success');
    Route::get('/cancel', CancelPage::class)->name('cancel');
});
