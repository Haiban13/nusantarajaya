@include('layouts.header')
@include('components.navbar')

<div class="konten">
    <div class=" flex items-center gap-[10%]">

        <div class="w-[600px] h-[400px] bg-zinc-400"></div>
        <div>

            <div class="flex items-center gap-3 text-2xl">

                <p class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 16 16">
                        <g fill="none">
                            <path fill="url(#fluentColorLocationRipple162)"
                                d="M14 12.5C14 14 11.314 15 8 15s-6-1-6-2.5S4.686 10 8 10s6 1 6 2.5" />
                            <path fill="url(#fluentColorLocationRipple160)"
                                d="M8 1a5 5 0 0 0-5 5c0 1.144.65 2.35 1.393 3.372c.757 1.043 1.677 1.986 2.346 2.62a1.824 1.824 0 0 0 2.522 0c.669-.634 1.589-1.577 2.346-2.62C12.349 8.35 13 7.144 13 6a5 5 0 0 0-5-5" />
                            <path fill="url(#fluentColorLocationRipple161)"
                                d="M9.5 6a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" />
                            <defs>
                                <linearGradient id="fluentColorLocationRipple160" x1=".813" x2="8.969"
                                    y1="-2.285" y2="10.735" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#f97dbd" />
                                    <stop offset="1" stop-color="#d7257d" />
                                </linearGradient>
                                <linearGradient id="fluentColorLocationRipple161" x1="6.674" x2="8.236"
                                    y1="6.133" y2="7.757" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fdfdfd" />
                                    <stop offset="1" stop-color="#fecbe6" />
                                </linearGradient>
                                <radialGradient id="fluentColorLocationRipple162" cx="0" cy="0" r="1"
                                    gradientTransform="matrix(9.42857 -1.66667 .69566 3.93547 7.571 11.667)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7b7bff" />
                                    <stop offset=".502" stop-color="#a3a3ff" />
                                    <stop offset="1" stop-color="#ceb0ff" />
                                </radialGradient>
                            </defs>
                        </g>
                    </svg>
                    Bali, Pulau Bali
                </p>
                |
                <p>20 Desember 2022</p>
            </div>

            <h1 class=" text-4xl font-bold mt-4">Lorem ipsum dolor sit amet consectetur</h1>
            @include('components.user-profile')
            @include('components.main-event')

            <div class="mt-10 flex items-center gap-3">
                <button class="btn-line">Daftar Acara</button>
                <button class="btn-bg">Lihat Acara Lainya</button>
            </div>
            <div class="mt-10 flex items-center gap-3">
                <p class=" text-2xl font-bold">Share : </p>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('fb')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                d="M10.478 21.125a9.3 9.3 0 0 0 3.037.002m-3.038-.002A9.25 9.25 0 0 1 2.75 12a9.25 9.25 0 1 1 10.765 9.127m-3.038-.002V16.12H8.58a.6.6 0 0 1-.6-.6v-1.838a.6.6 0 0 1 .6-.6h1.897V9.95a3 3 0 0 1 3-3h1.81a1 1 0 0 1 1 1v1.04a1 1 0 0 1-1 1h-.772a1 1 0 0 0-1 1v2.092h2.297a.6.6 0 0 1 .592.698l-.25 1.504a1 1 0 0 1-.986.836h-1.653v5.007" />
                        </svg>
                    </a>
                </div>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('ig')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" class="bi bi-instagram icon-shere"
                            height="30" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01" />
                            </g>
                        </svg>
                    </a></div>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('wa')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                    </a></div>
            </div>

            <!-- Tombol Share -->
            {{-- <button
                class="relative inline-flex items-center px-4 py-2 bg-[#d97706] text-white rounded-lg overflow-hidden group hover:pl-12 transition-all duration-500 cursor-pointer">
                <!-- Ikon utama -->
                <div
                    class="absolute mt-5 left-2 top-1/2  -translate-y-1/2 bg-white rounded-md flex justify-center items-center transition-all duration-500 group-hover:w-[calc(100%-0.5rem)] icon-box">
                    <!-- Panah utama -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[20px] h-[20px] share-main"
                        viewBox="0 0 1024 1024">
                        <path fill="#d97706"
                            d="M767.99994 585.142857q75.995429 0 129.462857 53.394286t53.394286 129.462857-53.394286 129.462857-129.462857 53.394286-129.462857-53.394286-53.394286-129.462857q0-6.875429 1.170286-19.456l-205.677714-102.838857q-52.589714 49.152-124.562286 49.152-75.995429 0-129.462857-53.394286t-53.394286-129.462857 53.394286-129.462857 129.462857-53.394286q71.972571 0 124.562286 49.152l205.677714-102.838857q-1.170286-12.580571-1.170286-19.456 0-75.995429 53.394286-129.462857t129.462857-53.394286 129.462857 53.394286 53.394286 129.462857-53.394286 129.462857-129.462857 53.394286q-71.972571 0-124.562286-49.152l-205.677714 102.838857q1.170286 12.580571 1.170286 19.456t-1.170286 19.456l205.677714 102.838857q52.589714-49.152 124.562286-49.152z" />
                    </svg>

                    <!-- Ikon share lainnya -->
                    <div class="hidden group-hover:flex gap-2 items-center pl-3">
                        <a onclick="shareTo('fb')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-share" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8.94 8H10l.2-1.29H8.94V5.9c0-.38.1-.65.67-.65H10V4.22c-.12-.02-.55-.05-1.05-.05-1.05 0-1.77.63-1.77 1.78v1.05H6v1.29h1.12v3.13A5.99 5.99 0 0 0 8.94 14V8z" />
                            </svg>
                        </a>
                        <a onclick="shareTo('ig')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-share" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01" />
                            </svg>
                        </a>
                        <a onclick="shareTo('wa')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-share" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Text -->
                <span class="ml-10">Share me</span>
            </button> --}}



        </div>
    </div>

    <h2 class=" text-4xl font-bold mt-[10%]">Detail Acara</h2>
    <p class="mt-5 text-2xl">
        adipisicing elit. Iure magni laudantium quo necessitatibus deleniti quis quae exercitationem pariatur illo qui
        deserunt praesentium, ducimus porro molestiae beatae totam, alias nesciunt expedita. adipisicing elit. Iure
        magni laudantium quo necessitatibus deleniti quis quae exercitationem pariatur illo qui deserunt praesentium,
        ducimus porro molestiae beatae totam, alias nesciunt expedita.
    </p>

    <div class="mt-[10%]">
        <div class=" flex items-center justify-between">
            <div>
                <h2 class=" text-3xl font-bold">Lihat Acara di lokasi terdekat</h2>
                <p class="mt-2 w-[70%]">
                    adipisicing elit. Iure magni laudantium quo necessitatibus deleniti quis quae exercitationem
                </p>
            </div>
            <button class="btn-line">Lihat Lainnya</button>
        </div>
        <div class=" grid grid-cols-5 gap-3 mt-5">
            @include('components.card-acara')
        </div>
    </div>
    <div class="mt-[10%]">
        <div class=" flex items-center justify-between">
            <div>
                <h2 class=" text-3xl font-bold">Lihat Berita Terbaru</h2>
                <p class="mt-2 w-[70%]">
                    adipisicing elit. Iure magni laudantium quo necessitatibus deleniti quis quae exercitationem
                </p>
            </div>
            <button class="btn-line">Lihat Lainnya</button>
        </div>
        <div class=" grid grid-cols-2 gap-3 mt-5">
            @include('components.card-artikel')
        </div>
    </div>
</div>
@include('layouts.footer')
