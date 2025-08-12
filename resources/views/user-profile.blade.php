 @include('layouts.header')

 @include('components.go-top')
 @include('components.navbar')
 <div class="flex items-center text-center justify-center konten pt-[10%]">
     <div>
         <div>
             <div class="flex items-center justify-center w-full">
                 <div class="bg-zinc-400 w-[111px] h-[111px]  rounded-full"></div>
             </div>
             <h2 class=" text-5xl mt-5 font-bold">Haiban Aufar</h2>
             <p class=" text-orange-600 text-2xl my-3">Dinas Kebudayaan Purbalingga</p>
             <div class=" flex items-center justify-center gap-10 my-4 ">
                 <div class=" text-center ">
                     <h5 class="text-4xl font-bold">14</h5>
                     <p>Artikel Berita</p>
                 </div>
                 <div class="w-[3px] h-[40px] rounded-full bg-zinc-400"></div>
                 <div class=" text-center ">
                     <h5 class="text-4xl font-bold text-green-500">24</h5>
                     <p>Acara Aktif</p>
                 </div>
                 <div class="w-[3px] h-[40px] rounded-full bg-zinc-400"></div>
                 <div class=" text-center ">
                     <h5 class="text-4xl font-bold">4</h5>
                     <p>total acara</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 {{-- konten --}}
 <div class=" grid grid-cols-2 gap-10 text-center mt-[2%] px-[20%] w-full">
     <h3>Artikel Berita</h3>
     <h3>Acara</h3>
 </div>

 @include('layouts.footer')
