@include('layouts.header')
@include('components.navbar')

<div class=" px-[10%] pt-[15%] pb-[15%]">
    <div class=" text-center ">
        <h1 class=" text-4xl font-bold merriweather">Tim Pengembang</h1>
        <p class="mt-5 px-[10%] text-xl">Kami adalah tim pengembang yang berdedikasi untuk menciptakan solusi digital
            yang berdampak
            positif bagi masyarakat. Dengan semangat kolaborasi, kami menggabungkan kreativitas dan teknologi untuk
            menghasilkan produk yang berkualitas dan inovatif. Setiap baris kode yang kami tulis mencerminkan komitmen
            kami terhadap kemudahan, keandalan, dan pengalaman pengguna yang optimal.</p>
    </div>
    {{-- card --}}
    <div class="flex justify-center gap-10 items-center mt-[150px]">
        <div class="w-[70%]">
            <div 
                class=" bg-white shadow-lg hover:bg-zinc-100 hover:scale-105 duration-300 cursor-pointer rounded-xl overflow-hidden flex items-center px-20  py-5">
                <!-- Foto Kiri -->
                <img src="https://ua-lawyer.com/static/default-user.png" alt="Profile"
                    class="w-[120px] h-[120px] rounded-full object-cover bg-zinc-800">

                <!-- Info Kanan -->
                <div class="ml-10 flex flex-col justify-center">
                    <p class="text-orange-600 text-xl font-semibold mb-2">Front end Developer</p>
                    <h2 class="text-4xl font-bold text-gray-800 merriweather">Hafiz Alwan </h2>
                    <p class="w-[97%] my-2">Mendesain UI yang menarik dan mengintegrasikan AI ke dalam sistem. Fokus
                        pada
                        kenyamanan pengguna dan
                        kecerdasan fitur.
                    </p>


                    <!-- Ikon Media Sosial -->
                    <div class="flex mt-2 gap-3 text-gray-500">
                        <a href="#" class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-sky-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2m-5.15 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 0 1-4.33 3.56M14.34 14H9.66c-.1-.66-.16-1.32-.16-2s.06-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2M12 19.96c-.83-1.2-1.5-2.53-1.91-3.96h3.82c-.41 1.43-1.08 2.76-1.91 3.96M8 8H5.08A7.92 7.92 0 0 1 9.4 4.44C8.8 5.55 8.35 6.75 8 8m-2.92 8H8c.35 1.25.8 2.45 1.4 3.56A8 8 0 0 1 5.08 16m-.82-2C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2M12 4.03c.83 1.2 1.5 2.54 1.91 3.97h-3.82c.41-1.43 1.08-2.77 1.91-3.97M18.92 8h-2.95a15.7 15.7 0 0 0-1.38-3.56c1.84.63 3.37 1.9 4.33 3.56M12 2C6.47 2 2 6.5 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div 
                class="mt-10 bg-white shadow-lg
             hover:bg-zinc-100 hover:scale-105 duration-300 cursor-pointer rounded-xl overflow-hidden flex items-center px-20  py-5">
                <!-- Foto Kiri -->
                <img src="https://ua-lawyer.com/static/default-user.png" alt="Profile"
                    class="w-[120px] h-[120px] rounded-full object-cover bg-zinc-800">

                <!-- Info Kanan -->
                <div class="ml-10 flex flex-col justify-center">
                    <p class="text-orange-600 text-xl font-semibold mb-2">Back end Developer</p>
                    <h2 class="text-4xl font-bold text-gray-800 merriweather">Haiban Aufar</h2>
                    <p class="w-[97%] my-2">
                        Mengelola struktur database dan memastikan data tersimpan dengan baik. Bertanggung jawab atas
                        kestabilan dan efisiensi penyimpanan data.
                    </p>

                    <!-- Ikon Media Sosial -->
                    <div class="flex mt-2 gap-3 text-gray-500">
                        <a href="#" class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-sky-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-pink-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2m-5.15 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 0 1-4.33 3.56M14.34 14H9.66c-.1-.66-.16-1.32-.16-2s.06-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2M12 19.96c-.83-1.2-1.5-2.53-1.91-3.96h3.82c-.41 1.43-1.08 2.76-1.91 3.96M8 8H5.08A7.92 7.92 0 0 1 9.4 4.44C8.8 5.55 8.35 6.75 8 8m-2.92 8H8c.35 1.25.8 2.45 1.4 3.56A8 8 0 0 1 5.08 16m-.82-2C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2M12 4.03c.83 1.2 1.5 2.54 1.91 3.97h-3.82c.41-1.43 1.08-2.77 1.91-3.97M18.92 8h-2.95a15.7 15.7 0 0 0-1.38-3.56c1.84.63 3.37 1.9 4.33 3.56M12 2C6.47 2 2 6.5 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- qris --}}
        <div class="w-[30%] shadow-2xl hover:scale-105 duration-200">
            <img src="https://beasiswa.kamajaya.id/wp-content/uploads/2021/04/qris-yayasan-bakti-kamajaya-pf.jpg"
                class=" " alt="">
        </div>

    </div>
</div>
<div>
    <div class=" px-[20%] text-center text-xl">
        <h1 class=" text-4xl font-bold merriweather text-center">
            Teknologi yang digunakan
        </h1>
        <p class="mt-5">
            Proyek ini dibangun menggunakan HTML, CSS, JavaScript, dan Tailwind CSS untuk tampilan. Laravel digunakan
            sebagai framework backend dengan MySQL sebagai basis data, serta Filament untuk dashboard dan GitHub sebagai
            kontrol versi.
        </p>
    </div>
    <div class="scroll-wrapper mt-16">
        <div class="scroll-content" id="scrollContent">
            <img class="max-h-[70px] mx-10"
                src="https://www.unimedia.tech/wp-content/uploads/2023/11/2560px-Logo.min_.svg_-1024x297.png">
            <img class="max-h-[70px] mx-10"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Tailwind_CSS_logo.svg/512px-Tailwind_CSS_logo.svg.png">
            <img class="max-h-[70px] mx-10" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg">
            <img class="max-h-[70px] mx-10"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Sql_data_base_with_logo.png/800px-Sql_data_base_with_logo.png">
            <img class="max-h-[70px] mx-10"
                src="https://garapmedia.com/wp-content/uploads/2025/01/01J4TYXBRT9FYKKKPTXFVSQE3T.png">
            {{-- <img class="max-h-[70px] mx-10" src=""> --}}

        </div>
    </div>
</div>



@include('components.footer')
@include('layouts.footer')
