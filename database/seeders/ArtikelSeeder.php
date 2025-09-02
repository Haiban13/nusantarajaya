<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 20 example artikel titles
        $judulArtikel = [
            'Mengenal Sejarah Batik Indonesia',
            'Dampak Teknologi pada Budaya Lokal',
            'Seni Tari Tradisional di Era Modern',
            'Keindahan Arsitektur Candi Borobudur',
            'Eksplorasi Kuliner Nusantara',
            'Peran Generasi Muda dalam Melestarikan Budaya',
            'Tradisi Unik di Berbagai Daerah Indonesia',
            'Bahasa Daerah dan Identitas Nasional',
            'Media Sosial dan Pengaruhnya terhadap Budaya',
            'Upacara Adat yang Masih Bertahan di Indonesia',
            'Perkembangan Musik Keroncong di Indonesia',
            'Mengapa Sastra Tradisional Perlu Dilestarikan',
            'Permainan Tradisional dan Nilai Sosialnya',
            'Sejarah Perkembangan Pakaian Adat',
            'Pameran Budaya di Tengah Perkembangan Zaman',
            'Arsitektur Tradisional vs Modern',
            'Nilai-Nilai Kearifan Lokal di Masyarakat',
            'Olahraga Tradisional yang Mulai Ditinggalkan',
            'Pentingnya Memahami Norma Sosial Lokal',
            'Warisan Budaya Dunia di Indonesia',
        ];

        for ($i = 0; $i < 20; $i++) {
            // Insert related image record first
            $imageId = DB::table('images')->insertGetId([
                'img1'       => null,
                'img2'       => null,
                'img3'       => null,
                'video'      => null,
                'jenis'      => 'artikel',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert artikel record
            DB::table('artikel')->insert([
                'judul'         => $judulArtikel[$i],
                'img'           => $imageId,
                'des_singkat'   => Str::limit(
                    "Artikel berjudul '{$judulArtikel[$i]}' membahas berbagai informasi menarik terkait kebudayaan dan perkembangan sosial di Indonesia.",
                    200
                ),
                'detail_acara'  => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu mollis arcu. Vivamus interdum leo eget interdum feugiat. Nam efficitur magna in justo condimentum consectetur. Vivamus feugiat nunc a urna volutpat, sit amet suscipit ligula dapibus. Sed malesuada dui ac orci feugiat, eu tempus ante porttitor. Curabitur at lacus massa. Vestibulum blandit turpis ut tortor tincidunt, in egestas nunc luctus. Praesent molestie ipsum in ornare vehicula. Suspendisse posuere metus eget semper tempus. Vestibulum turpis velit, fermentum non est in, pharetra tempor nisl. Phasellus elementum leo consectetur venenatis ornare. Vestibulum rhoncus ornare sem, eu lobortis nisl tincidunt et. Proin rutrum in nulla quis aliquet. Suspendisse interdum malesuada nibh, sed pretium mauris pellentesque aliquam. Donec aliquet augue eu dui cursus, a iaculis diam euismod. Aenean id augue non est consequat congue.

Duis sit amet ultrices felis. Cras efficitur aliquam turpis eu finibus. Maecenas mattis, tortor non aliquet dignissim, erat turpis gravida risus, et gravida lectus justo maximus lorem. Donec efficitur ullamcorper lectus, eget porttitor elit faucibus nec. Fusce suscipit pellentesque hendrerit. Proin convallis facilisis hendrerit. Aenean sed elementum nisi. Sed congue finibus erat ac efficitur. Ut nec risus ut tellus laoreet rhoncus non ac metus. Pellentesque aliquam libero sed dignissim feugiat.

In non sem justo. Nullam finibus lectus non cursus sagittis. Sed dignissim metus non sapien vehicula ultricies. Suspendisse malesuada luctus ipsum, et hendrerit nisl fringilla nec. Maecenas elit nulla, cursus eget convallis quis, porttitor eu ante. Maecenas ultricies, turpis vel ornare porttitor, purus tellus luctus tortor, et accumsan neque sem et ipsum. Nulla finibus, dolor at interdum euismod, erat arcu pharetra elit, non aliquam odio est id ante. Aliquam congue magna ipsum, quis eleifend eros imperdiet et. Aenean commodo scelerisque tincidunt. Maecenas ac consectetur nisi. Nunc viverra dictum lacinia. Nullam feugiat magna vel nisi tincidunt tempor.

Ut interdum nibh non lectus efficitur iaculis. Nulla tempus efficitur turpis. Praesent pretium lorem purus, eget ornare risus blandit sed. Integer vel lorem a nulla gravida ullamcorper. Etiam euismod, nisl tempor blandit finibus, lacus elit euismod lectus, sed malesuada justo est quis felis. Ut ullamcorper euismod nunc a interdum. Cras id interdum sapien, sed tempor lectus. Cras sollicitudin lacus tellus, id molestie mauris commodo at. Suspendisse potenti. Nulla quis tempus mauris, a ultrices magna.

Aenean mollis enim nec dictum molestie. Suspendisse potenti. In cursus, nunc sit amet auctor molestie, ligula turpis fermentum mauris, sed luctus nisl nunc in dui. Etiam facilisis sem velit. In et metus lacinia libero pretium congue pretium ornare arcu. Nam ante lectus, pretium sed tortor eget, iaculis sodales sem. Aenean sit amet nunc in nibh ullamcorper egestas et at quam. Curabitur bibendum massa eget odio pulvinar cursus non id tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. Cras viverra lacus ut tristique fermentum. Nulla interdum tortor in egestas tincidunt. Vivamus malesuada finibus turpis, id tincidunt tortor fringilla ut. Suspendisse eu fermentum ligula, nec tincidunt lorem. In ut dui nec purus porttitor ullamcorper. Maecenas ut pulvinar quam.

Suspendisse eu mattis sem. Phasellus a mauris ac justo laoreet imperdiet vel nec urna. Aliquam erat urna, iaculis ut elementum ac, faucibus ac massa. Mauris pharetra ex orci, ac porta lacus sodales non. Integer commodo libero eget odio fringilla cursus. Sed massa risus, facilisis eu felis sed, bibendum elementum purus. Morbi rhoncus neque sit amet nulla finibus dignissim.

Phasellus molestie, nulla vel fermentum fermentum, elit mauris tempus augue, eu hendrerit orci velit in dui. Curabitur eleifend augue vitae nibh sollicitudin, sit amet mollis turpis scelerisque. Suspendisse potenti. Sed elementum dui vitae sem pharetra, luctus pretium eros malesuada. Fusce sit amet elit venenatis, eleifend arcu in, finibus dui. Praesent malesuada diam mauris, a posuere ligula aliquet eu. Aenean vehicula commodo tortor, nec fringilla libero imperdiet et. Phasellus sollicitudin vel mauris congue suscipit.",
                'created_at'    => now(),
                'updated_at'    => now(),
                'owner'         => rand(517, 1030),
            ]);
        }
    }
}
