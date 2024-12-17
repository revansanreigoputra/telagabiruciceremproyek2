  <div class="max-w-full mx-auto p-4">
   <header class="text-center mb-3 bg-gray-100 rounded-2xl w-full px-4 py-8">
    <div class="mx-auto">
        <div class="text-center ">
          <div class="relative flex flex-col items-center">
            <h1 class="text-5xl font-bold dark:text-gray-200"> Ragam <span class="text-blue-500"> Berita
              </span> </h1>
            <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
              <div class="flex-1 h-2 bg-blue-200">
              </div>
              <div class="flex-1 h-2 bg-blue-400">
              </div>
              <div class="flex-1 h-2 bg-blue-600">
              </div>
            </div>
          </div>
          <p class="mb-5 text-base text-center text-gray-500">
            Seputar Informasi Ragam BUMDesa Arya Kamuning
          </p>
        </div>
      </div>
      <div class="text-center mx-auto relative mt-4 w-3/5">
        <!-- Pencarian -->
        <div class="relative">
          <input 
            type="text" 
            placeholder="Pencarian" 
            class="w-full p-2 pl-10 rounded-full border border-gray-300" 
          />
          <!-- Ikon pencarian dalam input -->
          <svg 
            xmlns="http://www.w3.org/2000/svg" 
            class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke="currentColor"
          >
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M21 21l-4.35-4.35m2.6-7.45a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0z" 
            />
          </svg>
        </div>
      </div>      
   </header>

   {{--  --}}
   <!-- Card Blog -->
   <div class="py-10 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid lg:grid-cols-2 gap-6">
      @foreach ($beritas as $berita)
      <a class="group relative block rounded-xl focus:outline-none overflow-hidden transition-transform transform" href="{{ url('/berita/'.$berita->id) }}">
          <div class="relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70 transition-all duration-500 group-hover:before:from-gray-900/40">
              <img class="size-full absolute top-0 start-0 object-cover transition-transform duration-500 group-hover:scale-110" src="{{ url('storage', $berita->foto) }}" alt="{{ $berita->judul }}">
          </div>

          <div class="absolute top-0 inset-x-0 z-10">
              <div class="p-4 flex flex-col h-full sm:p-6">
                  <!-- Avatar -->
                  <div class="flex items-center">
                      <div class="shrink-0">
                          <img class="size-[46px] border-2 border-white rounded-full transition-transform duration-500 group-hover:scale-110" src="img/logo.png" alt="Logo">
                      </div>
                      <div class="ms-2.5 sm:ms-4">
                          <h4 class="font-semibold text-white">
                              Telaga Biru Cicerem
                          </h4>
                          <p class="text-xs text-white/80">
                              {{ $berita->created_at->translatedFormat('l, d F Y') }}
                          </p>
                      </div>
                  </div>
                  <!-- End Avatar -->
              </div>
          </div>

          <div class="absolute bottom-0 inset-x-0 z-10">
              <div class="flex flex-col h-full p-4 sm:p-6">
                  <h3 class="text-lg sm:text-3xl font-semibold text-white transition-colors duration-500 group-hover:text-white/80 group-focus:text-white/80">
                      {{ $berita->judul }}
                  </h3>
                  <p class="mt-2 text-white/80 transition-opacity duration-500 group-hover:opacity-90">
                      {{ Str::limit($berita->isi, 120) }}
                  </p>
              </div>
          </div>
      </a>
      @endforeach
    </div>
    <!-- End Grid -->
  </div>  
<!-- End Card Blog -->
  </div>