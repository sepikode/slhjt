@extends('fronts.app')
@section('title', $title)


@section('content')

    <!-- Page Header -->
    <section class="bg-primary-700 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Berita Lingkungan Hidup Jakarta</h1>
                <p class="text-lg md:text-xl">Informasi terkini tentang program, kegiatan, dan perkembangan lingkungan hidup di Jakarta Timur</p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-3">
        <div class="container mx-auto px-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Beranda
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-sm font-medium text-gray-500">Berita</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- News Content -->
            <div class="lg:w-3/4">
                <!-- Category Filter -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold mb-4">Kategori Berita</h2>
                    <div class="flex flex-wrap gap-2">
                        <button class="category-active px-4 py-2 rounded-full text-sm font-medium transition duration-300">Semua</button>
                        <button class="bg-white px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition duration-300">Kebijakan</button>
                        <button class="bg-white px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition duration-300">Kegiatan</button>
                        <button class="bg-white px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition duration-300">Pengumuman</button>
                        <button class="bg-white px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition duration-300">Penghargaan</button>
                        <button class="bg-white px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-100 transition duration-300">Laporan</button>
                    </div>
                </div>

                <!-- Search and Sort -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                    <div class="relative w-full md:w-64">
                        <input type="text" placeholder="Cari berita..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-600 mr-2">Urutkan:</span>
                        <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <option>Terbaru</option>
                            <option>Terlama</option>
                            <option>Terpopuler</option>
                        </select>
                    </div>
                </div>

                <!-- News Grid -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <!-- Featured News -->
                    <div class="md:col-span-2 bg-white rounded-xl shadow-md overflow-hidden news-card transition duration-300">
                        <div class="md:flex">
                            <div class="md:w-1/2">
                                <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Featured News" class="w-full h-64 md:h-full object-cover">
                            </div>
                            <div class="p-6 md:w-1/2">
                                <div class="flex items-center mb-3">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded">Kegiatan</span>
                                    <span class="text-sm text-gray-500 ml-3"><i class="far fa-calendar-alt mr-1"></i> 15 Juni 2023</span>
                                </div>
                                <h2 class="text-xl font-bold mb-3">Program Bersih-bersih Sungai Ciliwung Capai 80% Target</h2>
                                <p class="text-gray-600 mb-4">Program pembersihan Sungai Ciliwung yang digagas Dinas Lingkungan Hidup DKI Jakarta telah mencapai 80% dari target awal. Kegiatan ini melibatkan lebih dari 500 relawan dari berbagai komunitas...</p>
                                <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300 inline-flex items-center">
                                    Baca selengkapnya
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card transition duration-300">
                        <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="News 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded">Kebijakan</span>
                                <span class="text-sm text-gray-500 ml-3"><i class="far fa-calendar-alt mr-1"></i> 10 Juni 2023</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">Peraturan Baru Penanaman Pohon di Jakarta</h3>
                            <p class="text-gray-600 mb-4">Pemprov DKI Jakarta mengeluarkan peraturan baru tentang kewajiban penanaman pohon untuk setiap pembangunan gedung baru...</p>
                            <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300 inline-flex items-center text-sm">
                                Baca selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card transition duration-300">
                        <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="News 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded">Penghargaan</span>
                                <span class="text-sm text-gray-500 ml-3"><i class="far fa-calendar-alt mr-1"></i> 8 Juni 2023</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">25 Sekolah di Jakarta Raih Penghargaan Adiwiyata 2023</h3>
                            <p class="text-gray-600 mb-4">Sebanyak 25 sekolah di DKI Jakarta mendapatkan penghargaan Adiwiyata atas komitmen mereka dalam menerapkan pendidikan lingkungan hidup...</p>
                            <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300 inline-flex items-center text-sm">
                                Baca selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card transition duration-300">
                        <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="News 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded">Laporan</span>
                                <span class="text-sm text-gray-500 ml-3"><i class="far fa-calendar-alt mr-1"></i> 5 Juni 2023</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">Laporan: Pengurangan Sampah Plastik Capai 35% di 2023</h3>
                            <p class="text-gray-600 mb-4">Dinas Lingkungan Hidup melaporkan pengurangan sampah plastik di Jakarta mencapai 35% pada semester pertama tahun 2023...</p>
                            <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300 inline-flex items-center text-sm">
                                Baca selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card transition duration-300">
                        <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="News 4" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded">Kegiatan</span>
                                <span class="text-sm text-gray-500 ml-3"><i class="far fa-calendar-alt mr-1"></i> 2 Juni 2023</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-3">Workshop Pengelolaan Sampah untuk RW se-Jakarta</h3>
                            <p class="text-gray-600 mb-4">DLH DKI Jakarta menyelenggarakan workshop pengelolaan sampah mandiri untuk perwakilan RW se-Jakarta dengan peserta lebih dari 300 orang...</p>
                            <a href="#" class="text-primary-600 font-medium hover:text-primary-800 transition duration-300 inline-flex items-center text-sm">
                                Baca selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="flex justify-center">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Previous</span>
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-white bg-primary-600 border border-primary-600 hover:bg-primary-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">
                                <span class="sr-only">Next</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-1/4">
                <!-- Popular News -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4 pb-2 border-b">Berita Populer</h2>
                    <div class="space-y-4">
                        <a href="#" class="flex group">
                            <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Popular 1" class="w-16 h-16 object-cover rounded-lg">
                            <div class="ml-3">
                                <h3 class="text-sm font-medium group-hover:text-primary-600 transition duration-300">Antisipasi Banjir 2023, DLH Tingkatkan Kapasitas Biopori</h3>
                                <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 12 Mei 2023</span>
                            </div>
                        </a>
                        <a href="#" class="flex group">
                            <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Popular 2" class="w-16 h-16 object-cover rounded-lg">
                            <div class="ml-3">
                                <h3 class="text-sm font-medium group-hover:text-primary-600 transition duration-300">Kualitas Udara Jakarta Membaik di Awal Juni 2023</h3>
                                <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 5 Mei 2023</span>
                            </div>
                        </a>
                        <a href="#" class="flex group">
                            <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Popular 3" class="w-16 h-16 object-cover rounded-lg">
                            <div class="ml-3">
                                <h3 class="text-sm font-medium group-hover:text-primary-600 transition duration-300">DLH DKI Raih Penghargaan Inovasi Pelayanan Publik 2023</h3>
                                <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 28 April 2023</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4 pb-2 border-b">Kategori</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex justify-between items-center py-2 text-gray-700 hover:text-primary-600 transition duration-300">
                                <span>Semua Berita</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">48</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center py-2 text-gray-700 hover:text-primary-600 transition duration-300">
                                <span>Kebijakan</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center py-2 text-gray-700 hover:text-primary-600 transition duration-300">
                                <span>Kegiatan</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">18</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center py-2 text-gray-700 hover:text-primary-600 transition duration-300">
                                <span>Pengumuman</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">7</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center py-2 text-gray-700 hover:text-primary-600 transition duration-300">
                                <span>Penghargaan</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center py-2 text-gray-700 hover:text-primary-600 transition duration-300">
                                <span>Laporan</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">6</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tags -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4 pb-2 border-b">Tag Populer</h2>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">sampah</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">sungai</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">udara</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">penghijauan</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">pencemaran</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">peraturan</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">workshop</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">adiwiyata</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection