<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <title>Produk Hukum - Satpol PP Tasikmalaya</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .filter-tab.active {
            background-color: #0D0D8C;
            color: #fff;
        }
        .filter-tab.active:hover {
            background-color: #2020a9;
            color: #fff;
        }
    </style>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <main>
            <!-- Breadcrumb Section -->
            <div class="relative bg-gradient-to-br from-[#0D0D8C] to-[#2020a9] text-white py-12 container mx-auto max-w-6xl rounded-2xl shadow-xl overflow-hidden mt-6 h-80">
                
                <div class="relative px-6 lg:px-12 h-full flex flex-col justify-center z-10">
                    <!-- Breadcrumb -->
                    <div class="flex items-center justify-center lg:justify-start mb-6 hidden md:flex" aria-label="breadcrumb">
                        <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-full px-5 py-2 border border-white/20">
                            <a href="{{ url('/') }}" class="flex items-center space-x-2 text-gray-200 hover:text-white transition-all duration-300 group">
                                <div class="p-1.5 bg-white/20 rounded-full group-hover:bg-white/40 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3">
                                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-sm">Beranda</span>
                            </a>
                            <div class="w-px h-4 bg-gray-300"></div>
                            <span class="text-white font-medium text-sm">Produk Hukum</span>
                        </div>
                    </div>

                    <!-- Hero Title Section -->
                    <div class="text-center lg:text-left max-w-4xl mx-auto lg:mx-0">
                        <div class="mb-4">
                            <h1 class="text-2xl lg:text-4xl font-black mb-2 leading-tight tracking-tight">
                                <span class="block text-white">Daftar Produk Hukum</span>
                                <span class="block text-yellow-300 animate-pulse">
                                    Satpol PP Tasikmalaya
                                </span>
                            </h1>
                        </div>

                        <!-- Subtitle with Icon -->
                        <div class="flex items-center justify-center lg:justify-start space-x-4 mb-4">
                            <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-xl px-4 py-2 border border-white/20">
                                <div class="p-1.5 bg-yellow-300/20 rounded-full hidden md:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-yellow-300">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                        <path d="M8 7h8"></path>
                                        <path d="M8 11h8"></path>
                                        <path d="M8 15h6"></path>
                                    </svg>
                                </div>
                                <p class="text-sm lg:text-base text-gray-200 font-medium">
                                    Satuan Polisi Pamong Praja Kota Tasikmalaya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Background Pattern - Moved to top layer -->
                <div class="absolute inset-0 opacity-30 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-200/50 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-yellow-300/40 rounded-full translate-y-12 -translate-x-12"></div>
                    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-yellow-200/60 rounded-full transform -translate-y-1/2 animate-pulse"></div>
                    <div class="absolute bottom-1/4 right-1/3 w-12 h-12 bg-yellow-400/50 rounded-full animate-pulse animation-delay-2000"></div>
                </div>
            </div>
            <!-- Content Section -->
            <section class="py-12 bg-gray-50">
                <div class="container mx-auto max-w-6xl px-4">
                    <form method="GET" action="{{ url('/produk-hukum') }}">
                        <x-infocategory />
                        <div class="flex flex-col md:flex-row gap-4 items-center justify-center mb-6">
                            <div class="relative w-full">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk hukum..." class="w-full px-4 py-3 pr-11 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0D0D8C] focus:border-[#0D0D8C] transition" autocomplete="off">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#0D0D8C] text-white px-4 py-2 rounded-md hover:bg-[#2020a9] transition-all duration-300 shadow-md cursor-pointer">
                                        Cari
                                    </button>
                                </div>
                            </div>
                            <div>
                                <select name="year" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0D0D8C] focus:border-[#0D0D8C]">
                                    <option value="">Semua Tahun</option>
                                    @php $currentYear = date('Y'); @endphp
                                    @for($year = $currentYear; $year >= 2020; $year--)
                                        <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </form>
                    <!-- Table List Produk Hukum -->
                    <div class="overflow-x-auto bg-white rounded-xl shadow">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Judul</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Tahun</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Unduh</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @for($i = 1; $i <= 5; $i++)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Peraturan Daerah No.{{ $i }} Tahun 20{{ 20+$i }} tentang Ketertiban Umum</td>
                                    <td class="px-6 py-4 whitespace-nowrap">20{{ 20+$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-blue-600 hover:underline flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M7 10l5 5 5-5M12 15V3"></path>
                                            </svg>
                                            Unduh
                                        </a>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
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
