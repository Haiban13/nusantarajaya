@include('layouts.header')
@include('components.navbar')

<style>
    .masonry {
        column-count: 2;
        column-gap: 1.5rem;
    }

    @media (min-width: 768px) {
        .masonry {
            column-count: 2;
        }
    }

    @media (min-width: 1024px) {
        .masonry {
            column-count: 4;
        }
    }

    .masonry-item {
        break-inside: avoid;
        margin-bottom: 1.5rem;
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class=" px-[5%] mx-auto  lg:konten py-[30%] lg:py-[10%]  ">
    <div class="text-center  mb-[5%]">
        <h1 class="text-3xl lg:text-5xl font-bold   merriweather text-gradasi ">Galeri Budaya</h1>
        <p class="md:text-xl  px-[10%] mt-5 flex items-center">Selamat datang di Galeri Budaya! Di sini, kamu bisa melihat
            beragam
            dokumentasi visual dari berbagai kegiatan, acara, dan warisan budaya yang tersebar di seluruh penjuru
            Indonesia.
            {{-- <span class="hidden md:block"> --}}

            Setiap foto merekam keunikan, keindahan, dan kekayaan tradisi yang masih lestari hingga kini.
            Temukan inspirasi dan kagumi warna-warni budaya bangsa melalui galeri ini.
            {{-- </span> --}}
        </p>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-80 hidden justify-center items-center z-50">
        <img id="fullscreenImage" class="max-w-full max-h-full" />
    </div>


    <div class="masonry">
        @foreach ($images as $image)
            @php
                $paths = [$image->img1, $image->img2, $image->img3];
            @endphp

            @foreach ($paths as $img)
                @php
                    $filePath = storage_path('app/public/' . $img);
                    $showImage = false;

                    if (file_exists($filePath)) {
                        $fileSizeKB = filesize($filePath) / 1024; // KB
                        $showImage = $fileSizeKB >= 10 && $fileSizeKB <= 1224;
                    }
                @endphp

                @if ($showImage)
                    <div class="masonry-item bg-white">
                        <img data-src="{{ asset('storage/' . $img) }}" src="{{ asset('storage/' . $img) }}"
                            alt="Gambar" class="thumbnail w-full duration-300  h-auto object-cover">
                    </div>
                @endif
            @endforeach
        @endforeach
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
