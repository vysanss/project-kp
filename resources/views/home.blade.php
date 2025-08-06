<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
      window.addEventListener('beforeunload', function() {
        window.scrollTo(0, 0);
      });
      window.addEventListener('load', function() {
        window.scrollTo(0, 0);
      });
    </script>
    <title>Satpol PP Tasikmalaya</title>
  </head>
  <body class="h-full">
    <div class="min-h-full">
      <x-navbar></x-navbar>
      <x-banner
      
      />
      
      <main>
        <section class="bg-white py-16 sm:py-20">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Menu Navigation Cards -->
            <div class="mb-16">
              <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Informasi Utama</h2>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Tentang Kami -->
                <a href="{{ url('/tentangkami') }}" class="rounded-xl shadow-lg bg-blue-50 hover:bg-blue-100 transition-all duration-300 hover:shadow-xl p-6 flex flex-col items-center text-center group">
                  <div class="mb-4">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                    </div>
                    <span class="inline-block bg-blue-900 text-white rounded-full px-4 py-2 text-lg font-bold">Tentang Kami</span>
                  </div>
                  <p class="text-gray-700 text-sm">
                    Sejarah, visi misi, dan profil lengkap Satpol PP Kota Tasikmalaya dalam melayani masyarakat.
                  </p>
                </a>
                
                <!-- Struktur Organisasi -->
                <a href="{{ url('/strukturorganisasi') }}" class="rounded-xl shadow-lg bg-blue-50 hover:bg-blue-100 transition-all duration-300 hover:shadow-xl p-6 flex flex-col items-center text-center group">
                  <div class="mb-4">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                      </svg>
                    </div>
                    <span class="inline-block bg-blue-900 text-white rounded-full px-4 py-2 text-lg font-bold">Struktur Organisasi</span>
                  </div>
                  <p class="text-gray-700 text-sm">
                    Bagan organisasi dan hierarki kepemimpinan dalam struktur Satpol PP Kota Tasikmalaya.
                  </p>
                </a>
                
                <!-- Tupoksi -->
                <a href="{{ url('/tupoksi') }}" class="rounded-xl shadow-lg bg-blue-50 hover:bg-blue-100 transition-all duration-300 hover:shadow-xl p-6 flex flex-col items-center text-center group">
                  <div class="mb-4">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                      </svg>
                    </div>
                    <span class="inline-block bg-blue-900 text-white rounded-full px-4 py-2 text-lg font-bold">Tupoksi</span>
                  </div>
                  <p class="text-gray-700 text-sm">
                    Tugas pokok dan fungsi serta wewenang Satpol PP dalam menegakkan peraturan daerah.
                  </p>
                </a>
              </div>
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Berita -->
                <a href="{{ url('/berita') }}" class="rounded-xl shadow-lg bg-green-50 hover:bg-green-100 transition-all duration-300 hover:shadow-xl p-6 flex flex-col items-center text-center group">
                  <div class="mb-4">
                    <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"></path>
                      </svg>
                    </div>
                    <span class="inline-block bg-green-700 text-white rounded-full px-4 py-2 text-lg font-bold">Berita & Kegiatan</span>
                  </div>
                  <p class="text-gray-700 text-sm">
                    Informasi terkini tentang kegiatan operasional dan program kerja Satpol PP Kota Tasikmalaya.
                  </p>
                </a>
                
                <!-- Layanan -->
                <a href="{{ url('/layanan') }}" class="rounded-xl shadow-lg bg-purple-50 hover:bg-purple-100 transition-all duration-300 hover:shadow-xl p-6 flex flex-col items-center text-center group">
                  <div class="mb-4">
                    <div class="w-16 h-16 bg-purple-700 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                      <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h4a1 1 0 011 1v5m-6 0h6"></path>
                      </svg>
                    </div>
                    <span class="inline-block bg-purple-700 text-white rounded-full px-4 py-2 text-lg font-bold">Layanan Publik</span>
                  </div>
                  <p class="text-gray-700 text-sm">
                    Berbagai layanan yang dapat diakses masyarakat untuk keperluan perizinan dan pelaporan.
                  </p>
                </a>
              </div>
            </div>

            <!-- News Highlights -->
            <div class="mb-16">
              <h2 class="text-2xl font-bold text-gray-900 mb-8">Berita Terbaru</h2>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
                  <div class="h-48 bg-gray-200 rounded-t-lg flex items-center justify-center">
                    <span class="text-gray-500">Foto Kegiatan</span>
                  </div>
                  <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Operasi Tertib PKL di Kawasan Pusat Kota</h3>
                    <p class="text-gray-600 text-sm mb-2">Tim Satpol PP melakukan operasi penertiban pedagang kaki lima untuk menciptakan ketertiban...</p>
                    <div class="text-xs text-gray-500">3 hari yang lalu</div>
                  </div>
                </article>
                
                <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
                  <div class="h-48 bg-gray-200 rounded-t-lg flex items-center justify-center">
                    <span class="text-gray-500">Foto Kegiatan</span>
                  </div>
                  <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Sosialisasi Perda kepada Masyarakat</h3>
                    <p class="text-gray-600 text-sm mb-2">Kegiatan sosialisasi peraturan daerah dilakukan untuk meningkatkan kesadaran masyarakat...</p>
                    <div class="text-xs text-gray-500">1 minggu yang lalu</div>
                  </div>
                </article>
                
                <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
                  <div class="h-48 bg-gray-200 rounded-t-lg flex items-center justify-center">
                    <span class="text-gray-500">Foto Kegiatan</span>
                  </div>
                  <div class="p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Patroli Keamanan dan Ketertiban</h3>
                    <p class="text-gray-600 text-sm mb-2">Patroli rutin dilakukan untuk menjaga keamanan dan ketertiban di wilayah Kota Tasikmalaya...</p>
                    <div class="text-xs text-gray-500">2 minggu yang lalu</div>
                  </div>
                </article>
              </div>
              <div class="text-center mt-6">
                <a href="{{ url('/berita') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-900 hover:bg-blue-800 transition">
                  Lihat Semua Berita
                  <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div>

            <!-- Content Previews -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
              <!-- Tentang Kami Preview -->
              <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Tentang Satpol PP Tasikmalaya</h3>
                <p class="text-gray-600 mb-4">
                  Satuan Polisi Pamong Praja Kota Tasikmalaya adalah unsur pelaksana Pemerintah Daerah di bidang ketertiban umum, perlindungan masyarakat, dan penegakan Peraturan Daerah.
                </p>
                <div class="space-y-3">
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-600">Penegakan Peraturan Daerah</p>
                  </div>
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-600">Penyelenggaraan Ketertiban Umum</p>
                  </div>
                  <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                      <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <p class="text-sm text-gray-600">Perlindungan Masyarakat</p>
                  </div>
                </div>
                <a href="{{ url('/tentangkami') }}" class="inline-flex items-center text-blue-700 hover:text-blue-800 font-medium mt-4">
                  Selengkapnya
                  <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>

              <!-- Layanan Preview -->
              <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Layanan Kami</h3>
                <p class="text-gray-600 mb-4">
                  Berbagai layanan publik yang dapat diakses masyarakat untuk mendukung terciptanya ketertiban dan kenyamanan bersama.
                </p>
                <div class="grid grid-cols-1 gap-3">
                  <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                      <span class="text-white text-sm font-bold">1</span>
                    </div>
                    <div>
                      <p class="font-medium text-gray-900">Perizinan Keramaian</p>
                      <p class="text-sm text-gray-600">Izin penyelenggaraan acara</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                      <span class="text-white text-sm font-bold">2</span>
                    </div>
                    <div>
                      <p class="font-medium text-gray-900">Pelaporan Gangguan</p>
                      <p class="text-sm text-gray-600">Laporan ketertiban umum</p>
                    </div>
                  </div>
                  <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                      <span class="text-white text-sm font-bold">3</span>
                    </div>
                    <div>
                      <p class="font-medium text-gray-900">Konsultasi Perda</p>
                      <p class="text-sm text-gray-600">Informasi peraturan daerah</p>
                    </div>
                  </div>
                </div>
                <a href="{{ url('/layanan') }}" class="inline-flex items-center text-blue-700 hover:text-blue-800 font-medium mt-4">
                  Lihat Semua Layanan
                  <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </a>
              </div>
            </div>

            <!-- Contact and Location -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8">
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                  <h3 class="text-2xl font-bold text-blue-900 mb-4">Hubungi Kami</h3>
                  <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                      <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <div>
                        <p class="font-medium text-gray-900">Alamat</p>
                        <p class="text-gray-600">Jl. Yudanegara No. 25, Tasikmalaya, Jawa Barat</p>
                      </div>
                    </div>
                    <div class="flex items-start space-x-3">
                      <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                      </svg>
                      <div>
                        <p class="font-medium text-gray-900">Telepon</p>
                        <p class="text-gray-600">(0265) 123456</p>
                      </div>
                    </div>
                    <div class="flex items-start space-x-3">
                      <svg class="w-6 h-6 text-blue-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                      <div>
                        <p class="font-medium text-gray-900">Jam Operasional</p>
                        <p class="text-gray-600">Senin - Jumat: 08:00 - 16:00 WIB</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-blue-900 mb-4">Layanan Darurat</h3>
                  <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                      </svg>
                      <div>
                        <p class="font-bold text-red-800">Hotline Darurat</p>
                        <p class="text-red-700 text-lg font-bold">0811-2345-678</p>
                      </div>
                    </div>
                  </div>
                  <p class="text-gray-600">
                    Untuk pelaporan insiden yang memerlukan tindakan segera, silakan hubungi hotline darurat kami yang beroperasi 24 jam.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    <x-footer></x-footer>
  </body>
</html>
