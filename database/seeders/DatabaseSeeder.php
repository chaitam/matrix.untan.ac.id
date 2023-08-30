<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Kegiatan;
use App\Models\Lagu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Mahasiswa::create([
            'nim' => 'H1101221069',
            'nama' => 'Syaifullah Yusuf',
            'foto_normal' => 'H1101221069_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Sport',
            'ttl' => 'Singkawang, 28 Juni 2003',
            'quotes' => 'ga ada si',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221057',
            'nama' => 'Dimas Aqil Salsabil',
            'foto_normal' => 'H1101221057_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Menonton film, gaming',
            'ttl' => 'Pontianak, 26 Mei 2004',
            'quotes' => 'Selalu Bersyukur',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221011',
            'nama' => 'Muhammad Rhagil Setiawan',
            'foto_normal' => 'H1101221011_formal.png',
            'foto_nonformal' => '[]',
            'hobi' => 'Nari',
            'ttl' => 'Ketapang, 13 September 2004',
            'quotes' => 'Be yourself',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221017',
            'nama' => 'Jovianka Ivy Davinda',
            'foto_normal' => 'H1101221017_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Menari',
            'ttl' => 'Pontianak, 08 Agustus 2004',
            'quotes' => 'Tetaplah semangat menggapai mimpimu sampai sorotan ig mu isinya liburan keliling dunia🤍☝🏻',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221007',
            'nama' => 'Gresia',
            'foto_normal' => 'H1101221007_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Turu',
            'ttl' => 'Betung pulai 22 Juni 2003',
            'quotes' => 'Jangan menyerah selesaikan misimu',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221035',
            'nama' => 'Arvi Grespaeni',
            'foto_normal' => 'H1101221035_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Menari, nonton, rebahan, melihat bulan',
            'ttl' => 'Nanga Merakai, 20 April 2004',
            'quotes' => 'Love myself',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221043',
            'nama' => 'Sasti Anggraini',
            'foto_normal' => 'H1101221043_formal.png',
            'foto_nonformal' => '[]',
            'hobi' => 'Mendengarkan musik',
            'ttl' => 'Pontianak, 31 Oktober 2004',
            'quotes' => 'Jangan takut gagal',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221053',
            'nama' => 'Tiara Nabila',
            'foto_normal' => 'H1101221053_formal.png',
            'foto_nonformal' => '[]',
            'hobi' => 'Mendengarkan musik',
            'ttl' => 'Pontianak, 1 Juli 2004',
            'quotes' => 'Just Keep Swimming - Dory',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221029',
            'nama' => 'Elsadai Mareta Saragi',
            'foto_normal' => 'H1101221029_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Dengar lagu, nonton, baca',
            'ttl' => 'Selimbau, 17 Maret 2003',
            'quotes' => 'Life must go on',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221015',
            'nama' => 'Celtha Missella ',
            'foto_normal' => 'H1101221015_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Menyanyi, tidur',
            'ttl' => 'Sungai Raya Pontianak, 13 Juni 2004',
            'quotes' => 'Karena masa depan sungguh ada dan harapanmu tidak akan hilang ',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221031',
            'nama' => 'Nadya Amanda Putri Laniaz ',
            'foto_normal' => 'H1101221031_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Menyanyi',
            'ttl' => '22 April 2024',
            'quotes' => 'let it flow because you never know your next move',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221004',
            'nama' => 'Naila Winingtyas Pradanti',
            'foto_normal' => 'H1101221004_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Menonton series/film, mendengarkan musik, dan sebagainya sesuai mood.',
            'ttl' => 'Pontianak, 12 Juni 2004',
            'quotes' => 'Do the best but don’t overdo.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221027',
            'nama' => 'Salasa Nopa Munika',
            'foto_normal' => 'H1101221027_formal.jpg',
            'foto_nonformal' => '[]',
            'hobi' => 'Nonton, baca komik',
            'ttl' => 'Singkawang, 18 Januari 2004',
            'quotes' => 'Its not always easy, but that’s life.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221024',
            'nama' => 'Jennifer Tandy',
            'foto_normal' => 'H1101221024_formal.jpg',
            'foto_nonformal' => 'H1101221024_non_1.jpg,H1101221024_non_2.jpg,H1101221024_formal.jpg',
            'hobi' => 'Nonton, baca komik',
            'ttl' => 'Singkawang, 18 Januari 2004',
            'quotes' => 'Its not always easy, but that’s life.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221020',
            'nama' => 'Pheterson Ferry Fernando',
            'foto_normal' => 'H1101221020_formal.png',
            'foto_nonformal' => '2.jpg,1.jpg,H1101221020_formal.png',
            'hobi' => 'Turu',
            'ttl' => 'Pontianak, 15 April 2004',
            'quotes' => 'Lo punya duit, Lo punya kuasa',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-1.png',
            'judul' => 'Kita Matrix',
            'lirik' => '<p>Bermula Dari keinginan semata</p>
        <p>Tuk Melangkah gapai semua cita</p>
        <p>Bersama lewati rintangan yang ada</p>
        <p>Berharap kan jadi satu keluarga</p>
        <p>Kita MATRIX angkatan Dua puluh Dua</p>
        <p>Berdiri untuk sebuah angan dan cerita</p>
        <p>Bersama kita yang katanya adalah keluarga Dalam satu cita</p>
        <p>Miliki rasa yang sama</p>
        <p>Kita MATRIX angkatan Dua puluh Dua</p>
        <p>Berdiri untuk sebuah angan dan cerita</p>
        <p>Bersama kita yang katanya adalah keluarga Dalam satu cita</p>
        <p>Miliki rasa yang sama</p>
        <p>Kita MATRIX</p>
        <p>Miliki rasa yang sama</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-2.png',
            'judul' => 'Mars MIPA',
            'lirik' => '<p>Hai aktivis MIPA maju ke hadapan</p>
                        <p>Sibakkan penghalang satukan tujuan</p>
        <p>Kibarkan panji MIPA dalam satu barisan</p>
        <p>Bersama berjuang kita gapai kemenangan</p>
        <p>Jangan bimbang ragu tetaplah melaju</p>
        <p>Hapus bayang semu di dalam hatimu </p>
        <p>Bergerak ke depan bagai gelombang samudra Lantakkan tirani hapuskan angkara murka</p>
        <p>Majulah wahai aktivis MIPA</p>
        <p>Dalam satu cita tegak keadilan</p>
        <p>Singkirkan batas satukan kata</p>
        <p>Kebangkitan bangsa telah tiba</p>
        <p>Majulah wahai aktivis MIPA</p>
        <p>Dalam satu cita tegak keadilan</p>
        <p>Singkirkan batas satukan kata</p>
        <p>Kebangkitan bangsa telah tiba</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-3.png',
            'judul' => 'Press MIPA',
            'lirik' => '<p>Kami anak MIPA</p>
        <p>MIPA kampus kami</p>
        <p>Datang ke kampus untuk menuntut ilmu</p>
        <p>Datang ke kampus untuk menuntut ilmu</p>
        <p>Bukannya ilmu pelet atau ilmu santet</p>
        <p>Anak MIPA anak MIPA</p>
        <p>Orangnya keren semua</p>
        <p>Dari dosennya sampai mahasiswanya</p>
        <p>Kami berjanji akan selalu setia</p>
        <p>MIPA! MIPA! MIPA! YES!</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-4.png',
            'judul' => 'MARS HMSI',
            'lirik' => '<p>Kami adalah para pejuang</p>
        <p>Kami penerus mahkota Putih</p>
        <p>Putih bukan berarti menyerah</p>
        <p>Tapi semangat juang tanpa darah</p>
        <p>Kami Bak pasukan Lili Putih</p>
        <p>Kami penuh pengabdian suci</p>
        <p>Penuh persahabatan yang murni</p>
        <p>silahkan coba jatuhkan kami</p>
        <p>Kami berjanji tuk selalu setia</p>
        <p>Mengharumkan nama HMSI</p>
        <p>Kami bersumpah tuk terus mengabdi</p>
        <p>Tuk memajukan Sistem Informasi</p>
        <p>Kami berjanji tuk selalu setia</p>
        <p>Mengharumkan nama HMSI</p>
        <p>Kami bersumpah tuk terus mengabdi</p>
        <p>Tuk memajukan Sistem Informasi</p>`',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-5.png',
            'judul' => 'MARS PARTISI',
            'lirik' => '<p>Kami calon penerus HMSI</p>
        <p>Penuh semangat, kompak, pantang putus asa</p>
        <p>Bak besi yang ditempa</p>
        <p>Kokoh Dan bersahaja</p>
        <p>Tuk kader HMSI sigap Dan setia</p>
        <p>Partisi namanya tempat kami dibina</p>
        <p>FMIPA itulah kampus kami tercinta</p>
        <p>Tantangan Dan rintangan itu soal biasa</p>
        <p>Bagi kami sebagai kader luar biasa</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-6.png',
            'judul' => 'Totalitas Perjuangan',
            'lirik' => '<p>Kepada para Mahasiswa</p>
        <p>Yang merindukan kejayaan</p>
        <p>Kepada Rakyat yang kebingungan</p>
        <p>Di persimpangan jalan</p>
        <p>Kepada pewaris peradaban Yang telah menggoreskan</p>
        <p>Sebuah catatan kebanggaan</p>
        <p>Di lembar sejarah manusia</p>
        <p>Wahai kalian yang rindu kemenangan </p>
        <p>Wahai kalian yang turun ke jalan </p>
        <p>Demi mempersembahkan jiwa dan raga </p>
        <p>Disinilah hikmat itu</p>
        <p>Disinilah perjuangan</p>
        <p>Disinilah petunjuk itu</p>
        <p>Disinilah kemenangan</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-7.png',
            'judul' => 'Darah Juang',
            'lirik' => '<p>Disini negeri kami</p>
        <p>Tempat padi terhampar Samudranya kaya raya</p>
        <p>Tanah kami subur tuan</p>
        <p>Di negeri permai ini</p>
        <p>Berjuta rakyat besimbah luka</p>
        <p>Anak buruh tak sekolah</p>
        <p>Pemuda desa tak kerja</p>
        <p>Mereka dirampas haknya</p>
        <p>Tergusur dan lapar</p>
        <p>Bunda, relakan darah juang kami</p>
        <p>Tuk membebaskan rakyat</p>
        <p>Mereka dirampas haknya</p>
        <p>Tergusur dan lapar</p>
        <p>Bunda, relakan darah juang kami</p>,
        <p>Padamu kami berbakti</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Lagu::create([
            'file_audio' => '-',
            'file_foto_lagu'=> 'lagu-8.png',
            'judul' => 'Buruh Tani',
            'lirik' => '<p>Buruh tani mahasiswa rakyat miskin kota</p>
        <p>Bersatu padu rebut demokrasi</p>
        <p>Gegap gempita dalam satu suara</p>
        <p>Demi tugas suci yang mulia</p>
        <p>Hari hari esok adalah milik kita</p>
        <p>Terciptanya masyarakat sejahtera</p>
        <p>Terbentuknya tatanan masyarakat</p>
        <p>Indonesia baru tanpa orba</p>
        <p>Marilah kawan mari kita kabarkan</p>
        <p>Ditangan kita tergenggam arah bangsa</p>
        <p>Marilah kawan mari kita nyanyikan</p>
        <p>Sebuah lagu tentang pembebasan</p>',
            'pencipta' => '-',
            'tahun' => '-',
        ]);

        Kegiatan::create([
            'file_foto' => 'img/1.jpg',
            'nama_kegiatan' => 'Sisfo Day',
            'foto_lengkap_kegiatan' => '1.jpg',
        ]);
    }
}
