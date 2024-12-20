<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <h1 class="text-4xl font-bold text-slate-500">Reservasi Saya</h1>
  <div class="flex flex-col bg-white p-5 rounded mt-4 shadow-lg">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tanggal Booking</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order Status</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status Pembayaran</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Total Harga</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($individus as $individu)
                @php
                  // Menentukan label status
                  $status = '';
                  $status_pembayaran = '';

                  if ($individu->status == 'baru') {
                      $status = '<span class="bg-blue-500 py-1 px-3 rounded text-white shadow">Baru</span>';
                  } elseif ($individu->status == 'proses') {
                      $status = '<span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">Proses</span>';
                  } elseif ($individu->status == 'sukses') {
                      $status = '<span class="bg-green-500 py-1 px-3 rounded text-white shadow">Sukses</span>';
                  } elseif ($individu->status == 'batal') {
                      $status = '<span class="bg-red-500 py-1 px-3 rounded text-white shadow">Batal</span>';
                  }

                  if ($individu->status_pembayaran == 'tertunda') {
                      $status_pembayaran = '<span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">Tertunda</span>';
                  } elseif ($individu->status_pembayaran == 'dibayar') {
                      $status_pembayaran = '<span class="bg-green-500 py-1 px-3 rounded text-white shadow">Dibayar</span>';
                  } elseif ($individu->status_pembayaran == 'gagal') {
                      $status_pembayaran = '<span class="bg-red-500 py-1 px-3 rounded text-white shadow">Gagal</span>';
                  }
                @endphp

                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800" wire:key='{{ $individu->id }}'>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $loop->iteration }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $individu->created_at->format('d-m-Y') }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{!! $status !!}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{!! $status_pembayaran !!}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Rp {{ number_format($individu->total, 2, ',', '.') }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <a href="/my-orders/{{ $individu->id }}" class="bg-slate-600 text-white py-2 px-4 rounded-md hover:bg-slate-500">View Details</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <!-- Pagination -->
      <div class="mt-5">
        {{ $individus->links('pagination::tailwind') }}
      </div>
    </div>
  </div>
</div>
