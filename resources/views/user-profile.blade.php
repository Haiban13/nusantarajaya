 @include('layouts.header')

 @include('components.go-top')
 @include('components.navbar')

 @php
     $userName = $user->user->name ?? $user->name;
     $initial = strtoupper(substr($userName, 0, 1));
     $isInstansi = Str::contains($user->name, ['Kabupaten', 'Provinsi', 'Kota']);
     $keterangan = $isInstansi ? 'Kementrian' : 'Masyarakat Umum';
 @endphp

 <div class="lg:flex items-center gap-10">
     <div
         class="flex bg-orange-100  mb-10 md:mb-0 rounded-3xl items-center text-center justify-center konten pt-[25%] lg:pt-[10%] lg:w-[30%]">
         <div class="   rounded-2xl h-full  ">
             <div>
                 <div class="flex items-center justify-center w-full">
                     <div
                         class="w-[55px] h-[55px] rounded-full bg-black text-white flex items-center justify-center text-lg font-bold">
                         {{ $initial }}
                     </div>
                 </div>
                 <h2 class=" text-3xl mt-5 font-bold">{{ $user->name }}</h2>
                 <p class=" text-orange-600 text-sm lg:text-xl mt-2 lg:my-3">{{ $user->email }}</p>
                 <div class=" flex items-center justify-center gap-4 lg:gap-10 my-4 ">
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold">{{ $total_artikel }}</h5>
                         <p class="text-xs  lg:text-base ">Artikel Berita</p>
                     </div>
                     <div class="w-[2px] h-[25px] lg:h-[40px] rounded-full bg-orange-200"></div>
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold  ">{{ $acara_aktif }}</h5>
                         <p class="text-xs  lg:text-base ">Acara Aktif</p>
                     </div>
                     <div class="w-[2px] h-[25px] lg:h-[40px] rounded-full bg-orange-200"></div>
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold">{{ $total_acara }}</h5>
                         <p class="text-xs  lg:text-base ">total acara</p>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     {{-- konten --}}
     <div class="px-[5%] lg:pt-[10%]">
         {{-- Tombol Navigasi --}}
    <div class="grid grid-cols-2 text-center w-full mb-8">
    <button onclick="showArtikel()"
        class="font-bold text-center hover:text-orange-600 text-sm lg:text-2xl w-full py-3">Artikel</button>
    <button onclick="showAcara()"
        class="font-bold text-center hover:text-orange-600 text-sm lg:text-2xl w-full py-3">Acara</button>
</div>

         <div class="relative flex flex-col min-h-[800px]">
             <div class="w-full h-[3px] rounded-full bg-orange-200 my-3 lg:my-10"></div>

             <div class="flex-1">
                 {{-- Artikel --}}
                 <div id="konten-artikel" class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                     @forelse ($artikels as $artikel)
                         @include('components.card-artikel2')
                     @empty
                         <div class="col-span-2 lg:col-span-4 text-center text-gray-500 py-10">
                             Tidak ada berita yang tersedia.
                         </div>
                     @endforelse
                 </div>

                 {{-- Acara --}}
                 <div id="konten-acara" class="grid grid-cols-2 lg:grid-cols-4 gap-10 hover:z-[9] hidden">
                     @forelse ($acaras as $acara)
                         @include('components.card-acara')
                     @empty
                         <div class="col-span-2 lg:col-span-4 text-center text-gray-500 py-10">
                             Tidak ada acara yang tersedia.
                         </div>
                     @endforelse
                 </div>

                 {{-- Tersimpan --}}
                 <div id="konten-tersimpan"
                     class="grid grid-cols-2 lg:grid-cols-4 gap-3 hidden min-h-[300px] w-full text-center text-gray-500">
                     <div class="col-span-2 lg:col-span-4 py-10">
                         Belum ada konten tersimpan.
                     </div>
                 </div>
             </div>

             {{-- Spacer --}}
             <div class="h-10 lg:h-20"></div>
         </div>
     </div>

 </div>


 <script>
     function showAcara() {
         document.getElementById("konten-acara").classList.remove("hidden");
         document.getElementById("konten-artikel").classList.add("hidden");
         document.getElementById("konten-tersimpan").classList.add("hidden");
     }

     function showArtikel() {
         document.getElementById("konten-artikel").classList.remove("hidden");
         document.getElementById("konten-acara").classList.add("hidden");
         document.getElementById("konten-tersimpan").classList.add("hidden");
     }

     function showTersimpan() {
         document.getElementById("konten-tersimpan").classList.remove("hidden");
         document.getElementById("konten-artikel").classList.add("hidden");
         document.getElementById("konten-acara").classList.add("hidden");
     }
 </script>

 @include('layouts.footer')
