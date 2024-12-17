<div>
    <!-- Wrapper Root Element -->
    <div>
        <!-- Blog Article -->
        <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
            <div class="max-w-2xl">
                <!-- Avatar Media -->
                <div class="flex justify-between items-center mb-6">
                    <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                        <div class="shrink-0">
                            <img class="size-[46px] border-2 border-white rounded-full transition-transform duration-500 group-hover:scale-110" src="{{ asset('img/logo.png') }}" alt="Logo">
                        </div>

                        <div class="grow">
                            <div class="flex justify-between items-center gap-x-2">
                                <div class="sm:mb-1 block text-start cursor-pointer">
                                    <span class="font-semibold text-gray-800 dark:text-neutral-200">
                                        {{ $berita->judul }}
                                    </span>
                                </div>

                                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        {{ $berita->created_at->format('M d') }}
                                    </li>
                                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        8 min read
                                    </li>
                                </ul>
                            </div>

                            <!-- Button Group -->
                            <div>
                                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                    <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                    Tweet
                                </button>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>
                </div>
                <!-- End Avatar Media -->

                <!-- Content -->
                <div class="space-y-5 md:space-y-8">
                    <h2 class="text-2xl font-bold md:text-3xl dark:text-white">{{ $berita->judul }}</h2>

                    <!-- Menampilkan gambar jika ada -->
                    @if($berita->foto)
                        <figure>
                            <img class="w-full object-cover rounded-xl" src="{{ asset('storage/' . $berita->foto) }}" alt="Gambar Berita">
                            <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
                                {{ $berita->judul }}
                            </figcaption>
                        </figure>
                    @endif

                    <p class="text-lg text-gray-800 dark:text-neutral-200">
                        {{ $berita->isi }}
                    </p>
                </div>
                <!-- End Content -->
            </div>
        </div>
        <!-- End Blog Article -->

        <!-- Sticky Share Group -->
        <div class="sticky bottom-6 inset-x-0 text-center">
            <div class="inline-block bg-white shadow-md rounded-full py-3 px-4 dark:bg-neutral-800">
                <div class="flex items-center gap-x-1.5">
                    <button type="button" class="flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                        </svg>
                        875
                    </button>
                    <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>
                    <button type="button" class="flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
                        </svg>
                        16
                    </button>
                </div>
            </div>
        </div>
        <!-- End Sticky Share Group -->
    </div>
</div>
