 <!-- Loading Screen -->
 <div id="loading-screen">
     <div id="loading-text">Memuat...</div>
 </div>

 <!-- Konten utama -->
 <div id="main-content">
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



         {{-- tutorial --}}
         <div class="lg:flex items-center gap-10 justify-center w-full hidden mt-[10%]">
             <h1 class=" text-4xl font-bold  ">Langkah Menjadi <br> Event Orginize</h1>
             <div>
                 <div class="relative">
                     <div class=" w-[80%] mb-4 rounded-full mt-1 absolute bg-orange-600 min-h-[4px] ">
                     </div>
                     <div class="flex items-center w-[80%] justify-between absolute z-10 ">
                         <div class="w-[15px] h-[15px] bg-orange-700 rounded-full  "></div>
                         <div class="w-[15px] h-[15px] bg-orange-700 rounded-full "></div>
                         <div class="w-[15px] h-[15px] bg-orange-700 rounded-full "></div>
                     </div>
                 </div>
                 <div class="flex items-center gap-10 justify-center mt-5">
                     <div class=" text-center px-10 flex items-center gap-3" data-aos="fade-up"
                         data-aos-duration="1000">
                         <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                             <g fill="none" fill-rule="evenodd" clip-rule="evenodd">
                                 <path fill="#020202"
                                     d="M22.793 11.798a3 3 0 0 0-1.835-.688a2.2 2.2 0 0 0-.749.17q-.482.23-.877.588a.35.35 0 0 0-.07.479a.36.36 0 0 0 .489.07q.293-.234.618-.42c.198-.089.411-.14.628-.15c.498.03.97.232 1.337.57a1.57 1.57 0 0 1 .618 1.167a2.4 2.4 0 0 1-.309.997q-.286.493-.698.888c-.818.798-2.075 2.124-3.262 3.421s-2.294 2.534-2.853 3.092a7.4 7.4 0 0 1-2.683.838c0-3.56.2-3.092.499-3.491c.997-1.337 3.491-4.23 4.628-5.546l.579-.678a.4.4 0 0 0 .05-.15a.299.299 0 0 0-.539-.22l-.598.649c-1.197 1.277-3.83 4.08-4.908 5.376a2.8 2.8 0 0 0-.569.918c0 .3-.279 2.404-.299 3.272c-.023.262.04.525.18.748a1.42 1.42 0 0 0 1.127.28q1.386-.24 2.723-.679c.357-.221.677-.497.948-.818c1.316-1.426 4.189-4.808 5.635-6.314c.33-.35.606-.746.818-1.177c.223-.433.349-.91.37-1.397a2.4 2.4 0 0 0-.998-1.795M9.885 20.706c-1.596 0-3.5 0-5.107-.07q-1.337-.018-2.663-.18c-.17 0-.33-.13-.39-.1a1.5 1.5 0 0 1-.089-.459v-.847c-.06-.728-.13-3.81-.25-6.863c-.189-3.262-.378-6.504-.378-6.823v-.349c.293-.211.637-.339.997-.37c.32 0 .659 0 .998-.059q-.09.26-.15.529a1.5 1.5 0 0 0 0 .439c0 .289.08.668.08.668a.57.57 0 0 0 .519.499h4.907c1.327 0 2.584 0 3.292-.08a.3.3 0 0 0 .33-.26a.3.3 0 0 0-.204-.264a.3.3 0 0 0-.116-.015c-.559 0-1.437 0-2.424-.07c-1.975-.09-4.24-.259-5.237-.339v-.299a4 4 0 0 1 .14-.479q.065-.191.18-.359c.154-.215.364-.385.608-.489a6.4 6.4 0 0 1 1.426-.429l.29-.07a.6.6 0 0 0 .349-.249a.63.63 0 0 0 .08-.449l-.13-.668a.86.86 0 0 1 .319-.658c.26-.218.568-.372.898-.45a.86.86 0 0 1 .498 0c.177.054.338.15.47.28c.172.18.29.404.338.649a3.7 3.7 0 0 1 .06.897a.45.45 0 0 0 .39.45q.506.042.997.179a3.8 3.8 0 0 1 .897.399c.209.143.36.355.43.598q.123.446.13.908a.35.35 0 0 0 .687 0a3.6 3.6 0 0 0-.19-1.337a1.73 1.73 0 0 0-.618-.818a4.4 4.4 0 0 0-1.077-.538a4.6 4.6 0 0 0-.748-.2a3.1 3.1 0 0 0-.09-.997a2.5 2.5 0 0 0-.479-.798a2.3 2.3 0 0 0-.867-.599A1.9 1.9 0 0 0 7.89.027c-.61.126-1.17.431-1.606.878a1.93 1.93 0 0 0-.508 1.297v.35a7 7 0 0 0-1.417.468c-.4.206-.742.508-.997.878v.08a10.5 10.5 0 0 0-1.766.04c-.358.06-.699.2-.997.408a.73.73 0 0 0-.24.31a2.5 2.5 0 0 0-.11.528c0 .32-.09 3.631 0 6.983c.06 3.072.21 6.174.27 6.912q.033.668.19 1.317c.06.264.187.508.369.708c.166.135.366.221.578.25q.72.11 1.446.12c1.776 0 4.619-.07 6.843-.13a.35.35 0 0 0 0-.699zm4.09-16.429q.315.075.589.25q.196.134.349.318l.06.17c0 .499 0 1.526.09 2.743c0 .439.05.908.09 1.377c.099 1.117.239 2.254.278 3.202a.31.31 0 0 0 .619 0c.1-.998.2-2.125.21-3.262V7.678q-.12-1.392-.39-2.763a1.4 1.4 0 0 0-.18-.518a2.4 2.4 0 0 0-.717-.549a2.4 2.4 0 0 0-.848-.25a.34.34 0 0 0-.4.28a.34.34 0 0 0 .25.399" />
                                 <path fill="#0c6fff"
                                     d="M12.489 15.409a.6.6 0 0 0 .349-.34a.35.35 0 0 0-.15-.458c0-.16-.13-.38-.17-.509a.54.54 0 0 0-.608-.469a1 1 0 0 0-.359.2c-.16.13-.319.319-.419.399a3.5 3.5 0 0 1-.997.698a.82.82 0 0 1-.858-.07v-.08a1.4 1.4 0 0 1 0-.349c.127-.555.3-1.1.519-1.626a.559.559 0 0 0-.998-.339a9.8 9.8 0 0 1-2.135 2.614c-.538.429-1.077.698-1.556.389c-.319-.19-.369-.629-.379-1.088c.026-.81.167-1.613.42-2.384q.055-.17.139-.329q.105-.165.23-.319a2.1 2.1 0 0 1 .528-.499a.65.65 0 0 1 .559-.09a.31.31 0 0 0 .399-.17a.31.31 0 0 0-.18-.398a1.17 1.17 0 0 0-.898 0c-.387.148-.73.391-.997.708c-.13.15-.22.25-.3.36a2.7 2.7 0 0 0-.239.458a8.3 8.3 0 0 0-.688 3.142a2 2 0 0 0 .758 1.536a2.1 2.1 0 0 0 2.284 0A5.7 5.7 0 0 0 8.29 15.06a1 1 0 0 0 .42.618a1.68 1.68 0 0 0 1.436.2a4.2 4.2 0 0 0 1.516-.998l.11-.13q.105.257.239.5a.39.39 0 0 0 .479.159" />
                             </g>
                         </svg>
                         <div class=" text-left ">
                             <h3 class=" text-xl font-bold">1. Daftar Anggota</h3>
                             <p><a href=""> <span class="hover:cursor-pointer text-orange-600 font-bold"> Hubungi
                                         Admin</span></a> untuk melakukan ferivikasi data</p>
                         </div>
                     </div>
                     <div class=" text-center px-10 flex items-center gap-3" data-aos="fade-up"
                         data-aos-duration="2000">
                         <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                             <path fill="currentColor"
                                 d="M13 8V4q0-.425.288-.712T14 3h6q.425 0 .713.288T21 4v4q0 .425-.288.713T20 9h-6q-.425 0-.712-.288T13 8M3 12V4q0-.425.288-.712T4 3h6q.425 0 .713.288T11 4v8q0 .425-.288.713T10 13H4q-.425 0-.712-.288T3 12m10 8v-8q0-.425.288-.712T14 11h6q.425 0 .713.288T21 12v8q0 .425-.288.713T20 21h-6q-.425 0-.712-.288T13 20M3 20v-4q0-.425.288-.712T4 15h6q.425 0 .713.288T11 16v4q0 .425-.288.713T10 21H4q-.425 0-.712-.288T3 20m2-9h4V5H5zm10 8h4v-6h-4zm0-12h4V5h-4zM5 19h4v-2H5zm4-2" />
                         </svg>
                         <div class=" text-left">
                             <h3 class=" text-xl font-bold">2. Masuk Ke Dashboard Admin</h3>
                             <p>setelah di acc oleh admin login akun</p>
                         </div>
                     </div>
                     <div class=" text-center px-10 flex items-center gap-3" data-aos="fade-up"
                         data-aos-duration="3000">
                         <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24">
                             <path fill="currentColor"
                                 d="M16 13h-3c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1m0-10v1H8V3c0-.55-.45-1-1-1s-1 .45-1 1v1H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-1V3c0-.55-.45-1-1-1s-1 .45-1 1m2 17H6c-.55 0-1-.45-1-1V9h14v10c0 .55-.45 1-1 1" />
                         </svg>
                         <div class=" text-left">
                             <h3 class=" text-xl font-bold">3. Masuk Ke Halaman Event</h3>
                             <p>Tambah Acara dan isi semua form </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <!-- =================================================================== -->
         <!-- Features/Benefits Section -->
         <!-- =================================================================== -->
         <section class="container mt-[10%] mx-auto px-6 py-16">
             <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                 <!-- Illustration -->
                 <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000">
                     <img src="assets/karakter.png" alt="Character Illustration" class="max-w-xs md:max-w-sm">
                 </div>
                 <!-- Feature List -->
                 <div class="space-y-8">
                     <div data-aos="fade-up" data-aos-duration="500">
                         {{-- line --}}
                         <div class="h-[5px] mb-4 rounded-full bg-orange-600 w-[130px]"></div>
                         <h2 class="text-3xl font-bold text-gray-800 mb-2 merriweather">Kenapa
                             Memilih Kami?</h2>
                         <p>Kami dipilih karena mengutamakan kualitas, kecepatan layanan, dan komitmen menghadirkan
                             solusi
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
                             <p class="text-gray-500 mt-1">Sumber informasi yang kaya dan terverifikasi untuk
                                 pendidikan.
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
                             <p class="text-gray-500 mt-1">Akses informasi budaya tanpa perlu biaya perjalanan yang
                                 mahal.
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
         <!-- "Warisan Budaya" (Cultural Heritage) Section -->
         <!-- =================================================================== -->
         {{-- batik efek bg --}}
         <img class="absolute right-0 w-[600px] opacity-60 z-[1]" src="assets/batik2.png" alt="">

         <section class="container mt-[10%] mx-auto px-6 py-16 relative z-[4]">
             <div>
                 <h2 class="text-4xl font-bold text-gray-800 mb-5 merriweather">Ragam Budaya</h2>
                 <p class="w-full md:w-[70%]">Warisan budaya adalah peninggalan berharga dari generasi sebelumnya
                     berupa nilai,
                     adat, seni, tradisi, dan benda budaya yang mencerminkan identitas suatu bangsa dan diwariskan untuk
                     dijaga, dilestarikan, dan dihargai oleh generasi penerus.</p>
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
                     {{-- img1: Kuliner --}}
                     <a href="#">
                         <div data-aos="fade-up" data-aos-duration="500"
                             class="custom-card relative w-full cursor-pointer h-[190px] bg-center bg-cover flex items-center justify-center overflow-hidden rounded-lg transition-all"
                             style="background-image: url('assets/kuliner.webp') ">
                             <div class="cc-content text-center backdrop-blur-sm">
                                 <p class="cc-title text-2xl font-bold text-[#333]">Kuliner</p>
                                 <p class="cc-description mt-2 text-sm text-[#777] leading-5">
                                     Keanekaragaman makanan tradisional khas Indonesia yang menggugah selera, dari
                                     rendang
                                     hingga gudeg.
                                 </p>
                             </div>
                         </div>
                     </a>
                     {{-- img2: Seni --}}
                     <a href="#">
                         <div data-aos="fade-up" data-aos-duration="1000"
                             class="custom-card relative w-full cursor-pointer h-[190px] bg-center bg-cover flex items-center justify-center overflow-hidden rounded-lg transition-all"
                             style="background-image: url('assets/tari.jpg') ">
                             <div class="cc-content text-center backdrop-blur-sm">
                                 <p class="cc-title text-2xl font-bold text-[#333]">Seni</p>
                                 <p class="cc-description mt-2 text-sm text-[#777] leading-5">
                                     Ragam seni tari dan pertunjukan yang mencerminkan keindahan budaya dan tradisi di
                                     seluruh nusantara.
                                 </p>
                             </div>
                         </div>
                     </a>
                     {{-- img3: Upacara --}}
                     <a href="#">
                         <div data-aos="fade-up" data-aos-duration="1500"
                             class="custom-card relative w-full cursor-pointer h-[190px] bg-center bg-cover flex items-center justify-center overflow-hidden rounded-lg transition-all"
                             style="background-image: url('assets/upacara.jpeg') ">
                             <div class="cc-content text-center backdrop-blur-sm">
                                 <p class="cc-title text-2xl font-bold text-[#333]">Upacara Adat</p>
                                 <p class="cc-description mt-2 text-sm text-[#777] leading-5">
                                     Berbagai upacara adat sebagai wujud penghormatan terhadap leluhur dan warisan
                                     budaya
                                     lokal.
                                 </p>
                             </div>
                         </div>
                     </a>
                     {{-- img4: Festival --}}
                     <a href="#">
                         <div data-aos="fade-up" data-aos-duration="2000"
                             class="custom-card relative w-full cursor-pointer h-[190px] bg-center bg-cover flex items-center justify-center overflow-hidden rounded-lg transition-all"
                             style="background-image: url('assets/festival.webp') ">
                             <div class="cc-content text-center backdrop-blur-sm">
                                 <p class="cc-title text-2xl font-bold text-[#333]">Festival</p>
                                 <p class="cc-description mt-2 text-sm text-[#777] leading-5">
                                     Perayaan budaya penuh warna seperti Festival Danau Toba dan Jember Fashion
                                     Carnival.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </section>

         <!-- =================================================================== -->
         <!-- "Acara Terbaru" (Latest Events) Section -->
         <!-- =================================================================== -->
         <section class="container mx-auto px-6 py-16 mt-[10%]" data-aos="fade-up" data-aos-duration="500">
             <div class="flex items-center justify-between">
                 <div>
                     <h2 class="text-3xl font-bold text-gray-800 mb-2">Acara Terbaru</h2>
                     <p class="text-gray-500 mb-8 ">Jangan lewatkan acara-acara budaya paling menarik yang akan datang.
                     </p>
                 </div>
                 <button class="btn-line flex items-center gap-2"><span class="hidden md:block">Lihat </span> Lainnya <svg class=" rotate-90"
                         xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16">
                         <path fill="currentColor"
                             d="M10.843 13.069L6.232 8.384a.546.546 0 0 1 0-.768l4.61-4.685a.55.55 0 0 0 0-.771a.53.53 0 0 0-.759 0l-4.61 4.684a1.65 1.65 0 0 0 0 2.312l4.61 4.684a.53.53 0 0 0 .76 0a.55.55 0 0 0 0-.771" />
                     </svg></button>
             </div>
             <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                 @for ($i = 0; $i < 5; $i++)
                     @include('components.card-acara')
                 @endfor
             </div>
         </section>

         {{-- batik efek bg --}}
         <img class="absolute w-[600px] opacity-60 z-[1]" src="assets/batik2.png" alt="">

         <section class="container mx-auto px-6 py-16 mt-[10%] relative z-[4]" data-aos="fade-up"
             data-aos-duration="500">
             <div class="flex items-center justify-between">
                 <div>
                     <h2 class="text-3xl font-bold text-gray-800 mb-2">Berita Terkini</h2>
                     <p class="text-gray-500 mb-8">Jangan lewatkan acara-acara budaya paling menarik yang akan datang.
                     </p>
                 </div>
                 <button class="btn-line flex items-center gap-2"><span class="hidden md:block">Lihat </span> Lainnya <svg class=" rotate-90"
                         xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16">
                         <path fill="currentColor"
                             d="M10.843 13.069L6.232 8.384a.546.546 0 0 1 0-.768l4.61-4.685a.55.55 0 0 0 0-.771a.53.53 0 0 0-.759 0l-4.61 4.684a1.65 1.65 0 0 0 0 2.312l4.61 4.684a.53.53 0 0 0 .76 0a.55.55 0 0 0 0-.771" />
                     </svg></button>
             </div>
             <div class="lg:flex gap-5 justify-between">
                 <div class="grid lg:grid-cols-2 lg:w-[70%]   gap-10">
                     @for ($i = 0; $i < 5; $i++)
                         @include('components.card-artikel3')
                     @endfor
                 </div>
                 <div class=" hidden lg:block bg-zinc-100 px-10 py-10 w-[30%] rounded-3xl">
                     <div class="flex justify-between items-center">
                         <h1 class=" text-xl font-bold">Penguna Ter-Aktif</h1>
                         <button class=" text-orange-700">
                             Lainnya
                         </button>
                     </div>
                     {{-- card populer --}}
                     @for ($i = 0; $i < 4; $i++)
                         <div class="flex  items-center my-5 gap-5" data-aos="fade-up" data-aos-duration="500">
                             <div class="bg-cover bg-center w-[55px] h-[55px] rounded-full bg-zinc-400"
                                 style="background-image: url('https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTZ8fHBlb3BsZXxlbnwwfHwwfHx8MA%3D%3D')">
                             </div>
                             <div>
                                 <h1 class="flex items-center text-xl gap-2">Hafiz Alwan Susilo <span><svg
                                             class="text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24">
                                             <path fill="currentColor"
                                                 d="m8.6 22.5l-1.9-3.2l-3.6-.8l.35-3.7L1 12l2.45-2.8l-.35-3.7l3.6-.8l1.9-3.2L12 2.95l3.4-1.45l1.9 3.2l3.6.8l-.35 3.7L23 12l-2.45 2.8l.35 3.7l-3.6.8l-1.9 3.2l-3.4-1.45zm2.35-6.95L16.6 9.9l-1.4-1.45l-4.25 4.25l-2.15-2.1L7.4 12z" />
                                         </svg></span></h1>
                                 {{-- keterangan --}}
                                 <p class=" text-orange-600 font-medium">Dinas Kebudayaan Purwokerto</p>
                                 {{-- <p>User Silver</p> --}}
                             </div>
                         </div>
                     @endfor
                 </div>
             </div>
         </section>




         <!-- =================================================================== -->
         <!-- CTA (Call to Action) Section -->
         <!-- =================================================================== -->
         <div
             class="w-[80%]  mx-auto  grid lg:grid-cols-2 row rounded-3xl bg-zinc-900  px-[5%] py-7 items-center text-zinc-50">
             <div class="order-2 lg:order-1">
                 {{-- line --}}
                 <div class="h-[5px] mb-4 rounded-full bg-orange-600 w-[130px]"></div>
                 <h1 class="text-4xl leading-snug font-semibold">
                     Temukan pesona budaya lokal yang kaya dan jadilah bagian dari pelestarian warisan Indonesia.
                 </h1>
                 <div class="flex items-center gap-3 mt-5">
                     <button class="btn-line flex items-center gap-3"><span class="hidden md:block">Lihat </span>Berita Terkini <svg
                             xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512">
                             <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"
                                 d="M368 415.86V72a24.07 24.07 0 0 0-24-24H72a24.07 24.07 0 0 0-24 24v352a40.12 40.12 0 0 0 40 40h328" />
                             <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"
                                 d="M416 464a48 48 0 0 1-48-48V128h72a24 24 0 0 1 24 24v264a48 48 0 0 1-48 48Z" />
                             <path fill="none" stroke="currentColor" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-width="32"
                                 d="M240 128h64m-64 64h64m-192 64h192m-192 64h192m-192 64h192" />
                             <path fill="currentColor"
                                 d="M176 208h-64a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v64a16 16 0 0 1-16 16" />
                         </svg></button>
                 </div>
             </div>

             <div class="flex justify-end order-1 lg:order-2">
                 <img src="assets/karakter2.png" class="w-[50%] " alt="">
             </div>
         </div>


         <!-- =================================================================== -->
         <!-- Map & Provinces Section -->
         <!-- =================================================================== -->
         <div id="container"></div>



     </div>

     @include('components.footer')
     @include('layouts.footer')



 </div>
