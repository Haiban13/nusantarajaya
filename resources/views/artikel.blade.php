@include('layouts.header')
@include('components.navbar')

@include('components.main-header')
<div class="  pt-10 grid sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-4 gap-10 konten">
    @for ($i = 0; $i < 10; $i++)
        @include('components.card-artikel2')
    @endfor
    {{-- batik efek bg --}}
    <img class="absolute w-[600px] opacity-60 z-[1]" src="assets/batik2.png" alt="">

</div>



 
@include('layouts.footer')
