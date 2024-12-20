<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">Reservasi Detail</h1>
  
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-5">
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">
                Nama
              </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <div>{{ $alamat->full_name }}</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 22h14" />
              <path d="M5 2h14" />
              <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
              <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">
                Order Date
              </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">
                {{ $individu->created_at->format('d-m-Y') }}
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
              <path d="m12 12 4 10 1.7-4.3L22 16Z" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">
                Status Order
              </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              @php
                $status = '';

                  if ($individu->status == 'baru') {
                      $status = '<span class="bg-blue-500 py-1 px-3 rounded text-white shadow">Baru</span>';
                  } elseif ($individu->status == 'proses') {
                      $status = '<span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">Proses</span>';
                  } elseif ($individu->status == 'sukses') {
                      $status = '<span class="bg-green-500 py-1 px-3 rounded text-white shadow">Sukses</span>';
                  } elseif ($individu->status == 'batal') {
                      $status = '<span class="bg-red-500 py-1 px-3 rounded text-white shadow">Batal</span>';
                  }  
              @endphp
              <span class="">{!! $status !!}</span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
              <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
              <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
              <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
            </svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500">
                Status Pembayaran
              </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              @php
                  // Menentukan label status
                  $status_pembayaran = '';
                  if ($individu->status_pembayaran == 'tertunda') {
                      $status_pembayaran = '<span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">Tertunda</span>';
                  } elseif ($individu->status_pembayaran == 'dibayar') {
                      $status_pembayaran = '<span class="bg-green-500 py-1 px-3 rounded text-white shadow">Dibayar</span>';
                  } elseif ($individu->status_pembayaran == 'gagal') {
                      $status_pembayaran = '<span class="bg-red-500 py-1 px-3 rounded text-white shadow">Gagal</span>';
                  }
                @endphp
              <span class="">{!! $status_pembayaran !!}</span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  
    <div class="flex flex-col md:flex-row gap-4 mt-4">
      <div class="md:w-1/2">
        <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
          <h1 class="font-3xl font-bold text-slate-500 mb-3">Alamat Penamnggungjawab</h1>
          <div class="flex justify-between items-center">
            <div>
              <p>{{ $individu->alamat->desa }}, {{ $individu->alamat->kecamatan }}, {{ $individu->alamat->kabupaten }}, {{ $individu->alamat->provinsi }}, {{ $individu->alamat->kode_pos }}</p>
            </div>
            <div>
              <p class="font-semibold">Phone:</p>
              <p>{{ $individu->alamat->no_telepon }}</p>
            </div>
          </div>
        </div>
  
      </div>
      <div class="md:w-1/2">
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-lg font-semibold mb-4">Ringkasan</h2>
          <div class="flex justify-between mb-2">
            <span>Jumlah Tiket</span>
            <span>{{ $individu->jumlah_tiket }}</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Tanggal Kedatangan</span>
            <span>{{ $individu->tanggal_kedatangan->format('d-m-Y') }}</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Jenis Kendaraan</span>
            <span>{{ $individu->kendaraan }}</span>
          </div>
  
        </div>
      </div>
    </div>
  </div>