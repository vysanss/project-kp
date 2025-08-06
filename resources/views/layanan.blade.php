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
    <title>Layanan - Satpol PP Tasikmalaya</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <main>
            <section class="py-8 md:py-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 lg:p-12">
                        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">
                            Layanan Satpol PP Kota Tasikmalaya
                        </h1>
                        <p class="text-lg text-gray-700 leading-relaxed text-center mb-10 max-w-3xl mx-auto">
                            Berikut adalah layanan utama yang disediakan oleh Satuan Polisi Pamong Praja Kota Tasikmalaya.
                        </p>
                        <div class="flex flex-col lg:flex-row gap-8">
                            <div class="flex-1">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                                    <!-- Kartu Layanan 1 -->
                                    <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col items-center h-full transform hover:scale-105 transition-transform duration-200">
                                        <div class="bg-blue-100 text-blue-600 rounded-full p-4 mb-4">
                                            <!-- Icon: Shield -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l8 4v5c0 5.25-3.5 9.75-8 11-4.5-1.25-8-5.75-8-11V7l8-4z" />
                                            </svg>
                                        </div>
                                        <h2 class="text-xl font-semibold mb-2 text-center">Penegakan Perda & Perkada</h2>
                                        <p class="text-gray-600 text-center">
                                            Melaksanakan penegakan Peraturan Daerah dan Peraturan Kepala Daerah untuk menjaga ketertiban umum dan ketentraman masyarakat.
                                        </p>
                                    </div>
                                    <!-- Kartu Layanan 2 -->
                                    <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col items-center h-full transform hover:scale-105 transition-transform duration-200">
                                        <div class="bg-green-100 text-green-600 rounded-full p-4 mb-4">
                                            <!-- Icon: Users -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 3.13a4 4 0 010 7.75M8 3.13a4 4 0 000 7.75" />
                                            </svg>
                                        </div>
                                        <h2 class="text-xl font-semibold mb-2 text-center">Ketertiban Umum & Ketentraman</h2>
                                        <p class="text-gray-600 text-center">
                                            Menjaga dan memelihara ketertiban umum serta memberikan perlindungan kepada masyarakat di wilayah Kota Tasikmalaya.
                                        </p>
                                    </div>
                                    <!-- Kartu Layanan 3 -->
                                    <div class="bg-gray-50 rounded-lg shadow p-6 flex flex-col items-center h-full transform hover:scale-105 transition-transform duration-200">
                                        <div class="bg-yellow-100 text-yellow-600 rounded-full p-4 mb-4">
                                            <!-- Icon: Bell Alert -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 7.165 6 9.388 6 12v2.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                            </svg>
                                        </div>
                                        <h2 class="text-xl font-semibold mb-2 text-center">Pengaduan & Tindak Lanjut</h2>
                                        <p class="text-gray-600 text-center">
                                            Menerima dan menindaklanjuti laporan atau pengaduan masyarakat terkait pelanggaran ketertiban umum dan Perda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Kontak -->
                            <div class="w-full lg:w-80 xl:w-96 flex-shrink-0">
                                <div class="bg-gradient-to-br from-blue-50 to-white border border-gray-200 rounded-lg shadow-lg p-6 h-full sticky top-8">
                                    <div class="bg-blue-500 text-white rounded-full p-3 mb-4">
                                        <!-- Icon: Phone -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm10-10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 10a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold mb-2 text-center">Kontak Satpol PP</h3>
                                    <ul class="text-gray-700 text-sm space-y-2 w-full">
                                        <li class="flex items-center gap-2">
                                            <span class="font-semibold">Telepon:</span>
                                            <span>(0265) 331891</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-semibold">Email:</span>
                                            <span>satpolpp@tasikmalayakota.go.id</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span class="font-semibold">Alamat:</span>
                                            <span>Jl. Ir. H. Juanda No. 191, Kota Tasikmalaya</span>
                                        </li>
                                    </ul>
                                    <a href="mailto:satpolpp@tasikmalayakota.go.id" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded transition">
                                        Kirim Email
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <x-footer />
    
    <script>
        // Auto scroll to top on page load/refresh
        window.addEventListener('load', function() {
            window.scrollTo(0, 0);
        });
        
        // Scroll to top before page unload (for refresh)
        window.addEventListener('beforeunload', function() {
            window.scrollTo(0, 0);
        });
        
        // Force scroll to top immediately
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }
        window.scrollTo(0, 0);
    </script>
</body>
</html>
