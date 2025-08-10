{{-- <header class="absolute top-0 left-0 right-0 z-50 "> --}}
{{-- <div class="container mx-auto px-6 py-4 "> --}}
<nav x-data="{ open: false }"
    class="flex slide-bottom mx-[2%]   shadow-2xl items-center justify-between rounded-full px-10 py-3 fixed w-[96%] z-[9999]">

    <!-- Wrapper dengan blur -->
    <div class=" px-4 py-2 rounded-lg ">
        <a href="#" class="text-white text-2xl font-bold">Budaya. <span class=" text-orange-500">Sat Set</span></a>
    </div>

    <div class="hidden md:flex items-center  gap-8">
        <a href="/" class="text-gray-300 hover:text-orange-600 transition-colors">Home</a>
        <a href="/acara" class="text-gray-300 hover:text-orange-600 transition-colors">Info Acara</a>
        <a href="/artikel" class="text-gray-300 hover:text-orange-600 transition-colors">Berita</a>
        <a href="#" class="text-gray-300 hover:text-orange-600 transition-colors">-H30 Acara</a>
        <a href="/about" class="text-gray-300 hover:text-orange-600 transition-colors">About</a>
    </div>

    <div class="flex items-center gap-3  sm:hidden md:block">
        <a href="#" class="rounded-full duration-200 btn-line text-zinc-50">Masuk</a>
        <a href="#" class="rounded-full duration-200 btn-bg">Login</a>
    </div>

    <div class="md:hidden">
        <button @click="open = !open" class="text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path :class="{ 'hidden': open, 'block': !open }" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                <path :class="{ 'block': open, 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</nav>
{{-- </div> --}}
</header>
