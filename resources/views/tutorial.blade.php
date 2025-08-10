@include('layouts.header')
@include('components.navbar')

<div class="konten ">
    <div class=" relative">

        <div class=" absolute w-3 rounded-full bg-orange-900 h-[100px] ">

        </div>
        {{-- progres --}}
        <div class="mt-20 left-0 flex items-center gap-2">
            <div class="w-[40px] h-[40px] rounded-full bg-orange-700"></div>
            <div>
                <h1 class=" text-2xl"> Buat Akun
                </h1>
                <p>Langkah pertama adalah mendaftarkan diri di platform Budaya Sat Set. Isi formulir pendaftaran dengan
                    data yang valid untuk memastikan proses verifikasi berjalan lancar.
                </p>
            </div>
        </div>
        {{-- progres --}}
        <div class="mt-20 left-0 flex items-center gap-2">
            <div class="w-[40px] h-[40px] rounded-full bg-orange-700"></div>
            <div>
                <h1 class=" text-2xl"> Verifikasi Akun
                </h1>
                <p>Setelah mendaftar, lakukan verifikasi melalui email atau nomor telepon. Proses ini memastikan bahwa
                    akun yang dibuat adalah milik Anda dan mencegah penyalahgunaan.
                </p>
            </div>
        </div>
        {{-- progres --}}
        <div class="mt-20 left-0 flex items-center gap-2">
            <div class="w-[40px] h-[40px] rounded-full bg-orange-700"></div>
            <div>
                <h1 class=" text-2xl"> Input Berita Acara Budaya
                </h1>
                <p>Setelah data acara budaya selesai diisi, publikasi informasi tersebut agar dapat dilihat oleh seluruh
                    pengunjung platform. Pastikan semua informasi sudah benar sebelum dipublikasikan.
                </p>
            </div>
        </div>
        {{-- progres --}}
        <div class="mt-20 left-0 flex items-center gap-2">
            <div class="w-[40px] h-[40px] rounded-full bg-orange-700"></div>
            <div>
                <h1 class=" text-2xl"> Klik Tombol "Publish"</h1>
                <p>Acara budaya Anda kini dapat diakses oleh masyarakat luas melalui peta dan daftar acara di website.
                    Orang lain bisa melihat detail dan ikut berpartisipasi.
                </p>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
