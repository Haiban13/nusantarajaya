@include('layouts.header')
@include('components.navbar')

<div class="lg:flex  konten gap-10 relative z-[4] ">
    <div  >
        <img src="/assets/festival.webp" class=" object-cover bg-zinc-300 w-full h-[300px] lg:h-[500px] rounded-2xl" >
        <div class="px-10 py-2 rounded-full bg-orange-600 mt-10 bg-opacity-25 w-fit text-orange-700"> 12 Desember 2025</div>
        <h1 class="text-5xl mt-10 font-bold">Pacu Jalur: Warisan Budaya Riau yang Mendebarkan</h1>
        @include('components.user-profile')
        <div class="mt-10">Pacu Jalur adalah sebuah tradisi lomba dayung perahu panjang khas masyarakat Kabupaten
            Kuantan Singingi, Riau. Lomba ini tidak hanya sekadar perlombaan adu cepat di atas sungai, tetapi merupakan
            warisan budaya turun-temurun yang sarat nilai kebersamaan, kekompakan, dan kegigihan.
            <br>
            <br>
            
            ✨ Sejarah dan Asal Usul
            <br>

            Tradisi Pacu Jalur sudah ada sejak abad ke-17, awalnya digunakan sebagai sarana transportasi sungai oleh
            masyarakat setempat. Seiring waktu, perahu jalur digunakan dalam acara-acara adat dan perayaan penting,
            hingga kemudian dijadikan lomba yang meriah untuk memperingati hari-hari besar, terutama Hari Kemerdekaan
            Republik Indonesia.
            <br>
            <br>

            <br>
            🚣 Ciri Khas Jalur
            <br>

            Perahu yang digunakan disebut “jalur”, memiliki panjang bisa mencapai 25–40 meter dan diisi oleh 40–60 orang
            pendayung. Jalur ini dihias dengan warna-warna cerah dan ukiran khas Kuansing, menjadikannya tidak hanya
            cepat di air, tapi juga indah dipandang.
            <br>
            <br>
            

            🏆 Festival Pacu Jalur
            <br>

            Setiap tahun, Festival Pacu Jalur diadakan di Tepian Narosa, Teluk Kuantan, dan menjadi daya tarik wisatawan
            lokal maupun mancanegara. Ribuan orang menyaksikan puluhan jalur berlaga di Sungai Batang Kuantan dengan
            semangat dan teriakan dukungan yang membahana.
            <br>
            <br>
            

            <br>
            🌍 Nilai Budaya
            <br>

            Pacu Jalur bukan hanya soal kecepatan, tetapi mencerminkan:
            <br>

            <br>
            Kerja sama tim dan solidaritas
            <br>

            Semangat sportivitas
            <br>

            Kehormatan kampung asal jalur
            <br>

            Pelestarian budaya lokal
            <br>

            <br>
            📜 Pengakuan
            <br>

            Pada tahun 2014, Pacu Jalur resmi ditetapkan sebagai Warisan Budaya Takbenda Indonesia oleh Kementerian
            Pendidikan dan Kebudayaan.
            <br>
            <br>
            <br>

            📣 Kesimpulan
            <br>
            <br>

            Pacu Jalur adalah bukti hidup bagaimana tradisi lokal bisa bersinar di panggung nasional dan internasional.
            Dengan semangat yang ditanamkan sejak dahulu, tradisi ini akan terus dilestarikan oleh generasi muda Kuantan
            Singingi dan masyarakat Indonesia.
        </div>
        <br>
    </div>
    <div class="lg:px-10 py-3 lg:bg-zinc-100 rounded-2xl w-full lg:w-[70%]">
        <div class="flex justify-between ">
            <h4 class=" text-2xl font-bold">Berita Terbaru</h4>
        </div>
        @for ($i = 0; $i < 10; $i++)
            @include('components.card-artikel3')
        @endfor
    </div>
</div>

<img src="/assets/festival.webp"  class="w-full h-[250px] lg:h-[500px] bg-zinc-900 absolute top-0  brightness-50 object-cover">



<!-- Modal fullscreen viewer -->
<div class="overlay" id="overlay">
  <img src="" alt="Full" class="fullscreen-image" id="fullscreenImage">
</div>
@include('components.footer')
@include('layouts.footer')
