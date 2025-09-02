 @include('layouts.header')
 @include('components.headerv2')
 @include('components.navbar')
 @include('components.go-top')
 <!-- Loading Screen -->
 <div id="loading-screen">
     <div id="loading-text">


         <video class="  w-full md:px-[10%] lg:px-[30%]" width="200" height="30" autoplay muted playsinline>
             <source src="./assets/logo.mp4" type="video/mp4">
             Browser kamu tidak mendukung video.
         </video>

     </div>
 </div>




 {{-- animasi scroll --}}
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>
 <script>
     // loading screen
     // Simulasi waktu loading (misalnya 3 detik)
     window.addEventListener('load', () => {
         setTimeout(() => {
             const loadingScreen = document.getElementById('loading-screen');
             const mainContent = document.getElementById('main-content');

             // Tambah class hide untuk animasi keluar
             loadingScreen.classList.add('hide');

             // Tampilkan konten setelah animasi selesai
             setTimeout(() => {
                 loadingScreen.style.display = 'none';
                 document.body.classList.add('loaded');
                 mainContent.style.display = 'block';
             }, 800); // sesuai durasi animasi CSS
         }, 400); // durasi loading
         // }, 3000); // durasi loading
     });



     // counterP
     document.addEventListener("DOMContentLoaded", () => {
         const counters = document.querySelectorAll('.counter');

         counters.forEach(counter => {
             let target = parseInt(counter.getAttribute('data-target'));
             counter.textContent = "0"; // mulai dari 0
             let duration = 3000; // durasi total animasi (ms)
             let startTime = null;

             function updateCount(currentTime) {
                 if (!startTime) startTime = currentTime;
                 let progress = Math.min((currentTime - startTime) / duration, 1);
                 counter.textContent = Math.floor(progress * target);
                 if (progress < 1) {
                     requestAnimationFrame(updateCount);
                 }
             }

             requestAnimationFrame(updateCount);
         });
     });
 </script>
 @include('components.footer')
 @include('layouts.footer')
