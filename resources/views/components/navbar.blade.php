<!-- NAVBAR -->
<nav
    class="grid grid-cols-2 lg:grid-cols-3 slide-bottom mx-[1%] shadow-xl items-center justify-center rounded-full px-5 lg:px-10 py-2 fixed w-[96%] z-[9999] border-[2px] border-zinc-50  md:mt-0">

    <!-- Logo -->
    <img src="assets/logo.png" class="h-[80px]" alt="">
    {{-- <div class="px-4 py-2 rounded-lg">
        <a href="#" class="text-white lg:text-2xl font-bold mix-blend-difference">Budaya. <span
                class="text-orange-500">Sat Set</span></a>
    </div> --}}

    <!-- Menu Desktop -->
    <div class="hidden md:flex items-center gap-8 text-zinc-800 text-center justify-self-center">
        <a href="/" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Beranda</a>
        <a href="/acara" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Info Acara</a>
        <a href="/artikel" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Berita</a>
        <a href="/about" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">About</a>
    </div>

    <!-- Login (Desktop) -->
    <div class="lg:flex items-center gap-3 hidden justify-self-end">
        <div class="flex items-center gap-3">
            <a href="/admin" class="rounded-full duration-200 btn-line text-zinc-50">Masuk</a>
            <a href="/admin" class="rounded-full duration-200 btn-bg">Login</a>
        </div>
        <a href="{{ route('user.profile') }}">
            <div class="bg-zinc-500 w-[50px] hidden h-[50px] rounded-full"></div>
        </a>
    </div>

    <!-- Burger Menu Button -->
    <div class="md:hidden justify-self-end">
        <button id="burger-btn" class="text-white mix-blend-difference focus:outline-none">
            <!-- Icon: Burger -->
            <svg id="burger-icon" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <!-- Icon: Close -->
            <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</nav>

<!-- Menu Mobile (Hidden by default) -->
<div id="mobile-menu" class="hidden md:hidden bg-zinc-900/80 w-dvw h-dvh fixed z-[33]">

    <div
        class="  pt-[30%] left-0 w-full bg-white text-zinc-800 text-xl flex flex-col gap-10 px-6 py-4 shadow-xl rounded-b-xl z-[9998]">

        <a href="/" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Beranda</a>
        <a href="/acara" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Info
            Acara</a>
        <a href="/artikel" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">Berita</a>
        <a href="/about" class="hover:text-orange-600 hover:scale-105 duration-300 transition-colors">About</a>
        <a href="/admin" class="rounded-full duration-200 btn-line text-zinc-800">Masuk</a>
        <a href="/admin" class="rounded-full duration-200 btn-bg">Login</a>

    </div>
</div>
