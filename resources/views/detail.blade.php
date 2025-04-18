<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        .prose img {
            border-radius: 0.5rem;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .share-btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800">
    <!-- Header -->
	<header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <img src="https://lingkunganhidup.jakarta.go.id/dist/images/logo/logo-dlh-big.png" alt="Suku Dinas Lingkungan Hidup Kota Administrasi Jakarta Timur" class="h-16">
                    <div class="hidden md:block">
                        <h1 class="text-xl font-bold text-gray-800">Suku Dinas Lingkungan Hidup</h1>
                        <p class="text-sm text-gray-600">Kota Administrasi Jakarta Timur</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="#" class="nav-link font-medium text-gray-700 hover:text-primary-600 transition duration-300">Beranda</a>
                    <a href="#" class="nav-link font-medium text-gray-700 hover:text-primary-600 transition duration-300">Profil</a>
                    <a href="#" class="nav-link font-medium text-gray-700 hover:text-primary-600 transition duration-300">Layanan</a>
                    <a href="#" class="nav-link font-medium text-gray-700 hover:text-primary-600 transition duration-300">Regulasi</a>
                    <a href="#" class="nav-link font-medium text-gray-700 hover:text-primary-600 transition duration-300">Publikasi</a>
                    <a href="#" class="nav-link font-medium text-gray-700 hover:text-primary-600 transition duration-300">Kontak</a>
                </nav>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

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
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('berita') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600">Berita</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-sm font-medium text-gray-500">Detail Berita</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- News Content -->
            <article class="lg:w-2/3">
                <!-- News Header -->
                <header class="mb-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-primary-600 text-white text-xs font-medium px-2.5 py-0.5 rounded">Kegiatan</span>
                        <span class="text-sm text-gray-500 ml-3"><i class="far fa-calendar-alt mr-1"></i> 15 Juni 2023</span>
                        <span class="text-sm text-gray-500 ml-3"><i class="far fa-eye mr-1"></i> 1.245 Dilihat</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-4">Program Bersih-bersih Sungai Ciliwung Capai 80% Target</h1>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/69.jpg" alt="Penulis" class="w-10 h-10 rounded-full object-cover">
                        <div class="ml-3">
                            <p class="text-sm font-medium">Oleh: Dr. Aditya nugraha</p>
                            <p class="text-xs text-gray-500">Kepala Dinas Lingkungan Hidup DKI Jakarta</p>
                        </div>
                    </div>
                </header>

                <!-- Featured Image -->
                <figure class="mb-8">
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Sungai Ciliwung Bersih" class="w-full h-auto rounded-xl shadow-md">
                    <figcaption class="text-sm text-gray-500 mt-2 text-center">Kegiatan bersih-bersih Sungai Ciliwung oleh relawan dan petugas DLH DKI Jakarta</figcaption>
                </figure>

                <!-- News Body -->
                <div class="prose max-w-none prose-lg">
                    <p class="lead">Program pembersihan Sungai Ciliwung yang digagas Dinas Lingkungan Hidup DKI Jakarta telah mencapai 80% dari target awal. Kegiatan ini melibatkan lebih dari 500 relawan dari berbagai komunitas peduli lingkungan.</p>
                    
                    <p>Kepala Dinas Lingkungan Hidup DKI Jakarta, Dr. Asep Kuswanto, menyatakan bahwa pencapaian ini merupakan hasil kerja keras semua pihak yang terlibat. "Kami sangat mengapresiasi partisipasi aktif masyarakat dalam program ini. Dengan kerjasama seperti ini, kami yakin Jakarta bisa memiliki sungai yang lebih bersih," ujarnya.</p>
                    
                    <h2>Target dan Realisasi Program</h2>
                    
                    <p>Program yang dimulai sejak Januari 2023 ini memiliki beberapa target utama:</p>
                    
                    <ul>
                        <li>Pembersihan sampah di sepanjang 15 km aliran Sungai Ciliwung</li>
                        <li>Pemasangan 50 unit trash boom untuk menangkap sampah</li>
                        <li>Pembangunan 20 titik taman tepi sungai</li>
                        <li>Peningkatan kualitas air hingga kelas III (sesuai PP No. 22 Tahun 2021)</li>
                    </ul>
                    
                    <p>Hingga pertengahan Juni 2023, realisasi yang telah dicapai:</p>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-lg overflow-hidden">
                            <thead class="bg-primary-600 text-white">
                                <tr>
                                    <th class="py-3 px-4 text-left">Indikator</th>
                                    <th class="py-3 px-4 text-left">Target</th>
                                    <th class="py-3 px-4 text-left">Realisasi</th>
                                    <th class="py-3 px-4 text-left">Pencapaian</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-3 px-4">Pembersihan Sungai</td>
                                    <td class="py-3 px-4">15 km</td>
                                    <td class="py-3 px-4">12 km</td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">80%</span>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-primary-600 h-2.5 rounded-full" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">Trash Boom</td>
                                    <td class="py-3 px-4">50 unit</td>
                                    <td class="py-3 px-4">45 unit</td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">90%</span>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-primary-600 h-2.5 rounded-full" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">Taman Tepi Sungai</td>
                                    <td class="py-3 px-4">20 titik</td>
                                    <td class="py-3 px-4">15 titik</td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">75%</span>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-primary-600 h-2.5 rounded-full" style="width: 75%"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h2>Dampak Positif bagi Lingkungan</h2>
                    
                    <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Perbandingan Sungai Ciliwung" class="w-full">
                    
                    <p>Program ini telah memberikan dampak positif yang signifikan:</p>
                    
                    <ol>
                        <li>Penurunan volume sampah di sungai sebesar 65%</li>
                        <li>Peningkatan indeks kualitas air dari 45 menjadi 68 (skala 0-100)</li>
                        <li>Penambahan ruang terbuka hijau seluas 5 hektar</li>
                        <li>Peningkatan partisipasi masyarakat dalam kegiatan lingkungan</li>
                    </ol>
                    
                    <blockquote class="border-l-4 border-primary-600 pl-4 italic my-6">
                        "Program bersih-bersih Sungai Ciliwung ini bukan hanya tentang membersihkan sungai, tapi juga tentang membangun kesadaran masyarakat akan pentingnya menjaga lingkungan. Kami ingin menciptakan perubahan yang berkelanjutan," tegas Dr. Asep.
                    </blockquote>
                    
                    <h2>Rencana Ke Depan</h2>
                    
                    <p>Untuk tahap selanjutnya, Dinas Lingkungan Hidup DKI Jakarta berencana:</p>
                    
                    <ul>
                        <li>Melanjutkan program hingga 100% target tercapai</li>
                        <li>Memperluas area pembersihan ke anak-anak sungai</li>
                        <li>Mengadakan program edukasi rutin untuk masyarakat</li>
                        <li>Membangun sistem monitoring kualitas air real-time</li>
                    </ul>
                    
                    <p>Program ini diharapkan dapat menjadi model untuk pengelolaan sungai-sungai lainnya di Jakarta. Masyarakat yang ingin berpartisipasi dapat mendaftar melalui website DLH DKI Jakarta atau datang langsung ke kantor dinas.</p>
                </div>

                <!-- Tags -->
                <div class="mt-8 mb-8">
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">sungai ciliwung</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">program bersih-bersih</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">relawan</a>
                        <a href="#" class="bg-gray-100 hover:bg-primary-100 text-gray-800 hover:text-primary-800 px-3 py-1 rounded-full text-sm transition duration-300">kualitas air</a>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="border-t border-b border-gray-200 py-6 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Bagikan Berita Ini:</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="share-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 inline-flex items-center">
                            <i class="fab fa-facebook-f mr-2"></i> Facebook
                        </a>
                        <a href="#" class="share-btn bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition duration-300 inline-flex items-center">
                            <i class="fab fa-twitter mr-2"></i> Twitter
                        </a>
                        <a href="#" class="share-btn bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition duration-300 inline-flex items-center">
                            <i class="fab fa-instagram mr-2"></i> Instagram
                        </a>
                        <a href="#" class="share-btn bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300 inline-flex items-center">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Author Box -->
                <div class="bg-gray-50 rounded-xl p-6 mb-8">
                    <div class="flex items-start">
                        <img src="https://randomuser.me/api/portraits/men/69.jpg" alt="Penulis" class="w-16 h-16 rounded-full object-cover">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold">Dr. Aditya Nugraha</h3>
                            <p class="text-sm text-gray-600 mb-3">Kepala Dinas Lingkungan Hidup DKI Jakarta</p>
                            <p class="text-gray-700">Memimpin Dinas Lingkungan Hidup DKI Jakarta sejak 2020 dengan fokus pada pengelolaan lingkungan berkelanjutan dan partisipasi masyarakat. Memiliki pengalaman lebih dari 15 tahun di bidang lingkungan hidup.</p>
                        </div>
                    </div>
                </div>

                <!-- Related News -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold mb-6">Berita Terkait</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="#" class="flex group">
                            <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Related 1" class="w-24 h-24 object-cover rounded-lg">
                            <div class="ml-4">
                                <span class="text-xs text-gray-500 block mb-1"><i class="far fa-calendar-alt mr-1"></i> 10 Juni 2023</span>
                                <h4 class="font-medium group-hover:text-primary-600 transition duration-300">Pemasangan Trash Boom di 5 Sungai Utama Jakarta</h4>
                            </div>
                        </a>
                        <a href="#" class="flex group">
                            <img src="https://placehold.co/300?text=SLHJT&font=roboto" alt="Related 2" class="w-24 h-24 object-cover rounded-lg">
                            <div class="ml-4">
                                <span class="text-xs text-gray-500 block mb-1"><i class="far fa-calendar-alt mr-1"></i> 5 Juni 2023</span>
                                <h4 class="font-medium group-hover:text-primary-600 transition duration-300">Komunitas Relawan Sungai Jakarta Bertambah 30%</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-6">Komentar (3)</h3>
                    
                    <!-- Comment List -->
                    <div class="space-y-6 mb-8">
                        <!-- Comment 1 -->
                        <div class="flex">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User" class="w-10 h-10 rounded-full object-cover">
                            <div class="ml-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <h4 class="font-semibold">Dian Sastrowardoyo</h4>
                                        <span class="text-xs text-gray-500">2 hari lalu</span>
                                    </div>
                                    <p class="text-gray-700">Program yang sangat bagus! Saya sebagai warga Jakarta sangat mengapresiasi inisiatif ini. Kapan ada kegiatan lagi? Saya ingin ikut berpartisipasi.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment 2 -->
                        <div class="flex">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User" class="w-10 h-10 rounded-full object-cover">
                            <div class="ml-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <h4 class="font-semibold">Budi Santoso</h4>
                                        <span class="text-xs text-gray-500">3 hari lalu</span>
                                    </div>
                                    <p class="text-gray-700">Saya ikut kegiatan bersih-bersih minggu lalu. Kegiatannya sangat terorganisir dengan baik. Terima kasih untuk DLH dan semua relawan!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment Form -->
                    <h4 class="text-lg font-semibold mb-4">Tinggalkan Komentar</h4>
                    <form>
                        <div class="mb-4">
                            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Tulis komentar Anda..."></textarea>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4 mb-4">
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Nama">
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Email">
                        </div>
                        <button type="submit" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-2 rounded-lg transition duration-300">Kirim Komentar</button>
                    </form>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:w-1/3">
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
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="bg-primary-600 text-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4">Berlangganan Newsletter</h2>
                    <p class="mb-4">Dapatkan informasi terbaru tentang program dan kegiatan lingkungan hidup Jakarta langsung ke email Anda.</p>
                    <form class="flex">
                        <input type="email" placeholder="Alamat Email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit" class="bg-white text-primary-600 px-4 py-2 rounded-r-lg hover:bg-gray-100 transition duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </aside>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- About -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3>
                    <p class="text-gray-400 mb-4">Suku Dinas Lingkungan Hidup Kota Administrasi Jakarta Timur bertugas melaksanakan urusan pemerintahan di bidang lingkungan hidup.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Profil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Layanan Publik</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Regulasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>Jl.Pinang Ranti, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span>
                        </li>
                        {{-- <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <span>(021) 382 2255</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@lingkunganhidup.jakarta.go.id</span>
                        </li> --}}
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Berlangganan Newsletter</h3>
                    <p class="text-gray-400 mb-4">Dapatkan informasi terbaru tentang program dan kegiatan lingkungan hidup di Jakarta Timur.</p>
                    <form class="flex">
                        <input type="email" placeholder="Alamat Email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit" class="bg-primary-600 hover:bg-primary-700 px-4 py-2 rounded-r-lg transition duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2025 Suku Dinas Lingkungan Hidup Kota Administrasi Jakarta Timur.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Syarat & Ketentuan</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Peta Situs</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>