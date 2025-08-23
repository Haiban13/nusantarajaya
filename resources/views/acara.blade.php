@include('layouts.header')
@include('components.navbar')


<div>

    @include('components.main-header')
    @include('components.go-top')

    <div class="px-[3%] lg:konten lg:py-[3%] ">
        <div class="grid  grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-8">
            @for ($i = 0; $i < 5; $i++)
                @include('components.card-acara')
            @endfor
            {{-- batik efek bg --}}
            <img class="absolute w-[600px] opacity-60 z-[1]" src="assets/batik2.png" alt="">

        </div>
    </div>
</div>

<!-- Overlay dan fullscreen image -->
<div class="overlay" id="overlay">
    <img src="your-image.jpg" alt="Full" class="fullscreen-image">
</div>

@include('layouts.footer')
