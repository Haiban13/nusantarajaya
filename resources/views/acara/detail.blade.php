@include('layouts.header')
@include('components.navbar')

<div class="  lg:px-[10%] lg:pt-[10%] pt-[20%]">
    <div class=" lg:grid grid-cols-2 items-center gap-[10%]">
        {{-- Grid Thumbnail --}}
            @foreach (['img1', 'img2', 'img3', 'img4'] as $img)
                @php
                    $imgPath = $detail_acara->image?->$img;
                @endphp
                @if ($imgPath)
                    <div class=" w-full  rounded-2xl h-[500px] bg-zinc-50 bg-center bg-cover thumbnail px-10"
                        data-src="{{ asset('storage/' . $imgPath) }}"
                        style="background-image: url('{{ asset('storage/' . $imgPath) }}')">
                    </div>
                @endif
            @endforeach

        {{-- Fullscreen Overlay --}}
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-80 hidden justify-center items-center z-50">
            <img id="fullscreenImage" class="max-h-[90vh] max-w-[90vw] rounded-xl shadow-xl" src="">
        </div>


        <div class="mt-10 lg:mt-0 px-[5%]">
            <div class="flex items-center gap-3 text-base lg:text-2xl">
                <p class="flex items-center gap-2 text-xs md:text-base "><svg class="w-[40px]  "
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
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
                    {{ $detail_acara->lokasi }}
                </p>

            </div>
            <h1 onclick="openModal()" class="cursor-pointer relative text-4xl font-bold mt-4 leading-tight w-fit">
                {{ $detail_acara->judul }}
                <span
                    class="inline-flex align-text-top ml-1 w-[16px] hover:opacity-70  hover:scale-105 duration-300 h-[16px] items-center justify-center rounded-full bg-red-500 opacity-20 text-red-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] h-[14px]" viewBox="0 0 48 48">
                        <path fill="currentColor"
                            d="M21 7a3 3 0 1 1 6 0v24a3 3 0 1 1-6 0zm0 34a3 3 0 1 1 6 0a3 3 0 0 1-6 0" />
                    </svg>
                </span>
            </h1>
            {{-- @foreach ($data_user as $user) --}}

            @include('components.user-profile')
            {{-- @endforeach --}}
            <h5 class="mb-3 font-semibold text-xl">Tanggal Dilaksanakan :</h5>
            @include('components.main-event')


            <div class="mt-10 flex items-center gap-3">
                @php
                    // Bersihkan nomor panitia dari +62 atau 62
                    $nomor = preg_replace('/^(\+62|62)/', '', $detail_acara->no_panitia);

                    // Pesan default WhatsApp
                    $pesan = urlencode(
                        'Halo, saya ingin mendaftar acara ini. Apakah ada formulir pendaftaran yang perlu saya isi?',
                    );
                @endphp

                <a href="https://wa.me/62{{ $nomor }}?text={{ $pesan }}" target="_blank">
                    <button class="btn-line text-xs px-7 md:px-10 flex items-center gap-2 md:text-base">Daftar Acara
                        <span class="hidden md:block">via WhatsApp</span> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg> </button>
                </a>
                <a href="{{ route('acara.index') }}">
                    <button class="btn-bg text-sm px-10 flex items-center gap-2 md:text-base"><span
                            class="hidden md:block"> Lihat</span> Acara Lainya</button>
                </a>
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
                    </a>
                </div>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('wa')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                    </a>
                </div>
            </div>



        </div>
    </div>
    <div class="px-[5%] md:px-10">


        <h2 class=" text-2xl lg:text-4xl font-bold mt-[10%] ">Detail Acara</h2>

        <p class="mt-5 text-base lg:text-2xl  ">
            {{ $detail_acara->detail_acara }}
        </p>
    </div>


    <div class="mt-[10%] px-[5%] lg:px-0">
        <div class=" flex items-center justify-between">
            <div>
                <h2 class=" text-3xl font-bold">Lihat Acara Lainnya</h2>
                <p class="mt-2 w-[70%] hidden md:block">
                    adipisicing elit. Iure magni laudantium quo necessitatibus deleniti quis quae exercitationem
                </p>
            </div>
            <a href="{{ route('acara.index') }}" class="btn-line md:flex items-center gap-2 hidden md:block"><span
                    class="hidden md:block">Lihat </span> Lainnya <svg class=" rotate-90"
                    xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M10.843 13.069L6.232 8.384a.546.546 0 0 1 0-.768l4.61-4.685a.55.55 0 0 0 0-.771a.53.53 0 0 0-.759 0l-4.61 4.684a1.65 1.65 0 0 0 0 2.312l4.61 4.684a.53.53 0 0 0 .76 0a.55.55 0 0 0 0-.771" />
                </svg></a>
        </div>
        <div class=" flex overflow-x-scroll lg:grid lg:grid-cols-5 overflow-y-hidden gap-3 mt-5 h-[120%]">
            @foreach ($data_acara as $acara)
                @include('components.card-acara')
            @endforeach
        </div>
    </div>
    <div class="mt-[10%] px-[5%] lg:px-0">
        <div class=" flex items-center justify-between">
            <div>
                <h2 class=" text-2xl lg:text-4xl font-bold">Lihat Berita Terbaru</h2>
                <p class="mt-2 w-[70%] hidden md:block">
                    adipisicing elit. Iure magni laudantium quo necessitatibus deleniti quis quae exercitationem
                </p>
            </div>
            <a href="{{ route('artikel.index') }}" class="btn-line flex items-center gap-2"><span
                    class="hidden md:block">Lihat </span> Lainnya <svg class=" rotate-90"
                    xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M10.843 13.069L6.232 8.384a.546.546 0 0 1 0-.768l4.61-4.685a.55.55 0 0 0 0-.771a.53.53 0 0 0-.759 0l-4.61 4.684a1.65 1.65 0 0 0 0 2.312l4.61 4.684a.53.53 0 0 0 .76 0a.55.55 0 0 0 0-.771" />
                </svg></a>
        </div>
        <div class=" grid lg:grid-cols-3 grid-cols-1 lg:gap-3 ">
            @foreach ($data_acara as $artikel)
                @include('components.card-artikel3')
            @endforeach
        </div>
    </div>
