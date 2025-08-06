<nav class="bg-[#0D0D8C] sticky top-0 z-50" x-data="{ isOpen: false }" x-init="
    const handleResize = () => {
        if (window.innerWidth >= 768) {
            isOpen = false;
        }
    };
    window.addEventListener('resize', handleResize);
    $nextTick(() => {
        return () => window.removeEventListener('resize', handleResize);
    });
">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <a href="{{ url('/') }}">
            <img src="{{ asset('img/logo-Pol-PP-png.webp') }}" alt="Satpol PP Tasikmalaya" class="h-10 w-10 object-contain" />
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="{{ url('/') }}" 
               class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('/') ? 'bg-[#2020a9] text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
               Beranda
            </a>
            
            <!-- Profil Dropdown -->
            <div class="relative" x-data="{ profilOpen: false }">
              <button @click="profilOpen = !profilOpen" 
                      class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('tentangkami') || request()->is('strukturorganisasi') || request()->is('tupoksi') ? 'bg-[#2020a9] text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} flex items-center">
                Profil
                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              
              <div x-show="profilOpen" 
                   x-transition:enter="transition ease-out duration-100 transform"
                   x-transition:enter-start="opacity-0 scale-95"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-75 transform"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-95"
                   @click.away="profilOpen = false"
                   class="absolute left-0 z-10 mt-2 w-48 origin-top-left rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                <a href="{{ url('/tentangkami') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('tentangkami') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Tentang kami
                </a>
                <a href="{{ url('/strukturorganisasi') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('strukturorganisasi') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Struktur Organisasi
                </a>
                <a href="{{ url('/tupoksi') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('tupoksi') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Tupoksi
                </a>
                <a href="{{ url('/maklumatpelayanan') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('maklumatpelayanan') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Maklumat Pelayanan
                </a>
                <a href="{{ url('/profilpimpinan') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('profilpimpinan') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Profil Pimpinan
                </a>
              </div>
            </div>
            
            <!-- Informasi Dropdown -->
            <div class="relative" x-data="{ informasiOpen: false }">
              <button @click="informasiOpen = !informasiOpen" 
                      class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('berita') || request()->is('artikel') || request()->is('produk-hukum') || request()->is('dokumen-evaluasi') || request()->is('dokumen-perencanaan') ? 'bg-[#2020a9] text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} flex items-center">
                Informasi
                <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              
              <div x-show="informasiOpen" 
                   x-transition:enter="transition ease-out duration-100 transform"
                   x-transition:enter-start="opacity-0 scale-95"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-75 transform"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-95"
                   @click.away="informasiOpen = false"
                   class="absolute left-0 z-10 mt-2 w-48 origin-top-left rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                <a href="{{ url('/berita') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('berita') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Berita
                </a>
                <a href="{{ url('/artikel') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('artikel') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Artikel
                </a>
                <a href="{{ url('/produk-hukum') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('produk-hukum') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Produk Hukum
                </a>
                <a href="{{ url('/dokumen-evaluasi') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('dokumen-evaluasi') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Dokumen Evaluasi
                </a>
                <a href="{{ url('/dokumen-perencanaan') }}" 
                   class="block px-4 py-2 text-sm {{ request()->is('dokumen-perencanaan') ? 'bg-gray-100 text-gray-900 font-medium' : 'text-gray-700 hover:bg-gray-100' }}">
                   Dokumen Perencanaan
                </a>
              </div>
            </div>
            
            <a href="{{ url('/layanan') }}" 
               class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('layanan') ? 'bg-[#2020a9] text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
               Layanan
            </a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div
              x-show="isOpen"
              x-transition:enter="transition ease-out duration-100 transform"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75 transform"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              role="menu"
              tabindex="-1"
              aria-labelledby="user-menu-button"
              aria-orientation="vertical"
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
            >
            </div>
          </div>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="isOpen = !isOpen" aria-controls="mobile-menu" aria-expanded="false" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!-- Menu open: "hidden", Menu closed: "block" -->
          <svg :class="{'hidden': isOpen, 'block': !isOn }" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="block size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <!-- Menu open: "block", Menu closed: "hidden" -->
          <svg :class="{'block': isOpen, 'hidden': !isOn }" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="hidden size-6">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div x-show="isOpen" id="mobile-menu" class="md:hidden">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <a href="{{ url('/') }}" 
         class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
         Beranda
      </a>
      
      <!-- Mobile Profil Dropdown -->
      <div x-data="{ mobileProfilOpen: false }">
        <button @click="mobileProfilOpen = !mobileProfilOpen" 
                class="w-full text-left rounded-md px-3 py-2 text-base font-medium {{ request()->is('tentangkami') || request()->is('strukturorganisasi') || request()->is('tupoksi') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} flex items-center justify-between">
          Profil
          <svg :class="{'rotate-180': mobileProfilOpen}" class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        
        <div x-show="mobileProfilOpen" x-transition class="pl-6 space-y-1">
          <a href="{{ url('/tentangkami') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('tentangkami') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Tentang kami
          </a>
          <a href="{{ url('/strukturorganisasi') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('strukturorganisasi') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Struktur Organisasi
          </a>
          <a href="{{ url('/tupoksi') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('tupoksi') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Tupoksi
          </a>
          <a href="{{ url('/maklumatpelayanan') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('maklumatpelayanan') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Maklumat Pelayanan
          </a>
          <a href="{{ url('/profilpimpinan') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('profilpimpinan') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Profil Pimpinan
          </a>
        </div>
      </div>
      
      <!-- Mobile Informasi Dropdown -->
      <div x-data="{ mobileInformasiOpen: false }">
        <button @click="mobileInformasiOpen = !mobileInformasiOpen" 
                class="w-full text-left rounded-md px-3 py-2 text-base font-medium {{ request()->is('berita') || request()->is('artikel') || request()->is('produk-hukum') || request()->is('dokumen-evaluasi') || request()->is('dokumen-perencanaan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} flex items-center justify-between">
          Informasi
          <svg :class="{'rotate-180': mobileInformasiOpen}" class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        
        <div x-show="mobileInformasiOpen" x-transition class="pl-6 space-y-1">
          <a href="{{ url('/berita') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('berita') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Berita
          </a>
          <a href="{{ url('/artikel') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('artikel') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Artikel
          </a>
          <a href="{{ url('/produk-hukum') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('produk-hukum') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Produk Hukum
          </a>
          <a href="{{ url('/dokumen-evaluasi') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('dokumen-evaluasi') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Dokumen Evaluasi
          </a>
          <a href="{{ url('/dokumen-perencanaan') }}" 
             class="block rounded-md px-3 py-2 text-sm font-medium {{ request()->is('dokumen-perencanaan') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
             Dokumen Perencanaan
          </a>
        </div>
      </div>
      
      <a href="{{ url('/layanan') }}" 
         class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
         Layanan
      </a>
    </div>
  </div>
</nav>
