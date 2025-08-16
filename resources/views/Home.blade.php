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
     @include('components.headerv2')
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
             @for ($i = 0; $i < 5; $i++)
                 @include('components.card-acara')
             @endfor
         </div>
     </section>

     <section class="container mx-auto px-6 py-16" data-aos="fade-up" data-aos-duration="500">
         <div class="flex items-center justify-between">

             <div>
                 <h2 class="text-3xl font-bold text-gray-800 mb-2">Berita Terkini</h2>
                 <p class="text-gray-500 mb-8">Jangan lewatkan acara-acara budaya paling menarik yang akan datang.</p>
             </div>
             <button class="btn-line">Lihat Lainnya</button>
         </div>

         <div class="lg:flex gap-5 justify-between">

             <div class="grid grid-cols-2 lg:w-[70%]   gap-5">
                 @for ($i = 0; $i < 5; $i++)
                     @include('components.card-artikel2')
                 @endfor
             </div>
             <div class=" hidden lg:block bg-zinc-100 px-5 py-10 w-[30%] rounded-3xl">
                 <div class="flex justify-between items-center">
                     <h1 class=" text-3xl font-bold">Penguna Ter-Aktif</h1>
                     <button class=" text-orange-700">
                         Lainnya
                     </button>
                 </div>
                 {{-- card populer --}}
                 <div class="flex  items-center my-5 gap-5">
                     <div class="w-[55px] h-[55px] rounded-full bg-zinc-400"></div>
                     <div>
                         <h1 class="flex items-center gap-2">Hafiz Alwan Susilo <span><svg class="text-blue-500"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24">
                                     <path fill="currentColor"
                                         d="m8.6 22.5l-1.9-3.2l-3.6-.8l.35-3.7L1 12l2.45-2.8l-.35-3.7l3.6-.8l1.9-3.2L12 2.95l3.4-1.45l1.9 3.2l3.6.8l-.35 3.7L23 12l-2.45 2.8l.35 3.7l-3.6.8l-1.9 3.2l-3.4-1.45zm2.35-6.95L16.6 9.9l-1.4-1.45l-4.25 4.25l-2.15-2.1L7.4 12z" />
                                 </svg></span></h1>
                         {{-- keterangan --}}
                         <p class=" text-orange-600 font-medium">Dinas Kebudayaan Purwokerto</p>
                         {{-- <p>User Silver</p> --}}
                     </div>

                 </div>

             </div>
         </div>

     </section>

     <!-- =================================================================== -->
     <!-- "Warisan Budaya" (Cultural Heritage) Section -->
     <!-- =================================================================== -->
     <section class="container mx-auto px-6 py-16">
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-5 merriweather">Warisan Budaya</h2>
            <p class="w-[70%]">Warisan budaya adalah peninggalan berharga dari generasi sebelumnya berupa nilai, adat, seni, tradisi, dan benda budaya yang mencerminkan identitas suatu bangsa dan diwariskan untuk dijaga, dilestarikan, dan dihargai oleh generasi penerus.</p>
        </div>
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mt-10">
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
                 <img src="assets/karakter.png" alt="Character Illustration" class="max-w-xs md:max-w-sm">
             </div>
             <!-- Feature List -->
             <div class="space-y-8">
                 <div data-aos="fade-up" data-aos-duration="500">
                     <div class="h-[5px] mb-10 rounded-full bg-orange-600 w-[130px]"></div>
                     <h2 class="text-3xl font-bold text-gray-800 mb-2 merriweather">Kenapa
                         Memilih Kami?</h2>
                     <p>Kami dipilih karena mengutamakan kualitas, kecepatan layanan, dan komitmen menghadirkan solusi
                         yang inovatif dan terpercaya.</p>
                 </div>
                 <div class="flex items-start space-x-4 mt-5" data-aos="fade-up" data-aos-duration="500">
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
         <div class=" mx-auto px-6 py-20 text-center text-white">
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
     <div id="container"></div>



 </div>

 @include('components.footer')
 @include('layouts.footer')
