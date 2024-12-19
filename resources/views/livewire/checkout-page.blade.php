<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto shadow-xl mb-5">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
        Checkout
    </h1>
	<form wire:submit.prevent='placeOrder'>
		<div class="grid grid-cols-12 gap-4">
			<!-- Alamat Pemesan -->
			<div class="lg:col-span-6 col-span-12">
				<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
					<div class="mb-6">
						<h2 class="text-xl font-bold text-gray-800 dark:text-white mb-2">
							Alamat Pemesan
						</h2>
						<div class="grid grid-cols-2 gap-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="nama_awal">
									Nama Awal
								</label>
								<input wire:model='nama_awal' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('nama_awal') border-red-500 @enderror" id="nama_awal" type="text" />
								@error('nama_awal')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="nama_terakhir">
									Nama Terakhir
								</label>
								<input wire:model='nama_terakhir' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('nama_terakhir') border-red-500 @enderror" id="nama_terakhir" type="text" />
								@error('nama_terakhir')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="no_telepon">
								No Telepon
							</label>
							<input wire:model='no_telepon' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('no_telepon') border-red-500 @enderror" id="no_telepon" type="text" />
							@error('no_telepon')
								<div class="text-red-500 text-sm">{{ $message }}</div>
							@enderror
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="jalan">
									Jalan
								</label>
								<input wire:model='jalan' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('jalan') border-red-500 @enderror" id="jalan" type="text" />
								@error('jalan')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="desa">
									Desa
								</label>
								<input wire:model='desa' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('desa') border-red-500 @enderror" id="desa" type="text" />
								@error('desa')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="kecamatan">
									Kecamatan
								</label>
								<input wire:model='kecamatan' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('kecamatan') border-red-500 @enderror" id="kecamatan" type="text" />
								@error('kecamatan')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="kabupaten">
									Kabupaten
								</label>
								<input wire:model='kabupaten' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('kabupaten') border-red-500 @enderror" id="kabupaten" type="text" />
								@error('kabupaten')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="kode_pos">
									Kode Pos
								</label>
								<input wire:model='kode_pos' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('kode_pos') border-red-500 @enderror" id="kode_pos" type="text" />
								@error('kode_pos')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="provinsi">
									Provinsi
								</label>
								<input wire:model='provinsi' class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('provinsi') border-red-500 @enderror" id="provinsi" type="text" />
								@error('provinsi')
									<div class="text-red-500 text-sm">{{ $message }}</div>
								@enderror
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Alamat Pemesan -->
	
			<!-- Select Payment Method -->
			<div class="lg:col-span-6 col-span-12">
				<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
					<div class="text-lg font-semibold mb-4">
						Select Payment Method
					</div>
					<ul class="grid w-full gap-6 md:grid-cols-2">
						<li>
							<input wire:model='metode_pembayaran' class="hidden peer" id="hosting-small" required="" type="radio" value="cod" />
							<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-small">
								<div class="block">
									<div class="w-full text-lg font-semibold">
										<label for="cod">Cash on Delivery</label>
									</div>
								</div>
								<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
								</svg>
							</label>
						</li>
						<li>
							<input wire:model='metode_pembayaran' class="hidden peer" id="hosting-big" type="radio" value="tf" />
							<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-big">
								<div class="block">
									<div class="w-full text-lg font-semibold">
										<label for="tf">Transfer</label>
									</div>
								</div>
								<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewBox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
								</svg>
							</label>
						</li>
					</ul>
					@error('metode_pembayaran')
						<div class="text-red-500 text-sm">{{ $message }}</div>
					@enderror
				</div>
				<div class="">
                    <div class="bg-white rounded-lg shadow-md p-6">
						<h2 class="text-lg font-semibold mb-4">Ringkasan</h2>
						<div class="flex justify-between mb-2">
							<span>Jumlah Tiket</span>
							<span>{{ $summary['jumlah_tiket'] ?? 0 }}</span>
						</div>						
						<div class="flex justify-between mb-2">
							<span>Total Harga Tiket</span>
							<span>{{ number_format($summary['totalHargaTiket'] ?? 0, 0, ',', '.') }}</span>
						</div>
						<div class="flex justify-between mb-2">
							<span>Parkir Kendaraan</span>
							<span>{{ number_format($summary['hargaKendaraan'] ?? 0, 0, ',', '.') }}</span>
						</div>
						<hr class="my-2">
						<div class="flex justify-between mb-2">
							<span class="font-semibold">Total</span>
							<span class="font-semibold">{{ number_format($summary['totalFinal'] ?? 0, 0, ',', '.') }}</span>
						</div>
					</div>
                </div>
				<button type="submit" class="bg-green-500 mt-4 w-1/2 p-2 text-center rounded-lg text-lg text-white hover:bg-green-600 mx-auto block" wire:loading.attr="disabled">
					<span wire:lading.remove>Reservasi Sekarang</span>
					<span wire:loading>Sedang Memproses...</span>			
				</button>
			</div>
			<!-- End Select Payment Method -->
		</div>
	</form>
</div>

