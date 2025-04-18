@extends('fronts.app')
@section('title', $title)


@section('content')
    <!-- Hero Section -->
    <section class="hero-gradient text-white">
        <div class="container mx-auto px-4 py-20 md:py-28">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Jakarta Hijau, Jakarta Bersih</h1>
                <p class="text-xl md:text-2xl mb-8">Bersama kita wujudkan lingkungan hidup yang berkelanjutan untuk ibu kota tercinta</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="bg-white text-primary-700 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-300">Layanan</a>
                    <a href="#" class="bg-transparent border-2 border-white font-semibold px-6 py-3 rounded-lg hover:bg-white hover:text-primary-700 transition duration-300">Informasi Publik</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="bg-white py-12 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <a href="#" class="bg-gray-50 p-6 rounded-xl flex flex-col items-center text-center hover:bg-primary-50 transition duration-300 group">
                    <div class="bg-primary-100 p-4 rounded-full mb-4 group-hover:bg-primary-200 transition duration-300">
                        <i class="fas fa-leaf text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Pengaduan Lingkungan</h3>
                </a>
                
                <a href="#" class="bg-gray-50 p-6 rounded-xl flex flex-col items-center text-center hover:bg-primary-50 transition duration-300 group">
                    <div class="bg-primary-100 p-4 rounded-full mb-4 group-hover:bg-primary-200 transition duration-300">
                        <i class="fas fa-trash-alt text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Pengelolaan Sampah</h3>
                </a>
                
                <a href="#" class="bg-gray-50 p-6 rounded-xl flex flex-col items-center text-center hover:bg-primary-50 transition duration-300 group">
                    <div class="bg-primary-100 p-4 rounded-full mb-4 group-hover:bg-primary-200 transition duration-300">
                        <i class="fas fa-tint text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Kualitas Air</h3>
                </a>
                
                <a href="#" class="bg-gray-50 p-6 rounded-xl flex flex-col items-center text-center hover:bg-primary-50 transition duration-300 group">
                    <div class="bg-primary-100 p-4 rounded-full mb-4 group-hover:bg-primary-200 transition duration-300">
                        <i class="fas fa-cloud text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Kualitas Udara</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- News Section -->
        <section class="mb-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Berita Terkini</h2>
                <a href="{{ route('berita') }}" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300">Lihat Semua <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover transition duration-300">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Berita 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-primary-600 mb-2">12 Juni 2023</div>
                        <h3 class="text-xl font-semibold mb-3">Gerakan Jakarta Bebas Sampah Plastik</h3>
                        <p class="text-gray-600 mb-4">Pemerintah Provinsi DKI Jakarta meluncurkan program baru untuk mengurangi sampah plastik di ibu kota.</p>
                        <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300">Baca Selengkapnya</a>
                    </div>
                </div>
                
                <!-- News Card 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover transition duration-300">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Berita 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-primary-600 mb-2">28 Mei 2023</div>
                        <h3 class="text-xl font-semibold mb-3">Penambahan Ruang Terbuka Hijau di Jakarta</h3>
                        <p class="text-gray-600 mb-4">Dinas Lingkungan Hidup menargetkan penambahan 50 hektar RTH di Jakarta Pusat tahun ini.</p>
                        <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300">Baca Selengkapnya</a>
                    </div>
                </div>
                
                <!-- News Card 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover transition duration-300">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Berita 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-primary-600 mb-2">15 Mei 2023</div>
                        <h3 class="text-xl font-semibold mb-3">Jakarta Raih Penghargaan Kota Berkelanjutan</h3>
                        <p class="text-gray-600 mb-4">Jakarta mendapatkan penghargaan sebagai kota dengan program lingkungan terbaik se-Asia Tenggara.</p>
                        <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services & Data Section -->
        <section class="grid md:grid-cols-2 gap-12 mb-16">
            <!-- Services -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Layanan Kami</h2>
                
                <div class="space-y-4">
                    <a href="#" class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 group">
                        <div class="bg-primary-100 p-3 rounded-lg mr-4 group-hover:bg-primary-200 transition duration-300">
                            <i class="fas fa-file-alt text-primary-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Perizinan Lingkungan</h3>
                            <p class="text-sm text-gray-600">Pelayanan perizinan terkait lingkungan hidup</p>
                        </div>
                    </a>
                    
                    <a href="#" class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 group">
                        <div class="bg-primary-100 p-3 rounded-lg mr-4 group-hover:bg-primary-200 transition duration-300">
                            <i class="fas fa-chart-line text-primary-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Data Kualitas Lingkungan</h3>
                            <p class="text-sm text-gray-600">Informasi real-time kualitas udara dan air</p>
                        </div>
                    </a>
                    
                    <a href="#" class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 group">
                        <div class="bg-primary-100 p-3 rounded-lg mr-4 group-hover:bg-primary-200 transition duration-300">
                            <i class="fas fa-graduation-cap text-primary-600"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-primary-700 transition duration-300">Edukasi Lingkungan</h3>
                            <p class="text-sm text-gray-600">Program edukasi dan pelatihan lingkungan</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Environmental Data -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Data Lingkungan</h2>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-semibold text-lg">Indeks Kualitas Udara (AQI)</h3>
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Baik</span>
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between text-sm text-gray-600 mb-2">
                            <span>Jakarta Pusat</span>
                            <span>45</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between text-sm text-gray-600 mb-2">
                            <span>Jakarta Selatan</span>
                            <span>52</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 52%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between text-sm text-gray-600 mb-2">
                            <span>Jakarta Barat</span>
                            <span>38</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 38%"></div>
                        </div>
                    </div>
                    
                    <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300 inline-flex items-center">
                        Lihat data lengkap
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Gallery Section -->
        <section>
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Galeri Kegiatan</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="#" class="group relative block overflow-hidden rounded-lg aspect-square">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Kegiatan 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <span class="text-white font-medium">Penanaman Pohon</span>
                    </div>
                </a>
                
                <a href="#" class="group relative block overflow-hidden rounded-lg aspect-square">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Kegiatan 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <span class="text-white font-medium">Workshop Lingkungan</span>
                    </div>
                </a>
                
                <a href="#" class="group relative block overflow-hidden rounded-lg aspect-square">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Kegiatan 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <span class="text-white font-medium">Pembersihan Sungai</span>
                    </div>
                </a>
                
                <a href="#" class="group relative block overflow-hidden rounded-lg aspect-square">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Kegiatan 4" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4 opacity-0 group-hover:opacity-100 transition duration-300">
                        <span class="text-white font-medium">Sekolah Adiwiyata</span>
                    </div>
                </a>
            </div>
        </section>
    </main>

@endsection