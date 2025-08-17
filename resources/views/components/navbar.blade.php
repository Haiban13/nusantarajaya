<nav x-data="{ open: false }"
    class="grid grid-cols-3 slide-bottom mx-[1%] shadow-xl items-center justify-center rounded-full px-10 py-2 fixed w-[96%] z-[9999] border-[2px] border-zinc-50">

    <!-- Wrapper dengan blur -->
    <div class=" px-4 py-2 rounded-lg  ">
        <a href="#" class="text-white text-2xl font-bold">Budaya. <span class=" text-orange-500">Sat Set</span></a>
    </div>
    <div class="hidden md:flex items-center gap-8 text-zinc-800 text-center justify-self-center">
        <a href="/" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Beranda</a>
        <a href="/acara" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Info Acara</a>
        <a href="/artikel" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Berita</a>
        <a href="/about" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">About</a>
    </div>



    <div class="lg:flex items-center gap-3  hidden justify-self-end ">
        <div class="flex items-center gap-3   ">
            <a href="/admin" class="rounded-full duration-200 btn-line text-zinc-50">Masuk</a>
            <a href="/admin" class="rounded-full duration-200 btn-bg">Login</a>
        </div>
        {{-- profile --}}
        {{-- tampilkan setelah login --}}
        <a href="{{ route('user.profile') }}">
            <div class=" bg-zinc-500 w-[50px] hidden h-[50px] rounded-full">
            </div>
        </a>
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