@include('layouts.header')
<!--
        Main container for the entire page.
        The background color is set in the <style> tag.
    -->
<div class="w-full">

    <!-- =================================================================== -->
    <!-- Header / Navigation Section -->
    <!-- =================================================================== -->

    @include('components.navbar')
    @include('components.go-top')

    <!-- =================================================================== -->
    <!-- Hero Section -->
    <!-- =================================================================== -->
    <section
        class="hero-bg h-[70vh] md:h-[90vh] rounded-b-3xl flex flex-col items-center justify-center text-white text-center relative overflow-hidden">
        <!-- Content Container -->
        <div class="z-10 flex flex-col items-center px-4">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 ">
                Lihat Ragam <br class="hidden md:block"> Budaya Di <span class="text-orange-500"> Indonesia</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-8">
                Jelajahi kekayaan budaya, tradisi, dan warisan nusantara di ujung jari Anda.
            </p>

            <!-- Search Bar -->
            <div class="w-full max-w-xl bg-white/20 backdrop-blur-sm p-2 rounded-full flex items-center">
                <input type="text" placeholder="Cari budaya, tarian, atau acara..."
                    class="w-full bg-transparent text-white placeholder-gray-300 border-none focus:ring-0 px-4 py-2">
                <button
                    class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors shrink-0">
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
        <div class="flex justify-between items-center " data-aos="fade-up" data-aos-duration="500">

            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Acara Terbaru</h2>
                <p class="text-gray-500 mb-8">Jangan lewatkan acara-acara budaya paling menarik yang akan datang.</p>
            </div>
            <button class="btn-line">Lihat Lainnya</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- card --}}
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
            <div class="w-full h-96" data-aos="fade-up" data-aos-duration="500">
                <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/XCM54pKkQSE?autoplay=1&mute=1&controls=0&loop=1&playlist=XCM54pKkQSE&rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>

            </div>
            <!-- Side Images -->
            <div class="grid grid-cols-2 gap-4">
                <img src="assets/074573700_1732950232-ciri-ciri-tari-kecak.jpg" data-aos="fade-up"
                    data-aos-duration="500" alt="Warisan 1" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                <img src="assets/Budaya-Daerah-adalah-Kekayaan-Kebudayaan-Nasional-Indonesia.jpg" data-aos="fade-up"
                    data-aos-duration="1000" alt="Warisan 2" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                <img src="assets/Pariwisata-Indonesia-Festival-Gawai-Dayak-2.jpg" data-aos="fade-up"
                    data-aos-duration="1500" alt="Warisan 3" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                <img src="assets/Timika-Inside-Festival-of-Art--TIFA--2024-Sukses-Digelar-dan-Membawa-Kebahagiaan-Bagi-Seluruh-Warga-Papua-Tengah-master-86757981.jpg"
                    data-aos="fade-up" data-aos-duration="2000" alt="Warisan 4"
                    class="w-full h-44 object-cover rounded-2xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- =================================================================== -->
    <!-- Features/Benefits Section -->
    <!-- =================================================================== -->
    <section class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Illustration -->
            <div class="flex justify-center" data-aos="fade-up" data-aos-duration="500">
                <img src="assets/karakter.png" alt="Character Illustration"
                    class="max-w-xs md:max-w-sm">
            </div>
            <!-- Feature List -->
            <div class="space-y-8" >
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Kenapa Memilih Kami?</h2>
                <div class="flex items-start space-x-4">
                    <div class="bg-orange-200 p-3 rounded-full">
                       <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9zm6.82 6L12 12.72L5.18 9L12 5.28zM17 16l-5 2.72L7 16v-3.73L12 15l5-2.73z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl text-gray-800">Untuk Media Pembelajaran</h3>
                        <p class="text-gray-500 mt-1">Sumber informasi yang kaya dan terverifikasi untuk pendidikan.
                        </p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="bg-green-200 p-3 rounded-full">
                       <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7M10.5 16a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0"/><path fill="currentColor" d="M17.526 5.116L14.347.659L2.658 9.997L2.01 9.99V10H1.5v12h21V10h-.962l-1.914-5.599zM19.425 10H9.397l7.469-2.546l1.522-.487zM15.55 5.79L7.84 8.418l6.106-4.878zM3.5 18.169v-4.34A3 3 0 0 0 5.33 12h13.34a3 3 0 0 0 1.83 1.83v4.34A3 3 0 0 0 18.67 20H5.332A3.01 3.01 0 0 0 3.5 18.169"/></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl text-gray-800">Hemat Biaya</h3>
                        <p class="text-gray-500 mt-1">Akses informasi budaya tanpa perlu biaya perjalanan yang mahal.
                        </p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-200 p-3 rounded-full">
                 <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 2048 2048"><path fill="currentColor" d="M496 883q13 0 29 4t32 11t32 13t29 12l-16 2q-8 1-17 1q-17 0-31-5t-26-13t-24-12t-22-6q-10 0-18 4t-16 9q0-4-7-4q7-7 26-11t29-5m135 45q41 0 75 14q-14 5-28 8t-29 4q-20 0-36-4q5-8 10-10t8-12M1024 0q141 0 271 37t244 103t208 161t160 207t104 244t37 272q0 141-37 271t-103 244t-161 208t-207 160t-244 104t-272 37q-141 0-271-37t-244-103t-208-161t-160-207t-104-244t-37-272q0-141 37-271t103-244t161-208t207-160T752 37t272-37m762 555q-14-22-28-42t-29-41q-2 9-5 13t-4 18q0 9 7 17t18 16t22 12t19 7m-69-98q0 8-3 11h6q4 0 6 1zm-693 1463q114 0 223-29t206-82t180-130t145-172q-13-30-25-61t-12-64q0-36 3-58t7-39t4-29t-3-31t-17-41t-37-62q1-7 3-19t4-25t1-24t-5-19q-26-3-54-11t-50-24l6-5q-13 3-26 8t-25 11t-26 8t-27 4l-16-2l3-7q-14 4-30 10t-31 6q-10 0-29-7t-38-17t-34-22t-15-23l2-3q-5-6-13-11t-15-10t-13-11t-5-14l11-9l-23-3l-8-30q2 5 9 4t11-4l-36-19l25-64q-14-52-7-80t27-46t44-36t49-49l-3-12l66-80l15-2q28 0 63-2t71-7t71-10t64-13q-32-38-67-72t-75-65q-11 4-27 11t-32 18t-25 24t-11 27l6 19q-18 29-40 36t-45 8t-48 0t-48 9l-16-34l15-58l-17-25l173-54q-11-28-36-42t-55-14v-10l56-9q-93-46-193-70t-205-24q-87 0-172 17t-164 49t-153 80t-135 108q26 0 40 13t26 29t25 29t35 14l16-12l-2-22l33-47l-26-74q5-3 15-10t17-7q30 0 46 3t28 11t21 23t28 38l36-28q10 4 32 13t45 22t39 27t17 26q0 15-11 24t-29 15t-37 9t-38 8t-29 10t-12 17l58 19q-20 17-43 31t-48 26l4 17l-92 36v28l-7 3l5-35l-4-1q-7 0-8 3t-1 7t2 8t1 6l-13-7l2 4q0 3 3 9t8 11t8 10t4 5q0 3-4 6t-10 4t-8 3t0 1q14 0 6 2t-25 10t-31 23t-16 44q0 17 1 33t-1 33q-14-38-42-58t-68-20l-43 4l21 14q-17-2-35-4t-37-1t-34 8t-30 21l-6 45q0 32 14 52t49 21q30 0 59-9t57-21q-9 22-20 42t-16 44l13 6q24-16 44-5t39 32t39 43t43 32l-34 18l-80-45q1 2 2 9t-1 3l-36-61q-32-1-68-10t-73-24t-69-33t-59-38l-7 107q0 122 33 238t93 218t147 186t193 143q-5-21-1-42t10-42t13-42t7-43q0-32-10-67t-24-71t-31-71t-27-66t-16-58t6-47l-15-7q6-14 16-27t21-26t17-28t7-30q0-10-4-21t-7-21l21 5q17-39 46-53t73-15q5 0 21 4t34 11t34 11t24 8q0 7 8 9t9 7l-2 8q3 1 14 7t24 15t23 16t14 11q18 0 49 12t68 30t73 43t68 50t49 50t20 44l-34 36q4 51-7 78t-34 45t-53 30t-65 34q0 20-10 43t-25 44t-36 35t-42 14l-42-32q2 2 0 7t-5 2q10 19 5 44t-17 51t-27 49t-27 39q54 14 108 21t109 7"/></svg>
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
