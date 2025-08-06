@php
    $currentPath = request()->path();
    $categories = [
        ['name' => 'Berita', 'url' => '/berita'],
        ['name' => 'Artikel', 'url' => '/artikel'],
        ['name' => 'Produk Hukum', 'url' => '/produk-hukum'],
        ['name' => 'Dokumen Evaluasi', 'url' => '/dokumen-evaluasi'],
        ['name' => 'Dokumen Perencanaan', 'url' => '/dokumen-perencanaan'],
    ];
@endphp

<div class="mb-8">
    <div class="flex flex-wrap justify-center gap-3">
        @foreach($categories as $category)
            @php
                $isActive = $currentPath === ltrim($category['url'], '/');
            @endphp
            <a href="{{ url($category['url']) }}" 
               class="px-6 py-3 rounded-lg font-medium text-sm transition-all duration-300 transform hover:scale-105 
                      {{ $isActive 
                         ? 'bg-[#0D0D8C] text-white shadow-lg' 
                         : 'bg-white text-gray-700 hover:bg-[#0D0D8C] hover:text-white shadow-md hover:shadow-lg' 
                      }}">
                {{ $category['name'] }}
            </a>
        @endforeach
    </div>
</div>