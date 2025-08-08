<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budaya Indonesia</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Custom styles to apply the Inter font family */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FFF6F1; /* Light peach background from the design */
        }
        /* Custom style for the hero background */
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1541512416313-1681435756a3?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        /* Custom style for the CTA background */
        .cta-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1599158150225-664878143599?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="antialiased">

    <!-- 
        Main container for the entire page.
        The background color is set in the <style> tag.
    -->
    <div class="w-full">

        <!-- =================================================================== -->
        <!-- Header / Navigation Section -->
        <!-- =================================================================== -->
        <header x-data="{ open: false }" class="absolute top-0 left-0 right-0 z-50">
            <div class="container mx-auto px-6 py-4">
                <nav class="flex items-center justify-between">
                    <!-- Logo -->
                    <a href="#" class="text-white text-2xl font-bold">Budaya.</a>

                    <!-- Desktop Navigation Links -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">Home</a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">Acara</a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">Warisan</a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">Kontak</a>
                    </div>

                    <!-- Login Button -->
                    <a href="#" class="hidden md:block bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors">
                        Login
                    </a>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden">
                        <button @click="open = !open" class="text-white focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path :class="{'hidden': open, 'block': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                                <path :class="{'block': open, 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </nav>

                <!-- Mobile Menu -->
                <div x-show="open" @click.away="open = false" class="md:hidden mt-4 bg-black bg-opacity-80 rounded-lg p-4">
                    <a href="#" class="block text-white py-2">Home</a>
                    <a href="#" class="block text-white py-2">Acara</a>
                    <a href="#" class="block text-white py-2">Warisan</a>
                    <a href="#" class="block text-white py-2">Kontak</a>
                    <a href="#" class="block bg-orange-500 text-white text-center mt-4 px-6 py-2 rounded-full hover:bg-orange-600 transition-colors">Login</a>
                </div>
            </div>
        </header>

        <!-- =================================================================== -->
        <!-- Hero Section -->
        <!-- =================================================================== -->
        <section class="hero-bg h-[70vh] md:h-[90vh] rounded-b-3xl flex flex-col items-center justify-center text-white text-center relative overflow-hidden">
            <!-- Content Container -->
            <div class="z-10 flex flex-col items-center px-4">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">
                    Lihat Ragam <br class="hidden md:block"> Budaya Di Indonesia
                </h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-8">
                    Jelajahi kekayaan budaya, tradisi, dan warisan nusantara di ujung jari Anda.
                </p>

                <!-- Search Bar -->
                <div class="w-full max-w-xl bg-white/20 backdrop-blur-sm p-2 rounded-full flex items-center">
                    <input type="text" placeholder="Cari budaya, tarian, atau acara..." class="w-full bg-transparent text-white placeholder-gray-300 border-none focus:ring-0 px-4 py-2">
                    <button class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors shrink-0">
                        Cari
                    </button>
                </div>
            </div>

            <!-- Stats Bar at the bottom -->
            <div class="absolute bottom-0 w-full bg-black/30 backdrop-blur-md p-4">
                <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                    <div class="p-2">
                        <h3 class="text-2xl font-bold">50+</h3>
                        <p class="text-gray-300">Acara</p>
                    </div>
                    <div class="p-2">
                        <h3 class="text-2xl font-bold">20+</h3>
                        <p class="text-gray-300">Warisan</p>
                    </div>
                    <div class="p-2">
                        <h3 class="text-2xl font-bold">34+</h3>
                        <p class="text-gray-300">Provinsi</p>
                    </div>
                     <div class="p-2 col-span-2 md:col-span-1">
                        <h3 class="text-2xl font-bold">1000+</h3>
                        <p class="text-gray-300">Suku Bangsa</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================================================================== -->
        <!-- "Acara Terbaru" (Latest Events) Section -->
        <!-- =================================================================== -->
        <section class="container mx-auto px-6 py-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Acara Terbaru</h2>
            <p class="text-gray-500 mb-8">Jangan lewatkan acara-acara budaya paling menarik yang akan datang.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1587542989595-a273d445ca8d?q=80&w=1974&auto=format&fit=crop" alt="Tari Kecak" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Tari Kecak</h3>
                        <p class="text-gray-600 text-sm">Bali, Indonesia</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1595014744853-453a00561138?q=80&w=2070&auto=format&fit=crop" alt="Candi Borobudur" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Candi Borobudur</h3>
                        <p class="text-gray-600 text-sm">Magelang, Indonesia</p>
                    </div>
                </div>
                <!-- Card 3 (Active) -->
                <div class="bg-orange-100 border-2 border-orange-500 rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1627895439379-373f9916a2a9?q=80&w=2070&auto=format&fit=crop" alt="Danau Toba" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-orange-800">Festival Danau Toba</h3>
                        <p class="text-orange-700 text-sm">Sumatera Utara, Indonesia</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://images.unsplash.com/photo-1588267210994-1315fed68612?q=80&w=2070&auto=format&fit=crop" alt="Karapan Sapi" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Karapan Sapi</h3>
                        <p class="text-gray-600 text-sm">Madura, Indonesia</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================================================================== -->
        <!-- "Warisan Budaya" (Cultural Heritage) Section -->
        <!-- =================================================================== -->
        <section class="container mx-auto px-6 py-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Warisan Budaya</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <!-- Main Image -->
                <div class="w-full h-96">
                    <img src="https://images.unsplash.com/photo-1593925349695-583e7a397a44?q=80&w=2070&auto=format&fit=crop" alt="Candi Prambanan" class="w-full h-full object-cover rounded-2xl shadow-lg">
                </div>
                <!-- Side Images -->
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1554123164-54a555a6461a?q=80&w=1935&auto=format&fit=crop" alt="Warisan 1" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1587093339002-604615e42f6d?q=80&w=1974&auto=format&fit=crop" alt="Warisan 2" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1616790485968-a400778841a2?q=80&w=1974&auto=format&fit=crop" alt="Warisan 3" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1618333525803-6c5b9b315b81?q=80&w=2070&auto=format&fit=crop" alt="Warisan 4" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                </div>
            </div>
        </section>

        <!-- =================================================================== -->
        <!-- Features/Benefits Section -->
        <!-- =================================================================== -->
        <section class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Illustration -->
                <div class="flex justify-center">
                    <img src="https://i.ibb.co/L5kH9Bw/character-illustration.png" alt="Character Illustration" class="max-w-xs md:max-w-sm">
                </div>
                <!-- Feature List -->
                <div class="space-y-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Kenapa Memilih Kami?</h2>
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-200 p-3 rounded-full">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 12.25c0-2.071 1.679-3.75 3.75-3.75s3.75 1.679 3.75 3.75-1.679 3.75-3.75 3.75-3.75-1.679-3.75-3.75z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v2.25m0 17.5V23m-9.192-9.192l1.591 1.591M20.783 3.217l-1.591 1.591m-14.374 14.374l1.591-1.591M3.217 3.217l14.374 14.374"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800">Untuk Media Pembelajaran</h3>
                            <p class="text-gray-500 mt-1">Sumber informasi yang kaya dan terverifikasi untuk pendidikan.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-200 p-3 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 10v-1m0 0c-1.657 0-3-.895-3-2s1.343-2 3-2m0 0c1.11 0 2.08-.402 2.599-1M9.401 9C8.473 9.402 8 10.11 8 11s.473 1.598 1.401 2M14.599 15c.928-.402 1.401-1.11 1.401-2s-.473-1.598-1.401-2"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800">Hemat Biaya</h3>
                            <p class="text-gray-500 mt-1">Akses informasi budaya tanpa perlu biaya perjalanan yang mahal.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-200 p-3 rounded-full">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h10a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.75 11a2.25 2.25 0 012.25-2.25h4.5a2.25 2.25 0 012.25 2.25M12 11V9"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl text-gray-800">Bisa Dilihat Seluruh Dunia</h3>
                            <p class="text-gray-500 mt-1">Promosikan budaya Indonesia ke panggung internasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- =================================================================== -->
        <!-- CTA (Call to Action) Section -->
        <!-- =================================================================== -->
        <section class="cta-bg my-16">
            <div class="container mx-auto px-6 py-20 text-center text-white">
                <h2 class="text-4xl font-bold mb-4">Support Me With</h2>
                <p class="max-w-2xl mx-auto mb-8 text-gray-300">Dukung kami untuk terus melestarikan dan mempromosikan budaya Indonesia. Setiap dukungan Anda sangat berarti.</p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 max-w-lg mx-auto">
                    <input type="email" placeholder="Masukkan email Anda" class="w-full bg-white/20 text-white placeholder-gray-300 px-4 py-3 rounded-full border-2 border-transparent focus:border-orange-500 focus:ring-0 transition">
                    <button class="w-full sm:w-auto bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition-colors font-semibold shrink-0">
                        Kirim Sekarang
                    </button>
                </div>
            </div>
        </section>

        <!-- =================================================================== -->
        <!-- Map & Provinces Section -->
        <!-- =================================================================== -->
        <section class="container mx-auto px-6 py-16">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Daftar Suku di Tiap Provinsi</h2>
                <div class="flex flex-col lg:flex-row items-center justify-around gap-8">
                    <!-- Left List -->
                    <ul class="space-y-3 text-gray-600 w-full lg:w-1/4 text-center lg:text-left">
                        <li class="flex items-center justify-center lg:justify-start gap-2"><span class="text-orange-500 font-bold">•</span> Suku Jawa</li>
                        <li class="flex items-center justify-center lg:justify-start gap-2"><span class="text-orange-500 font-bold">•</span> Suku Sunda</li>
                        <li class="flex items-center justify-center lg:justify-start gap-2"><span class="text-orange-500 font-bold">•</span> Suku Batak</li>
                        <li class="flex items-center justify-center lg:justify-start gap-2"><span class="text-orange-500 font-bold">•</span> Suku Betawi</li>
                    </ul>
                    <!-- Map Image -->
                    <div class="w-full lg:w-1/2 flex justify-center">
                         <img src="https://i.ibb.co/k30D0vJ/indonesia-map.png" alt="Peta Indonesia" class="max-w-md w-full">
                    </div>
                    <!-- Right List -->
                    <ul class="space-y-3 text-gray-600 w-full lg:w-1/4 text-center lg:text-right">
                        <li class="flex items-center justify-center lg:justify-end gap-2">Suku Dayak <span class="text-orange-500 font-bold">•</span></li>
                        <li class="flex items-center justify-center lg:justify-end gap-2">Suku Asmat <span class="text-orange-500 font-bold">•</span></li>
                        <li class="flex items-center justify-center lg:justify-end gap-2">Suku Bugis <span class="text-orange-500 font-bold">•</span></li>
                        <li class="flex items-center justify-center lg:justify-end gap-2">Suku Minang <span class="text-orange-500 font-bold">•</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- =================================================================== -->
        <!-- Footer Section -->
        <!-- =================================================================== -->
        <footer class="bg-gray-800 text-white mt-16">
            <div class="container mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- About -->
                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                        <h3 class="text-2xl font-bold mb-4">Budaya.</h3>
                        <p class="text-gray-400">Platform digital untuk menjelajahi dan melestarikan kekayaan budaya Indonesia.</p>
                    </div>
                    <!-- Links -->
                    <div>
                        <h4 class="font-semibold text-lg mb-4">Fitur</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white">Acara</a></li>
                            <li><a href="#" class="hover:text-white">Warisan</a></li>
                            <li><a href="#" class="hover:text-white">Galeri</a></li>
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                        </ul>
                    </div>
                    <!-- Resources -->
                     <div>
                        <h4 class="font-semibold text-lg mb-4">Resources</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="#" class="hover:text-white">Pusat Bantuan</a></li>
                            <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                            <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                    <!-- Contact -->
                     <div>
                        <h4 class="font-semibold text-lg mb-4">Kontak</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><a href="mailto:info@budaya.com" class="hover:text-white">info@budaya.com</a></li>
                            <li><p>Jl. Budaya No. 123, Jakarta</p></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 border-t border-gray-700 pt-8 flex flex-col sm:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Budaya. All rights reserved.</p>
                    <div class="flex space-x-4 mt-4 sm:mt-0">
                        <!-- Social Icons -->
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12.001c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.942.359.308.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12.001C22 6.477 17.523 2 12 2z" clip-rule="evenodd" /></svg></a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
