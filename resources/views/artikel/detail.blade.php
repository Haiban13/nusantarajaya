@include('layouts.header')
@include('components.navbar')
@php use Carbon\Carbon; @endphp

<div class="lg:flex px-5    lg:px-[10%] lg:pt-[10%] pt-[20%]  gap-10 relative z-[4] ">
    <div>
       
        

        <div class="lg:flex items-center gap-5">
    {{-- Gambar Utama --}}
    @if ($detail_artikel->image?->img1)
        <img
            src="{{ asset('storage/' . $detail_artikel->image->img1) }}"
            class="object-cover bg-orange-200 w-full h-[250px] shadow md:h-[300px] lg:h-[500px] rounded-2xl"
            alt="Gambar Utama">
    @endif

    {{-- Thumbnails jika ada --}}
    <div class="grid grid-cols-4 md:grid-cols-1 gap-2 mt-5 lg:mt-0">
        @foreach (['img1', 'img2', 'img3', 'img4'] as $imgKey)
            @php
                $imgPath = $detail_artikel->image?->$imgKey;
            @endphp
            @if ($imgPath && file_exists(public_path('storage/' . $imgPath)))
                <img
                    src="{{ asset('storage/' . $imgPath) }}"
                       data-src="{{ asset('storage/' . $imgPath) }}"
                    alt="Thumbnail {{ $imgKey }}"
                    class="w-full h-[100px] object-cover bg-zinc-50 rounded-xl shadow thumbnail">
            @endif
        @endforeach
    </div>
</div>








        <div
            class="px-10 py-2 rounded-full text-xs md:text-base bg-orange-600 mt-10 bg-opacity-25 w-fit text-orange-700 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path fill="currentColor"
                    d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z" />
            </svg>
            <div class="hidden md:block">
                <span class="font-bold">
                    {{ Carbon::parse($detail_artikel->tanggal_mulai)->translatedFormat('l, d ') }}
                </span>
                <span class="">
                    {{ Carbon::parse($detail_artikel->tanggal_mulai)->translatedFormat(' Y F') }}
                </span>
                -
                <span class="font-bold">
                    {{ Carbon::parse($detail_artikel->tanggal_akhir)->translatedFormat('l, d ') }}
                </span>
                <span class="">
                    {{ Carbon::parse($detail_artikel->tanggal_akhir)->translatedFormat(' Y F') }}
                </span>
            </div>
            <div class=" md:hidden">
                <span class="font-bold">
                    {{ Carbon::parse($detail_artikel->tanggal_mulai)->translatedFormat(' d ') }}
                </span>
                <span class="">
                    {{ Carbon::parse($detail_artikel->tanggal_mulai)->translatedFormat('  F ') }}
                </span>
                -
                <span class="font-bold">
                    {{ Carbon::parse($detail_artikel->tanggal_akhir)->translatedFormat(' d ') }}
                </span>
                <span class="">
                    {{ Carbon::parse($detail_artikel->tanggal_akhir)->translatedFormat(' F Y ') }}
                </span>
            </div>
        </div>
        <h1 class="text-2xl lg:text-5xl mt-10 font-bold">{{ $detail_artikel->judul }}</h1>

        @include('components.user-profile')

        <div class="mt-10 lg:text-2xl">
            <div class="whitespace-pre-wrap">{{ $detail_artikel->detail_acara }}</div>

            {{-- {{ $detail_artikel->detail_acara }} --}}
        </div>
        <br>
    </div>
    <div class="lg:px-10 py-3 lg:bg-orange-100 rounded-2xl w-full lg:min-w-[30%]">
        <div class="flex justify-between ">
            <h4 class=" text-2xl font-bold">Berita Terbaru</h4>
        </div>
        @foreach ($data_artikel as $artikel)
            @include('components.card-artikel3')
        @endforeach
    </div>
</div>

<img src="{{ asset('storage/' . $detail_artikel->image->img1) }}"
    class="w-full h-[250px] lg:h-[500px] bg-orange-900 absolute top-0  brightness-50 object-cover">



<!-- Modal fullscreen viewer -->
<div class="overlay" id="overlay">
    <img src="" alt="Full" class="fullscreen-image" id="fullscreenImage">
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
