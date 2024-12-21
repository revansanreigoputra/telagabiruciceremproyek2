<div class="max-w-full">
    <!-- Kategori -->
    <div class="flex justify-center space-x-4 mt-4 overflow-x-auto whitespace-nowrap w-full px-4">
        <button 
            wire:click="filterByCategory('All')" 
            class="{{ $activeCategory === 'All' ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-gray-700' }} px-3 py-2 rounded-md transition-colors duration-200">
            All
        </button>
        @foreach($galeris->pluck('nama')->unique() as $category)
            <button 
                wire:click="filterByCategory('{{ $category }}')" 
                class="{{ $activeCategory === $category ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-gray-700' }} px-3 py-2 rounded-md transition-colors duration-200">
                {{ $category }}
            </button>
        @endforeach
    </div>

    <!-- Galeri -->
    <div class="bg-gray-50 py-10">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-semibold tracking-tight text-gray-900 text-center mb-8">
                Momen terbaik kami melalui koleksi foto yang mengabadikan cerita dan kenangan istimewa.
            </h2>

            <div class="grid grid-cols-1 gap-y-8 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @forelse($galeris as $galeri)
                    <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="aspect-w-4 aspect-h-3 w-full overflow-hidden rounded-t-lg bg-gray-200 group-hover:opacity-90">
                            @if($galeri->foto)
                                <img src="{{ Storage::url(is_array($galeri->foto) ? $galeri->foto[0] : json_decode($galeri->foto, true)[0]) }}" 
                                     alt="{{ $galeri->judul }}" 
                                     class="object-cover w-full h-full">
                            @else
                                <img src="https://via.placeholder.com/300x200?text=No+Image" 
                                     alt="No Image Available" 
                                     class="object-cover w-full h-full">
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 truncate">
                                {{ $galeri->nama }}
                            </h3>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $galeri->judul ?: 'Deskripsi tidak tersedia' }}
                            </p>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">Tidak ada galeri untuk kategori ini.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
