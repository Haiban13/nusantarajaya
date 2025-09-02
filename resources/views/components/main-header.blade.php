<div style=" background-image: url('/assets/bg2.png');"
    class="w-full h-[700px] lg:h-[760px] bg-zinc-950 bg-cover bg-no-repeat  relative flex items-center justify-center text-zinc-50">
    <div class=" text-center px-[5%] lg:px-[20%] drop-shadow-2xl drop-shadow-2xl animate__delay-1s">
        <div class="animate__backInDown animate__animated ">
            @php
                $currentPath = request()->path();
            @endphp


            @if ($currentPath === 'acara')
                <h1 class="text-3xl lg:text-[5rem] font-bold merriweather">Jelajahi Acara Budaya Terkini</h1>
                <p class="mt-10 lg:text-2xl text-zinc-200">
                    Temukan berbagai acara budaya yang sedang berlangsung di seluruh Indonesia.
                    Ikuti kegiatan menarik untuk mengenal tradisi lebih dekat.
                </p>
            @elseif ($currentPath === 'artikel')
                <h1 class="text-3xl lg:text-[5rem] font-bold merriweather">Artikel & Cerita Budaya</h1>
                <p class="mt-10 lg:text-2xl text-zinc-200">
                    Baca artikel inspiratif seputar budaya, tradisi, dan sejarah Nusantara.
                    Temukan wawasan baru dari berbagai sudut pandang budaya.
                </p>
            @else
                <h1 class="text-3xl lg:text-[5rem] font-bold merriweather">Informasi Budaya Nusantara</h1>
                <p class="mt-10 lg:text-2xl text-zinc-200">
                    Jelajahi kekayaan budaya Indonesia melalui berbagai informasi yang kami sajikan.
                    Dapatkan pengalaman mengenal budaya secara menyeluruh dan menyenangkan.
                </p>
            @endif
        </div>


        <!-- Search Bar -->
        <div class=" lg:px-[20%]  animate__zoomInDown animate__delay-2s	 	">
            <div
                class="w-full mt-10  bg-white/50 backdrop-blur-sm p-2 rounded-full flex items-center animate__zoomIn animate__animated animate__delay-1s">
                <input id="search" type="text" placeholder="Cari budaya, tarian, atau acara..."
                    class="w-full bg-transparent text-zinc-800 font-semibold placeholder-gray-300 border-none focus:ring-0 px-4 py-2">

                <button
                    class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors shrink-0">
                    Cari
                </button>
            </div>
        </div>
    </div>
    {{-- <div  class="text-black"></div> --}}
    {{-- <div class="relative ">  --}}
    <div class="absolute bottom-0 w-full bg-orange-50 rounded-t-3xl lg:rounded-t-[4rem]  ">
        <div class=" justify-between flex items-center  px-[5%] py-[5%]  lg:py-[2%]">
            {{-- <h3 class=" relative z-10 text-zinc-950 font-bold text-xl lg:text-3xl">""</h3> --}}
            {{-- <div class=" bg-zinc-300 rounded-full px-10 py-2 text-xs lg:text-xl   text-zinc-900 ">30 Acara Aktif </div> --}}
        </div>
    </div>
    {{-- </div> --}}
</div>

<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            let query = $(this).val();
            let currentPath = window.location.pathname; // ✅ Get current URL path
            let searchUrl = "";

            // Decide the AJAX URL based on the current route
            if (currentPath === "/artikel") {
                searchUrl = "{{ route('artikel.search') }}";
            } else if (currentPath === "/acara") {
                searchUrl = "{{ route('acara.search') }}";
            } else {
                // Default: home page search
                searchUrl = "{{ route('search') }}";
            }

            // If input is not empty, call AJAX
            if (query.length > 0) {
                $.ajax({
                    url: searchUrl,
                    method: "GET",
                    data: {
                        q: query
                    },
                    success: function(data) {
                        $("#search-results").html(data);
                    }
                });
            } else {
                $("#search-results").html("");
            }
        });
    });
</script>