</div>
</div>

<!-- Fullscreen overlay -->
<div class="overlay" id="overlay">
    <img src="" alt="Full View" class="fullscreen-image" id="fullscreenImage">
</div>

<!-- MODAL report -->
<div id="popupModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-6 w-[75%] shadow-lg relative ">
        <button onclick="closeModal()"
            class="absolute top-2 right-2 text-zinc-500 hover:text-black text-5xl">&times;</button>

        <form action="" method="post" class=" text-zinc-950 relative lg:pb-16">
            <h2 class="text-3xl lg:text-4xl font-semibold mb-4">Laporkan Acara</h2>
            <p class=" text-zinc-700 w-[60%] hidden lg:block">Laporkan masalah yang Anda temui selama acara agar kami
                bisa segera menindaklanjuti dan meningkatkan kualitas pelayanan.
            </p>
            <div class="grid lg:grid-cols-2 gap-10">
                <div>
                    <div class="lg:mt-10">
                        <label for="">Nama Pelapor</label>
                        <input type="text" class="w-full bg-zinc-200 px-3 py-2" placeholder="Bang Toyip">
                    </div>
                    <div class="mt-10">
                        <form class="space-y-3">
                            <p class="font-semibold text-red-600">Laporkan pelanggaran serius:</p>
                            <div class="grid grid-cols-2 text-xs lg:text-base">

                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="keluhan[]" value="Penipuan / Scam"
                                        class="accent-red-600">
                                    <span>Penipuan / Scam</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="keluhan[]" value="Pungutan liar"
                                        class="accent-red-600">
                                    <span>Pungutan liar / Biaya tersembunyi</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="keluhan[]" value="Penyalahgunaan data"
                                        class="accent-red-600">
                                    <span>Penyalahgunaan data pribadi</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="keluhan[]" value="Konten tidak pantas"
                                        class="accent-red-600">
                                    <span>Konten tidak pantas / hoaks / provokasi</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" name="keluhan[]" value="Kekerasan atau pelecehan"
                                        class="accent-red-600">
                                    <span>Kekerasan fisik / pelecehan</span>
                                </label>
                            </div>

                        </form>

                    </div>
                </div>
                <div>
                    <label for="">Ceritakan Kronologi :</label>
                    <br>
                    <textarea name="" id="" class="bg-zinc-200 w-full h-[100px] lg:h-[300px] "></textarea>
                </div>
            </div>
            <button class="btn-bg mt-10 absolute right-10 bottom-4" type="submit"> Kirim Laporan</button>
        </form>
    </div>
</div>


<script>
    // Fullscreen overlay logic
    const overlay = document.getElementById('overlay');
    const fullscreenImage = document.getElementById('fullscreenImage');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(div => {
        div.addEventListener('click', () => {
            // Ambil dari atribut data-src
            const src = div.getAttribute('data-src');
            fullscreenImage.src = src;
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
        });
    });

    overlay.addEventListener('click', (e) => {
        if (e.target === overlay || e.target === fullscreenImage) {
            overlay.classList.remove('flex');
            overlay.classList.add('hidden');
            fullscreenImage.src = "";
        }
    });
</script>


@include('components.footer')
@include('layouts.footer')
