@include('layouts.header')
@include('components.navbar')


<div>
    @include('components.main-header')

    <div class="px-[3%] lg:konten py-[3%] konten">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @for ($i = 0; $i < 5; $i++)
                @include('components.card-acara')
            @endfor
        </div>
    </div>
</div>
@include('layouts.footer')
