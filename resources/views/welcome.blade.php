 @include('layouts.header')

 @include('components.go-top')
 <div data-aos="fade-up" data-aos-duration="500">
     @include('components.chat-bot  ')
 </div>


 <div class="w-full">
     @include('components.navbar')


     <!-- =================================================================== -->
     <!-- Hero Section -->
     <!-- =================================================================== -->
     <section
         class="hero-bg h-[70vh] md:h-[90vh] rounded-b-3xl flex flex-col items-center justify-center text-white text-center relative overflow-hidden">
         <!-- Content Container -->
         <div class="z-10 flex flex-col items-center px-4">
             <h1
                 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 animate__backInDown animate__animated drop-shadow-2xl animate__delay-1s">
                 Lihat Ragam <br class="hidden md:block"> Budaya Di <span class=" text-orange-600"> Indonesia</span>
             </h1>
             <p
                 class="text-lg md:text-xl text-gray-300 max-w-2xl mb-8 animate__fadeIn animate__animated animate__delay-2s">
                 Jelajahi kekayaan budaya, tradisi, dan warisan nusantara di ujung jari Anda.
             </p>

             <!-- Search Bar -->
             <div
                 class="w-full max-w-xl bg-white/20 backdrop-blur-sm p-2 rounded-full flex items-center animate__zoomIn animate__animated animate__delay-2s">
                 <input type="text" placeholder="Cari budaya, tarian, atau acara..."
                     class="w-full bg-transparent text-white placeholder-gray-300 border-none focus:ring-0 px-4 py-2">
                 <button
                     class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors shrink-0">
                     Cari
                 </button>
             </div>
         </div>
         <div style="display: flex; font-size: 30px;  "
             class="absolute bottom-0 w-full bg-orange-800/30 backdrop-blur-md p-4 flex justify-center gap-[10%]">
             <div>
                 <div class="flex items-center  justify-center">
                     <div class="counter font-bold" data-target="500"></div>+
                 </div>
                 <p class=" text-xl font-medium">Pengguna Aktif</p>
             </div>

             <div>
                 <div class="flex items-center  justify-center">
                     <div class="counter font-bold" data-target="500"></div>+
                 </div>
                 <p class=" text-xl font-medium">Berita</p>
             </div>
             <div>
                 <div class="flex items-center  justify-center">
                     <div class="counter font-bold" data-target="1000"></div>+
                 </div>
                 <p class=" text-xl font-medium">Acara Aktif</p>
             </div>

         </div>

         <!-- Stats Bar at the bottom -->
         {{-- <div class="absolute bottom-0 w-full bg-orange-800/30 backdrop-blur-md p-4">
             <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                 <div class="p-2">
                     <div class="text-2xl font-bold" class="counter" data-target="100">100</div>
                     <p class="text-gray-300">Acara</p>
                 </div>
                 <div class="p-2">
                     <div class="text-2xl font-bold" class="counter" data-target="100"></div>
                     <p class="text-gray-300">Warisan</p>
                 </div>
                 <div class="p-2">
                     <div class="text-2xl font-bold" class="counter" data-target="100"></div>
                     <p class="text-gray-300">Provinsi</p>
                 </div>
                 <div class="p-2 col-span-2 md:col-span-1">
                     <div class="text-2xl font-bold" class="counter" data-target="100"></div>
                     <p class="text-gray-300">Suku Bangsa</p>
                 </div>
             </div>
         </div> --}}
     </section>

     <!-- =================================================================== -->
     <!-- "Acara Terbaru" (Latest Events) Section -->
     <!-- =================================================================== -->
     <section class="container mx-auto px-6 py-16" data-aos="fade-up" data-aos-duration="500">
         <div class="flex items-center justify-between">

             <div>
                 <h2 class="text-3xl font-bold text-gray-800 mb-2">Acara Terbaru</h2>
                 <p class="text-gray-500 mb-8">Jangan lewatkan acara-acara budaya paling menarik yang akan datang.</p>
             </div>
             <button class="btn-line">Lihat Lainnya</button>
         </div>

         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
             @include('components.card-acara')

         </div>
     </section>

     <!-- =================================================================== -->
     <!-- "Warisan Budaya" (Cultural Heritage) Section -->
     <!-- =================================================================== -->
     <section class="container mx-auto px-6 py-16">
         <h2 class="text-3xl font-bold text-gray-800 mb-8">Warisan Budaya</h2>
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
             <!-- Main Image -->
             <div class="w-full h-96" data-aos="fade-up" data-aos-duration="1500">
                 <iframe class="w-full h-full"
                     src="https://www.youtube.com/embed/XCM54pKkQSE?autoplay=1&mute=1&controls=0&loop=1&playlist=XCM54pKkQSE&rel=0"
                     title="YouTube video player" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                 </iframe>

             </div>
             <!-- Side Images -->
             <div class="grid grid-cols-2 gap-4">
                 <img src="assets/64f6bffa35c0f501898316.webp" alt="Warisan 1" data-aos="fade-up"
                     data-aos-duration="500" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                 <img src="assets/Budaya-Daerah-adalah-Kekayaan-Kebudayaan-Nasional-Indonesia.jpg" alt="Warisan 2"
                     data-aos="fade-up" data-aos-duration="1000" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                 <img src="assets/Festival-Pasola-source-globetrotting.com_.webp" alt="Warisan 3" data-aos="fade-up"
                     data-aos-duration="1500" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                 <img src="assets/66614acb424ea989322620.jpeg" alt="Warisan 4" data-aos="fade-up"
                     data-aos-duration="2000" class="w-full h-44 object-cover rounded-2xl shadow-lg">
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
                 <img src="https://i.ibb.co/L5kH9Bw/character-illustration.png" alt="Character Illustration"
                     class="max-w-xs md:max-w-sm">
             </div>
             <!-- Feature List -->
             <div class="space-y-8">
                 <h2 data-aos="fade-up" data-aos-duration="500" class="text-3xl font-bold text-gray-800 mb-4">Kenapa
                     Memilih Kami?</h2>
                 <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-duration="500">
                     <div class="bg-orange-200 p-3 rounded-full">
                         <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                             <path fill="currentColor"
                                 d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9zm6.82 6L12 12.72L5.18 9L12 5.28zM17 16l-5 2.72L7 16v-3.73L12 15l5-2.73z" />
                         </svg>
                     </div>
                     <div>
                         <h3 class="font-bold text-xl text-gray-800">Untuk Media Pembelajaran</h3>
                         <p class="text-gray-500 mt-1">Sumber informasi yang kaya dan terverifikasi untuk pendidikan.
                         </p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-duration="1000">
                     <div class="bg-green-200 p-3 rounded-full">
                         <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                             <path fill="currentColor"
                                 d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7M10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0" />
                             <path fill="currentColor"
                                 d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599zM19.425 10H9.397l7.469-2.546l1.522-.487zM15.55 5.79L7.84 8.418l6.106-4.878zM3.5 18.169v-4.34A3 3 0 0 0 5.33 12h13.34a3 3 0 0 0 1.83 1.83v4.34A3 3 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169" />
                         </svg>
                     </div>
                     <div>
                         <h3 class="font-bold text-xl text-gray-800">Hemat Biaya</h3>
                         <p class="text-gray-500 mt-1">Akses informasi budaya tanpa perlu biaya perjalanan yang mahal.
                         </p>
                     </div>
                 </div>
                 <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-duration="1500">
                     <div class="bg-blue-200 p-3 rounded-full">
                         <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                             <path fill="currentColor"
                                 d="M12 2c-4.971 0-9 4.029-9 9s4.029 9 9 9s9-4.029 9-9s-4.029-9-9-9m2 2c0 1-.5 2-1.5 2S11 7 11 8v3s1 0 1-3a1 1 0 1 1 2 0v3a1 1 0 1 0 1 1h1v-2l1 1l-1 1c0 3 0 3-2 4c0-1-1-1-3-1v-2l-2-2V9c-1 0-1 1-1 1l-.561-.561l-2.39-2.39q.164-.29.35-.564l.523-.678A7.98 7.98 0 0 1 12 3a8 8 0 0 1 2 .262z" />
                         </svg>
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
             <p class="max-w-2xl mx-auto mb-8 text-gray-300">Dukung kami untuk terus melestarikan dan mempromosikan
                 budaya Indonesia. Setiap dukungan Anda sangat berarti.</p>
             <div class="flex flex-col sm:flex-row justify-center items-center gap-4 max-w-lg mx-auto">
                 <input type="email" placeholder="Masukkan email Anda"
                     class="w-full bg-white/20 text-white placeholder-gray-300 px-4 py-3 rounded-full border-2 border-transparent focus:border-orange-500 focus:ring-0 transition">
                 <button
                     class="w-full sm:w-auto bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition-colors font-semibold shrink-0">
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
                     <li class="flex items-center justify-center lg:justify-start gap-2"><span
                             class="text-orange-500 font-bold">•</span> Suku Jawa</li>
                     <li class="flex items-center justify-center lg:justify-start gap-2"><span
                             class="text-orange-500 font-bold">•</span> Suku Sunda</li>
                     <li class="flex items-center justify-center lg:justify-start gap-2"><span
                             class="text-orange-500 font-bold">•</span> Suku Batak</li>
                     <li class="flex items-center justify-center lg:justify-start gap-2"><span
                             class="text-orange-500 font-bold">•</span> Suku Betawi</li>
                 </ul>
                 <!-- Map Image -->
                 <div class="w-full lg:w-1/2 flex justify-center">
                     <img src="https://i.ibb.co/k30D0vJ/indonesia-map.png" alt="Peta Indonesia"
                         class="max-w-md w-full">
                 </div>
                 <!-- Right List -->
                 <ul class="space-y-3 text-gray-600 w-full lg:w-1/4 text-center lg:text-right">
                     <li class="flex items-center justify-center lg:justify-end gap-2">Suku Dayak <span
                             class="text-orange-500 font-bold">•</span></li>
                     <li class="flex items-center justify-center lg:justify-end gap-2">Suku Asmat <span
                             class="text-orange-500 font-bold">•</span></li>
                     <li class="flex items-center justify-center lg:justify-end gap-2">Suku Bugis <span
                             class="text-orange-500 font-bold">•</span></li>
                     <li class="flex items-center justify-center lg:justify-end gap-2">Suku Minang <span
                             class="text-orange-500 font-bold">•</span></li>
                 </ul>
             </div>
         </div>
     </section>



 </div>

 @include('components.footer')
 @include('layouts.footer')
