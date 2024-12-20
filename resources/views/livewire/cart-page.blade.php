<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Pembelian Tiket</h1>

        <!-- Add a success message to show after saving -->
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded-md">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="save">
            @csrf
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-3/4">
                    <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left font-semibold">Tipe Tiket</th>
                                    <th class="text-left font-semibold">Harga Perorangan</th>
                                    <th class="text-left font-semibold">Jumlah Tiket</th>
                                    <th class="text-left font-semibold">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-4">
                                        <div class="flex text-center items-center">
                                            <span class="">Tiket Perorangan</span>
                                        </div>
                                    </td>
                                    <td class="py-4 harga-perorangan">15.000</td>
                                    <td class="py-4">
                                        <!-- Input Number -->
                                        <div class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-lg dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                                            <div class="flex items-center gap-x-1.5">
                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                    </svg>
                                                </button>
                                                <input wire:model="jumlah_tiket" name="jumlah_tiket" class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 jumlah-tiket" style="-moz-appearance: textfield;" type="number" value="0" data-hs-input-number-input="">
                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5v14"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Input Number -->
                                    </td>
                                    <td class="py-4 total-harga" wire:model="total">{{ number_format($total, 0, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Tanggal Kedatangan -->
                        <div class="mt-4">
                            <label for="tanggal-kedatangan" class="block text-sm font-semibold text-black">Tanggal Kedatangan</label>
                            <input wire:model="tanggal_kedatangan" name="tanggal_kedatangan" type="date" id="tanggal-kedatangan" 
                                   class="mt-1 block w-full p-2 h-12 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        </div>
                        <!-- Jenis Kendaraan -->
                        <div class="mt-4">
                            <label for="jenis-kendaraan" class="block text-sm font-semibold text-black">Jenis Kendaraan</label>
                            <select wire:model="kendaraan" name="jenis_kendaraan" id="jenis-kendaraan" 
                                    class="mt-1 block w-full p-2 h-12 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    <option value="" disabled selected>Pilih Kendaraan</option>
                                    <option value="roda_dua">Roda Dua</option>
                                    <option value="roda_empat">Roda Empat</option>
                                    <option value="bus">Bus</option>
                            </select>
                        </div>
                        <!-- Checkbox -->
                        {{-- <div class="mt-4">
                            <label class="inline-flex items-center">
                                <input name="syarat_dan_ketentuan" type="checkbox" 
                                       class="form-checkbox rounded text-blue-600 focus:ring-blue-500 focus:ring-2 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-700">Saya setuju dengan <a href="#" class="text-blue-500 hover:underline">Syarat dan Ketentuan</a> serta Kebijakan Privasi Telaga Biru Cicerem</span>
                            </label>
                        </div> --}}
                    </div>
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold mb-4">Ringkasan</h2>
                        {{-- <div class="flex justify-between mb-2">
                            <span>Jumlah Tiket</span>
                            <span>{{ $jumlah_tiket }}</span>
                        </div>                         --}}
                        <div class="flex justify-between mb-2">
                            <span>Total Harga</span>
                            <span id="total-harga-ringkasan" wire:model="total">{{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Parkir Kendaraan</span>
                            <span id="harga-kendaraan" wire:model="hargaKendaraan">{{ number_format($hargaKendaraan, 0, ',', '.') }}</span>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold" id="total-final" wire:model="total">{{ number_format($totalFinal, 0, ',', '.') }}</span>
                        </div>
                        <button type="submit" class="bg-blue-500 block text-center text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    // Script lama tetap digunakan
    document.addEventListener('DOMContentLoaded', function() {
        var hargaPerorangan = 15000;
        var hargaKendaraan = {
            'roda_dua': 2000,
            'roda_empat': 5000,
            'bus': 10000
        };

        function updateTotalHarga() {
            var jumlahTiket = parseInt(document.querySelector('.jumlah-tiket').value) || 0;
            var totalHargaTiket = hargaPerorangan * jumlahTiket;
            document.querySelector('.total-harga').textContent = totalHargaTiket.toLocaleString('id-ID');
            var jenisKendaraan = document.getElementById('jenis-kendaraan').value;
            var hargaKendaraanDipilih = hargaKendaraan[jenisKendaraan] || 0;
            document.getElementById('harga-kendaraan').textContent = hargaKendaraanDipilih.toLocaleString('id-ID');
            var totalFinal = totalHargaTiket + hargaKendaraanDipilih;
            document.getElementById('total-final').textContent = totalFinal.toLocaleString('id-ID');
            document.getElementById('total-harga-ringkasan').textContent = totalHargaTiket.toLocaleString('id-ID');
        }

        document.querySelector('.jumlah-tiket').addEventListener('input', updateTotalHarga);
        document.getElementById('jenis-kendaraan').addEventListener('change', updateTotalHarga);
        updateTotalHarga();
    });
</script>
