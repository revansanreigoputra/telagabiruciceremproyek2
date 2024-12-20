<div class="p-3 font-poppins">
    <div class="max-w-full mx-auto md:relative md:max-w-full">
        <div>
            <div class="md:w-9/12">
                <img class="w-full object-cover md:h-full rounded-lg md:max-w-3xl" src="{{ asset('img/5.jpg') }}" alt="Modern building architecture">
            </div>
        </div>
        <div class="relative p-8 md:absolute rounded-xl shadow-2xl md:max-w-2xl flex flex-col justify-center items-center -top-5 md:top-0 bottom-0 left-auto right-0 my-auto md:h-60">
            <!-- Layer Transparan Background -->
            <div class="absolute inset-0 bg-white opacity-50 rounded-lg"></div>

            <!-- Konten yang jelas -->
            <div class="relative z-10">
                <div class="uppercase tracking-wide text-xl text-indigo-500 font-semibold">Telaga Biru Cicerem</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-[#0d203c] hover:underline">Incredible accommodation for your team</a>
                <p class="my-3 text-black text-justify">
                  Telaga Biru di Cicerem merupakan sebuah destinasi alam yang menakjubkan di Jawa Barat, Indonesia. Telaga ini terkenal karena keindahan airnya yang jernih dan berwarna biru, yang menciptakan pemandangan yang memukau bagi para pengunjungnya.
                </p>
                {{-- <a href="#" class="btn border  border-gray-500 py-2 px-4 rounded-lg max-sm:text-center bg-[#0d203c] text-white transition duration-300 ease-in-out">Selengkapnya</a> --}}
            </div>
        </div>
    </div>
    

    {{-- berita info --}}
    <div class="container mx-auto mt-10">
      <div class="max-w-xl mx-auto">
        <div class="text-center ">
          <div class="relative flex flex-col items-center">
            <h1 class="text-5xl font-bold dark:text-gray-200"> Info <span class="text-blue-500"> Berita
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
          <p class="mb-12 text-lg text-center text-gray-500">
            Seputar Informasi Berita Telaga Biru Cicerem / Bumdes Arya Kamuning
          </p>
        </div>
      </div>

      {{-- konten berita --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="col-span-2 lg:col-span-3">
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                @foreach ($beritas->take(3) as $berita)
                  <div class="group hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-xl p-3 transition dark:hover:bg-white/10 dark:focus:bg-white/10" wire:key="{{ $berita->id }}">
                      <a href="#" class="">
                          <img alt="{{ $berita->judul }}" class="w-full h-48 object-cover rounded-xl" height="400" src="{{ url('storage', $berita->foto) }}" width="600"/>
                      </a>
                      <div class="p-3">
                          <h2 class="font-semibold dark:text-gray-300 text-lg mb-2 text-[#0d203c]">
                              {{ $berita->judul }}
                          </h2>
                          <p class="text-base text-gray-600 mb-4 text-justify">
                              {{ Str::limit($berita->isi, 120) }}
                          </p>                            
                          <div class="flex items-center space-x-2">
                              <img src="img/logo.png" alt="" class="w-9 h-9 rounded-full">
                              <div>
                                  <p class="text-[#0d203c] font-semibold text-base">Telaga Biru Cicerem</p>
                                  <p class="text-gray-500 text-sm">{{ $berita->created_at->translatedFormat('l, d F Y') }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach


              </div>
              <div class="flex justify-center mt-8">
                <a href="/berita" class="border hover:bg-white border-gray-500 hover:text-[#0d203c] py-2 px-8 rounded-lg max-sm:text-center bg-[#0d203c] text-white transition duration-300 ease-in-out">
                    Berita Lainnya
                </a>
            </div>
          </div>
      </div>
  </div>
  

  {{-- info spot --}}
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
      <div class="max-w-xl mx-auto">
        <div class="text-center">
          <div class="relative flex flex-col items-center">
            <h1 class="text-5xl font-bold dark:text-gray-200">Spot <span class="text-blue-500">Favorite</span></h1>
            <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
              <div class="flex-1 h-2 bg-blue-200"></div>
              <div class="flex-1 h-2 bg-blue-400"></div>
              <div class="flex-1 h-2 bg-blue-600"></div>
            </div>
          </div>
          <p class="mb-12 text-base text-center text-gray-500">
            Seputar informasi tentang spot foto yang ada di Telaga Biru Cicerem
          </p>
        </div>
      </div>
  
      <div class="grid grid-cols-1 md:grid-cols-5 gap-5">
        <!-- Mandalika -->
        <div class="relative bg-gray-800 text-white rounded-lg overflow-hidden group">
          <img 
            alt="Mandalika landscape" 
            class="w-full h-80 object-cover transition-transform duration-300 ease-in-out opacity-100 group-hover:scale-125 group-hover:opacity-50" 
            src="{{ asset('img/Ayunan_ganda.jpeg') }}" 
          />
          <div class="absolute inset-0 flex flex-col justify-center items-center p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h2 class="text-xl font-bold mb-2">Ayunan Ganda</h2>
            <p class="text-sm text-center">
              Ayunan ganda di Telaga Biru Cicerem memungkinkan dua orang menikmati pemandangan alam sambil bergoyang di atas air. Spot ini populer sebagai tempat foto untuk mengabadikan momen bersama teman atau keluarga, sambil merasakan udara segar dan keindahan sekitar.
            </p>
          </div>
        </div>
        
        <!-- Labuan Bajo -->
        <div class="relative bg-gray-800 text-white rounded-lg overflow-hidden group">
          <img 
            alt="Labuan Bajo landscape" 
            class="w-full h-80 object-cover transition-transform duration-300 ease-in-out opacity-100 group-hover:scale-125 group-hover:opacity-50" 
            src="{{ asset('img/Perahu_layar.jpeg') }}"
          />
          <div class="absolute inset-0 flex flex-col justify-center items-center p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h2 class="text-xl font-bold mb-2">Perahi Layar</h2>
            <p class="text-sm text-center">
              Perahu layar di Telaga Biru Cicerem menjadi simbol keindahan dan petualangan, menawarkan pengalaman damai di perairan tenang. Selain sebagai sarana transportasi, perahu ini memberikan momen tak terlupakan dengan panorama indah sekitarnya.
            </p>
          </div>
        </div>
        
        <!-- Likupang -->
        <div class="relative bg-gray-800 text-white rounded-lg overflow-hidden group">
          <img 
            alt="Likupang beach" 
            class="w-full h-80 object-cover transition-transform duration-300 ease-in-out opacity-100 group-hover:scale-125 group-hover:opacity-50" 
            src="{{ asset('img/Perahu.jpeg') }}"
          />
          <div class="absolute inset-0 flex flex-col justify-center items-center p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h2 class="text-xl font-bold mb-2">Perahu</h2>
            <p class="text-sm text-center">
              Perahu di Telaga Biru Cicerem, dengan desain khas dan elegan, mencerminkan warisan budaya Kuningan. Selain sebagai sarana transportasi, perahu ini menjadi daya tarik utama bagi pengunjung untuk menjelajahi keindahan telaga secara lebih dekat.
            </p>
          </div>
        </div>
        
        <!-- Danau Toba -->
        <div class="relative bg-gray-800 text-white rounded-lg overflow-hidden group">
          <img 
            alt="Danau Toba landscape" 
            class="w-full h-80 object-cover transition-transform duration-300 ease-in-out opacity-100 group-hover:scale-125 group-hover:opacity-50" 
            src="{{ asset('img/Ayunan_tunggal.jpeg') }}"
          />
          <div class="absolute inset-0 flex flex-col justify-center items-center p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h2 class="text-xl font-bold mb-2">Ayunan Tunggal</h2>
            <p class="text-sm text-center">
              Ayunan tunggal di Telaga Biru Cicerem menjadi salah satu daya tarik unik, memungkinkan pengunjung menikmati suasana tenang sambil berayun di atas air. Dengan desain sederhana namun estetik, ayunan ini menawarkan pengalaman santai yang menyatu dengan keindahan alam sekitar.
            </p>
          </div>
        </div>
        
        <!-- Borobudur -->
        <div class="relative bg-gray-800 text-white rounded-lg overflow-hidden group">
          <img 
            alt="Borobudur temple" 
            class="w-full h-80 object-cover transition-transform duration-300 ease-in-out opacity-100 group-hover:scale-125 group-hover:opacity-50" 
            src="{{ asset('img/Jembtan.jpeg') }}"
          />
          <div class="absolute inset-0 flex flex-col justify-center items-center p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h2 class="text-xl font-bold mb-2">Jembatan</h2>
            <p class="text-sm text-center">
              Jembatan elegan di Telaga Biru Cicerem menghubungkan dua sisi telaga, menawarkan pemandangan memukau. Pengunjung dapat menikmati angin lembut dan panorama alami dari berbagai sudut saat melintasinya.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- contact us --}}
  <div class="mcontainer mx-auto px-7 py-8">
    <div class="max-w-xl mx-auto">
      <div class="text-center">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold dark:text-gray-200">Kontak & <span class="text-blue-500">Alamat</span></h1>
          <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-blue-200"></div>
            <div class="flex-1 h-2 bg-blue-400"></div>
            <div class="flex-1 h-2 bg-blue-600"></div>
          </div>
        </div>
        <p class="mb-12 text-base text-center text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-6 md:gap-8 lg:gap-12">
      <div class="h-full w-full overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.080580063264!2d108.423092!3d-6.797796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f21e13b414561%3A0x9f9df80a24eac71f!2sTelaga%20Biru%20Cicerem!5e0!3m2!1sid!2sid!4v1715174701401!5m2!1sid!2sid" 
            allowfullscreen 
            loading="lazy" 
            class="rounded-2xl w-full h-full">
        </iframe>
      </div>

      <!-- End Col -->

      <div class="space-y-8 lg:space-y-16">
        <div>
          <h3 class="mb-5 font-semibold text-black dark:text-white">
            Alamat Kami
          </h3>

          <!-- Grid -->
          <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
            <div class="flex gap-4">
              <svg class="shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>

              <div class="grow">
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Desa Kaduela
                </p>
                <address class="mt-1 text-black not-italic dark:text-white">
                  Jl. Kaduela, Kaduela, Kec. Pasawahan, Kabupaten Kuningan, Jawa Barat 45559
                </address>
              </div>
            </div>
          </div>
          <!-- End Grid -->
        </div>

        <div>
          <h3 class="mb-5 font-semibold text-black dark:text-white">
            Kontak kami
          </h3>

          <!-- Grid -->
          <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
            <div class="flex gap-4">
              <svg class="shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path></svg>

              <div class="grow">
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Email
                </p>
                <p>
                  <a class="relative inline-block font-medium text-black dark:text-white dark:hover:before:bg-white dark:focus:before:bg-white" href="mailto:example@site.so">
                    telagabirucicerem@gmail.com
                  </a>
                </p>
              </div>
            </div>
            
            <div class="flex gap-4">
              <svg class="shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path d="M22.675 0h-21.35C.598 0 0 .6 0 1.333v21.333C0 23.4.598 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.414c0-3.1 1.894-4.788 4.66-4.788 1.325 0 2.462.1 2.794.144v3.24h-1.918c-1.504 0-1.794.714-1.794 1.76v2.308h3.587l-.467 3.622h-3.12V24h6.116c.728 0 1.325-.6 1.325-1.334V1.333C24 .6 23.402 0 22.675 0z"/>
              </svg>
              
              <div class="grow">
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Facebook
                </p>
                <p>
                  <a class="relative inline-block font-medium text-black dark:text-white dark:hover:before:bg-white dark:focus:before:bg-white" href="https://www.facebook.com/telaga.cicerem/?_rdc=2&_rdr" target="blank">
                    Telaga Biru Cicerem 
                  </a>
                </p>
              </div>
            </div>

            <div class="flex gap-4">
              <svg class="shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37a4 4 0 1 1-4.63-4.63 4 4 0 0 1 4.63 4.63z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
            </svg>
              
              <div class="grow">
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Instagram
                </p>
                <p>
                  <a class="relative inline-block font-medium text-black dark:text-white dark:hover:before:bg-white dark:focus:before:bg-white" href="https://www.instagram.com/telagabiruciceremofficial?igsh=MXc4ZnYydWVjYmwyeQ==" target="blank">
                    telagabiruciceremofficial 
                  </a>
                </p>
              </div>
            </div>

            <div class="flex gap-4">
              <svg class="shrink-0 size-5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>

              <div class="grow">
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Telepon
                </p>
                <p>
                  <a class="relative inline-block font-medium text-black dark:text-white dark:hover:before:bg-white dark:focus:before:bg-white" href="mailto:example@site.so">
                    +62 813 8766 6671
                  </a>
                </p>
              </div>
            </div>
          </div>
          <!-- End Grid -->
        </div>
      </div>
      <!-- End Col -->
    </div>
  </div>
  <!-- End Contact -->

  <!-- FAQ -->
  <div class="max-w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mt-8 mx-auto">
    <!-- Grid -->
    <div class="grid md:grid-cols-5 gap-10">
      <div class="md:col-span-2">
        <div class="max-w-xs">
          <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Frequently<br>asked questions</h2>
          <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">Answers to the most frequently asked questions.</p>
        </div>
      </div>
      <!-- End Col -->

      <div class="md:col-span-3">
        <!-- Accordion -->
        <div class="hs-accordion-group divide-y divide-gray-200 dark:divide-neutral-700">
          <div class="hs-accordion pb-3 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
              Berapa harga tiket masuk Telaga Biru Cicerem?
              <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
              <p class="text-gray-600 dark:text-neutral-400">
                Harga tiket masuk Telaga Biru Cicerem weekend dan weekdays sama Rp 15.000.
              </p>
            </div>
          </div>

          <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-two">
            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
              Dimana lokasi wisata Telaga Biru Cicerem?
              <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
              <p class="text-gray-600 dark:text-neutral-400">
                Jl. Kaduela, Kaduela, Kec. Pasawahan, Kabupaten Kuningan, Jawa Barat 45559
              </p>
            </div>
          </div>

          <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-three">
            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
              Saat hujan datang, apakah semua wahana akan ditutup?
              <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
              <p class="text-gray-600 dark:text-neutral-400">
                Demi keselamatan dan keamanan pengunjung, wahana akan diberhentikan sementara saat hujan datang.
              </p>
            </div>
          </div>

          <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-four">
            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
              Kenapa airnya bisa bewarna biru?
              <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
              <p class="text-gray-600 dark:text-neutral-400">
                Karena warna biru berasal dari zat kimia yang dilepaskan alga yang ada di dasar telaga secara terus menerus
              </p>
            </div>
          </div>

          {{-- <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-five">
            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
              How do I get access to a theme I purchased?
              <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
              <p class="text-gray-600 dark:text-neutral-400">
                If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a login or can't remember the information, you can use our handy Redownload page, just remember to use the same email you originally made your purchases with.
              </p>
            </div>
          </div>

          <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-six">
            <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
              Upgrade License Type
              <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
              <p class="text-gray-600 dark:text-neutral-400">
                There may be times when you need to upgrade your license from the original type you purchased and we have a solution that ensures you can apply your original purchase cost to the new license purchase.
              </p>
            </div>
          </div> --}}
        </div>
        <!-- End Accordion -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End FAQ -->

    {{-- costumer riview --}}
    {{-- <section class="py-12 pt-10 font-poppins dark:bg-gray-800 rounded-lg mt-5z">
      <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
        <div class="max-w-xl mx-auto">
          <div class="text-center ">
            <div class="relative flex flex-col items-center">
              <h1 class="text-5xl font-bold dark:text-gray-200"> Customer <span class="text-blue-500"> Reviews
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
            <p class="mb-12 text-base text-center text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
              Pariatur
              numquam, odio quod nobis ipsum ex cupiditate?
            </p>
          </div>
        </div>
    
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
          <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
              <div class="flex items-center px-6 mb-2 md:mb-0 ">
                <div class="flex mr-2 rounded-full">
                  <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                </div>
                <div>
                  <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                    Adren Roy</h2>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Web Designer</p>
                </div>
              </div>
              <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
              </p>
            </div>
            <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
              iure minus sed fugit obcaecati minima quam reiciendis dicta!
            </p>
            <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
              <div class="flex px-6 mb-2 md:mb-0">
                <ul class="flex items-center justify-start mr-4">
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                </ul>
                <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                    3.0</span>
                </h2>
              </div>
              <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                <div class="flex items-center">
                  <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                        </path>
                      </svg>
                    </a>
                    <span>12</span>
                  </div>
                  <div class="flex text-sm text-gray-700 dark:text-gray-400">
                    <a href="#" class="inline-flex hover:underline">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                        </path>
                      </svg>Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
              <div class="flex items-center px-6 mb-2 md:mb-0 ">
                <div class="flex mr-2 rounded-full">
                  <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                </div>
                <div>
                  <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                    Sonira Roy</h2>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Manager</p>
                </div>
              </div>
              <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
              </p>
            </div>
            <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
              iure minus sed fugit obcaecati minima quam reiciendis dicta!
            </p>
            <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
              <div class="flex px-6 mb-2 md:mb-0">
                <ul class="flex items-center justify-start mr-4">
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                </ul>
                <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                    3.0</span>
                </h2>
              </div>
              <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                <div class="flex items-center">
                  <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                        </path>
                      </svg></a>
                    <span>12</span>
                  </div>
                  <div class="flex text-sm text-gray-700 dark:text-gray-400">
                    <a href="#" class="inline-flex hover:underline">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                        </path>
                      </svg>Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
              <div class="flex items-center px-6 mb-2 md:mb-0 ">
                <div class="flex mr-2 rounded-full">
                  <img src="https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                </div>
                <div>
                  <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                    William harry</h2>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Marketing Officer</p>
                </div>
              </div>
              <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
              </p>
            </div>
            <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
              iure minus sed fugit obcaecati minima quam reiciendis dicta!
            </p>
            <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
              <div class="flex px-6 mb-2 md:mb-0">
                <ul class="flex items-center justify-start mr-4">
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                </ul>
                <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                    3.0</span>
                </h2>
              </div>
              <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                <div class="flex items-center">
                  <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                        </path>
                      </svg></a>
                    <span>12</span>
                  </div>
                  <div class="flex text-sm text-gray-700 dark:text-gray-400">
                    <a href="#" class="inline-flex hover:underline">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                        </path>
                      </svg>Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
              <div class="flex items-center px-6 mb-2 md:mb-0 ">
                <div class="flex mr-2 rounded-full">
                  <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                </div>
                <div>
                  <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                    James jack</h2>
                  <p class="text-xs text-gray-500 dark:text-gray-400">Java Programmer</p>
                </div>
              </div>
              <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
              </p>
            </div>
            <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
              iure minus sed fugit obcaecati minima quam reiciendis dicta!
            </p>
            <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
              <div class="flex px-6 mb-2 md:mb-0">
                <ul class="flex items-center justify-start mr-4">
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                      </svg>
                    </a>
                  </li>
                </ul>
                <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                    3.0</span>
                </h2>
              </div>
              <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                <div class="flex items-center">
                  <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                        </path>
                      </svg></a>
                    <span>12</span>
                  </div>
                  <div class="flex text-sm text-gray-700 dark:text-gray-400">
                    <a href="#" class="inline-flex hover:underline">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                        </path>
                      </svg>Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
</div>
