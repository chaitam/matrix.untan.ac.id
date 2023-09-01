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
            'foto_normal' => 'H1101221069.png',
            'foto_nonformal' => 'H1101221069_non1.png,H1101221069_non2.png,H1101221069.png',
            'hobi' => 'Sport',
            'ttl' => 'Singkawang, 28 Juni 2003',
            'quotes' => 'ga ada si',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221057',
            'nama' => 'Dimas Aqil Salsabil',
            'foto_normal' => 'H1101221057.png',
            'foto_nonformal' => 'H1101221057_non1.png,H1101221057_non2.png,H1101221057.png',
            'hobi' => 'Menonton film, gaming',
            'ttl' => 'Pontianak, 26 Mei 2004',
            'quotes' => 'Selalu Bersyukur',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221011',
            'nama' => 'Muhammad Rhagil Setiawan',
            'foto_normal' => 'H1101221011.png',
            'foto_nonformal' => 'H1101221011_non1.png,H1101221011_non2.png,H1101221011.png',
            'hobi' => 'Nari',
            'ttl' => 'Ketapang, 13 September 2004',
            'quotes' => 'Be yourself',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221017',
            'nama' => 'Jovianka Ivy Davinda',
            'foto_normal' => 'H1101221017.png',
            'foto_nonformal' => 'H1101221017_non1.png,H1101221017_non2.png,H1101221017.png',
            'hobi' => 'Menari',
            'ttl' => 'Pontianak, 08 Agustus 2004',
            'quotes' => 'Tetaplah semangat menggapai mimpimu sampai sorotan ig mu isinya liburan keliling dunia🤍☝🏻',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221007',
            'nama' => 'Gresia',
            'foto_normal' => 'H1101221007.png',
            'foto_nonformal' => 'H1101221007_non1.png,H1101221007_non2.png,H1101221007.png',
            'hobi' => 'Turu',
            'ttl' => 'Betung pulai 22 Juni 2003',
            'quotes' => 'Jangan menyerah selesaikan misimu',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221035',
            'nama' => 'Arvi Grespaeni',
            'foto_normal' => 'H1101221035.png',
            'foto_nonformal' => 'H1101221035_non1.png,H1101221035_non2.png,H1101221035.png',
            'hobi' => 'Menari, nonton, rebahan, melihat bulan',
            'ttl' => 'Nanga Merakai, 20 April 2004',
            'quotes' => 'Love myself',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221043',
            'nama' => 'Sasti Anggraini',
            'foto_normal' => 'H1101221043.png',
            'foto_nonformal' => 'H1101221043_non1.png,H1101221043_non2.png,H1101221043.png',
            'hobi' => 'Mendengarkan musik',
            'ttl' => 'Pontianak, 31 Oktober 2004',
            'quotes' => 'Jangan takut gagal',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221053',
            'nama' => 'Tiara Nabila',
            'foto_normal' => 'H1101221053.png',
            'foto_nonformal' => 'H1101221053_non1.png,H1101221053_non2.png,H1101221053.png',
            'hobi' => 'Mendengarkan musik',
            'ttl' => 'Pontianak, 1 Juli 2004',
            'quotes' => 'Just Keep Swimming - Dory',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221029',
            'nama' => 'Elsadai Mareta Saragi',
            'foto_normal' => 'H1101221029.png',
            'foto_nonformal' => 'H1101221029_non1.png,H1101221029_non2.png,H1101221029.png',
            'hobi' => 'Dengar lagu, nonton, baca',
            'ttl' => 'Selimbau, 17 Maret 2003',
            'quotes' => 'Life must go on',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221015',
            'nama' => 'Celtha Missella ',
            'foto_normal' => 'H1101221015.png',
            'foto_nonformal' => 'H1101221015_non1.png,H1101221015_non2.png,H1101221015.png',
            'hobi' => 'Menyanyi, tidur',
            'ttl' => 'Sungai Raya Pontianak, 13 Juni 2004',
            'quotes' => 'Karena masa depan sungguh ada dan harapanmu tidak akan hilang ',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221031',
            'nama' => 'Nadya Amanda Putri Laniaz ',
            'foto_normal' => 'H1101221031.png',
            'foto_nonformal' => 'H1101221031_non1.png,H1101221031_non2.png,H1101221031.png',
            'hobi' => 'Menyanyi',
            'ttl' => '22 April 2024',
            'quotes' => 'let it flow because you never know your next move',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221004',
            'nama' => 'Naila Winingtyas Pradanti',
            'foto_normal' => 'H1101221004.png',
            'foto_nonformal' => 'H1101221004_non1.png,H1101221004_non2.png,H1101221004.png',
            'hobi' => 'Menonton series/film, mendengarkan musik, dan sebagainya sesuai mood.',
            'ttl' => 'Pontianak, 12 Juni 2004',
            'quotes' => 'Do the best but don’t overdo.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221027',
            'nama' => 'Salasa Nopa Munika',
            'foto_normal' => 'H1101221027.png',
            'foto_nonformal' => 'H1101221027_non1.png,H1101221027_non2.png,H1101221027.png',
            'hobi' => 'Nonton, baca komik',
            'ttl' => 'Singkawang, 18 Januari 2004',
            'quotes' => 'Its not always easy, but that’s life.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221024',
            'nama' => 'Jennifer Tandy',
            'foto_normal' => 'H1101221024.png',
            'foto_nonformal' => 'H1101221024_non1.png,H1101221024_non2.png,H1101221024.png',
            'hobi' => 'Sketching, menggambar, & mendengarkan musik',
            'ttl' => 'Pontianak, 11 Maret 2004',
            'quotes' => 'Everything will pass, try to enjoy it <3.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221020',
            'nama' => 'Pheterson Ferry Fernando',
            'foto_normal' => 'H1101221020.png',
            'foto_nonformal' => 'H1101221020_non1.png,H1101221020_non2.png,H1101221020.png',
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
            'file_foto' => 'IMG_3319.jpg',
            'nama_kegiatan' => 'SIG',
            'foto_lengkap_kegiatan' => 'IMG_3341.jpg,IMG_3319.jpg,IMG_3317.jpg,wa_1.jpg,wa_2.jpg,wa_3.jpg,wa_4.jpg',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221023',
            'nama' => 'Amanda Putry Perawaty',
            'foto_normal' => 'H1101221023.png',
            'foto_nonformal' => 'H1101221023_non1.png,H1101221023_non2.png,H1101221023.png',
            'hobi' => 'Turu',
            'ttl' => 'Pontianak, 10 Juli 2004',
            'quotes' => 'Bismillah',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221062',
            'nama' => 'Adinda Maharani',
            'foto_normal' => 'H1101221062.png',
            'foto_nonformal' => 'H1101221062_non1.png,H1101221062_non2.png,H1101221062.png',
            'hobi' => 'Mendengarkan musik/lagu, bernyanyi untuk menyenangkan hati dan menghibur diri, menonton film/drama, dll',
            'ttl' => 'Singkawang, 22 Desember 2003',
            'quotes' => 'Menjadi rendah hati bukan untuk direndahkan dan merendahkan',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221041',
            'nama' => 'Meri Cynthia Dewi',
            'foto_normal' => 'H1101221041.png',
            'foto_nonformal' => 'H1101221041_non1.png,H1101221041_non2.png,H1101221041.png',
            'hobi' => 'Menyanyi',
            'ttl' => 'Sungai Pinyuh, 27 Februari 2003',
            'quotes' => '“For those who don`t believe in themselves, hardwork is worthless." -Maito Gai',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221045',
            'nama' => 'Bella Rossa Yuniarti',
            'foto_normal' => 'H1101221045.png',
            'foto_nonformal' => 'H1101221045_non1.png,H1101221045_non2.png,H1101221045.png',
            'hobi' => 'Membaca',
            'ttl' => 'Pusaka, 19 Juni 2004',
            'quotes' => 'Be Happy',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221012',
            'nama' => 'Teresia Amelia ',
            'foto_normal' => 'H1101221012.png',
            'foto_nonformal' => 'H1101221012_non1.png,H1101221012_non2.png,H1101221012.png',
            'hobi' => 'Makeup',
            'ttl' => 'Sandai, 12 Maret 2004',
            'quotes' => 'Gagal itu gapapa, yang ga boleh itu nyerah',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221002',
            'nama' => 'Insan Hadid ',
            'foto_normal' => 'H1101221002.png',
            'foto_nonformal' => 'H1101221002_non1.png,H1101221002_non2.png,H1101221002.png',
            'hobi' => 'Menggambar',
            'ttl' => 'Sanggau, 15 Agustus 2004',
            'quotes' => 'Lebih baik mencoba Dan gagal daripada tidak mulai sama sekali.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221040',
            'nama' => 'Nashya Fildza Ramadhaniah',
            'foto_normal' => 'H1101221040.png',
            'foto_nonformal' => 'H1101221040_non1.png,H1101221040_non2.png,H1101221040.png',
            'hobi' => 'Menabung',
            'ttl' => 'Pontianak, 10 November 2004',
            'quotes' => 'Hemat sebelum kaya',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221016',
            'nama' => 'Leo Prangs Tobing',
            'foto_normal' => 'H1101221016.png',
            'foto_nonformal' => 'H1101221016_non1.png,H1101221016_non2.png,H1101221016.png',
            'hobi' => 'Read, Coding, Martial Art',
            'ttl' => 'Batu Pahat, 2 Mei 200',
            'quotes' => 'Saya berfikir maka saya beriman',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221052',
            'nama' => 'Mandri',
            'foto_normal' => 'H1101221052.png',
            'foto_nonformal' => 'H1101221052_non1.png,H1101221052_non2.png,H1101221052.png',
            'hobi' => 'Main Game',
            'ttl' => 'Sintang 24 Oktober 2004',
            'quotes' => 'Biarlah yg hitam tetap hitam',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221056',
            'nama' => 'Rivo Ayulga Satria',
            'foto_normal' => 'H1101221056.png',
            'foto_nonformal' => 'H1101221056_non1.png,H1101221056_non2.png,H1101221056.png',
            'hobi' => 'Beribadah dan nyuruh nyuruh orang',
            'ttl' => 'Pontianak, 8 Maret 2004',
            'quotes' => '“Janganlah kalian mendekati zina karena zina itu tindakan keji dan jalan yang amat buruk”(QS al-Isra`: 32)',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221036',
            'nama' => 'Carsen Wilmer',
            'foto_normal' => 'H1101221036.png',
            'foto_nonformal' => 'H1101221036_non1.png,H1101221036_non2.png,H1101221036.png',
            'hobi' => 'Badminton, Kulineran, Traveling ',
            'ttl' => 'Pontianak, 09 Juli 2004',
            'quotes' => 'Jadilah diri sendiri dan fokus pada tujuan',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221042',
            'nama' => 'Muhammad Radikal',
            'foto_normal' => 'H1101221042.png',
            'foto_nonformal' => 'H1101221042_non1.png,H1101221042_non2.png,H1101221042.png',
            'hobi' => 'Editing Video',
            'ttl' => 'Singkawang, 23 Agustus 2003',
            'quotes' => 'Tetap Sehat',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221009',
            'nama' => 'Erin Prastiwi',
            'foto_normal' => 'H1101221009.png',
            'foto_nonformal' => 'H1101221009_non1.png,H1101221009_non2.png,H1101221009.png',
            'hobi' => 'Membaca',
            'ttl' => 'Pangkal baru, 19 Agustus 2004',
            'quotes' => 'Ubah diri sendiri sebelum orang lain.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221001',
            'nama' => 'Hanif Al Aslam',
            'foto_normal' => 'H1101221001.png',
            'foto_nonformal' => 'H1101221001_non1.png,H1101221001_non2.png,H1101221001.png',
            'hobi' => 'Merenung',
            'ttl' => 'Sanggau Ledo, 4 Juni 2004',
            'quotes' => 'Tetap Jalani Hidup',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221058',
            'nama' => 'Ranti Zia Ramadania',
            'foto_normal' => 'H1101221058.png',
            'foto_nonformal' => 'H1101221058_non1.png,H1101221058_non2.png,H1101221058.png',
            'hobi' => 'Mendengar musik',
            'ttl' => 'Karangan, 14 Juli 2004',
            'quotes' => 'Upgrade dirimu ke versi terbaik!!! ',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221059',
            'nama' => 'Andreanus Eko Putra',
            'foto_normal' => 'H1101221059.png',
            'foto_nonformal' => 'H1101221059_non1.png,H1101221059_non2.png,H1101221059.png',
            'hobi' => 'Game dan Musik',
            'ttl' => 'Melobo, 23 Oktober 2003',
            'quotes' => 'Jalankan apa yang perlu di jalankan',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221038',
            'nama' => 'Iknasius Andre Pabayo',
            'foto_normal' => 'H1101221038.png',
            'foto_nonformal' => 'H1101221038_non1.png,H1101221038_non2.png,H1101221038.png',
            'hobi' => 'Main game, Baca komik, Nyanyi, Belajar hal baru tentang komputer & Handphone (hardware & software)',
            'ttl' => 'Pontianak, 23 Oktober 2003',
            'quotes' => 'Biarlah hidup membawa diriku kemana... Let The Wind Lead!',
        ]);
        
        Mahasiswa::create([
            'nim' => 'H1101221067',
            'nama' => 'Fachri Julianda',
            'foto_normal' => 'H1101221067.png',
            'foto_nonformal' => 'H1101221067_non1.png,H1101221067_non2.png,H1101221067.png',
            'hobi' => 'Olahraga',
            'ttl' => 'Sintang,11 juli 2003',
            'quotes' => 'Menjadi orang kaya',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221050',
            'nama' => 'Al-Hafiid Ar-Rasyid',
            'foto_normal' => 'H1101221050.png',
            'foto_nonformal' => 'H1101221050_non1.png,H1101221050_non2.png,H1101221050.png',
            'hobi' => 'Olahraga',
            'ttl' => 'Pontianak 17 April 2004',
            'quotes' => 'Jadi orang sukses',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221003',
            'nama' => 'Restu Moita Putri',
            'foto_normal' => 'H1101221003.png',
            'foto_nonformal' => 'H1101221003_non1.png,H1101221003_non2.png,H1101221003.png',
            'hobi' => 'Membaca buku & mendengarkan musik',
            'ttl' => 'Batu Nanta, 02 April 2004',
            'quotes' => 'You only live once, do whatever you want.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221005',
            'nama' => 'Nazarudin',
            'foto_normal' => 'H1101221005.png',
            'foto_nonformal' => 'H1101221005_non1.png,H1101221005_non2.png,H1101221005.png',
            'hobi' => 'Nonton film',
            'ttl' => 'Semperiuk B, 9 Mei 2004',
            'quotes' =>'"Sesungguhnya bersama kesulitan ada kemudahan" Q.S. Al-Insyirah: 6',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221032',
            'nama' => 'Aisha Aylavia Sandra',
            'foto_normal' => 'H1101221032.png',
            'foto_nonformal' => 'H1101221032_non1.png,H1101221032_non2.png,H1101221032.png',
            'hobi' => 'Dance',
            'ttl' => 'Pontianak, 11 September 2004',
            'quotes' => '7S + 1D' 
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221061',
            'nama' => 'Saello Puza Lesmana Daneza',
            'foto_normal' => 'H1101221061.png',
            'foto_nonformal' => 'H1101221061_non1.png,H1101221061_non2.png,H1101221061.png',
            'hobi' => 'Nyari anak bulan',
            'ttl' => 'Pontianak, 14 Juli 2004',
            'quotes' => 'Uang diatas segalanya ',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221028',
            'nama' => 'Dhani Raynaldi ',
            'foto_normal' => 'H1101221028.png',
            'foto_nonformal' => 'H1101221028_non1.png,H1101221028_non2.png,H1101221028.png',
            'hobi' => 'Game, nonton ',
            'ttl' => 'Pontianak, 26 Juni 2002',
            'quotes' => 'Hiduplah seakan kamu mati besok,dan belajarlah seakan kamu hidup selamanya',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221046',
            'nama' => 'Khalid Ibnu Natsir ',
            'foto_normal' => 'H1101221046.png',
            'foto_nonformal' => 'H1101221046_non1.png,H1101221046_non2.png,H1101221046.png',
            'hobi' => 'Toram Online, Music, AI Tools, Modding (Game)',
            'ttl' => 'Pontianak, 14 Juli 2003',
            'quotes' => 'Alea iacta est.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221025',
            'nama' => 'Nugroho Eko Sulistyo ',
            'foto_normal' => 'H1101221025.png',
            'foto_nonformal' => 'H1101221025_non1.png,H1101221025_non2.png,H1101221025.png',
            'hobi' => 'Main game',
            'ttl' => 'Pontianak, 31 Maret 2004',
            'quotes' => 'SEMANGAT JE HADAPI SISFO',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221054',
            'nama' => 'Atala Keanue Djibran  ',
            'foto_normal' => 'H1101221054.png',
            'foto_nonformal' => 'H1101221054_non1.png,H1101221054_non2.png,H1101221054.png',
            'hobi' => 'Mancing & Main Game',
            'ttl' => 'Demak, 22 Juni 2004',
            'quotes' => 'Gak punya motto hehe',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221048',
            'nama' => 'Fika Aprillia Shafa Nabilah',
            'foto_normal' => 'H1101221048.png',
            'foto_nonformal' => 'H1101221048_non1.png,H1101221048_non2.png,H1101221048.png',
            'hobi' => 'mendengar musik',
            'ttl' => 'Sei. Pinyuh, 29 April 2004',
            'quotes' => 'Fokuslah pada tujuan, bukan hambatan',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221013',
            'nama' => 'Asteria Melisa',
            'foto_normal' => 'H1101221013.png',
            'foto_nonformal' => 'H1101221013_non1.png,H1101221013_non2.png,H1101221013.png',
            'hobi' => 'Menonton F1',
            'ttl' => 'Temura, 24 November 2004',
            'quotes' => 'Be a good person, but never waste your time trying to prove it. and just be a good person.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221037',
            'nama' => 'Satria Rangga Maulana',
            'foto_normal' => 'H1101221037.png',
            'foto_nonformal' => 'H1101221037_non1.png,H1101221037_non2.png,H1101221037.png',
            'hobi' => 'Main gitar',
            'ttl' => 'Pontianak, 01 Mei 2004',
            'quotes' => 'Solipsism',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221019',
            'nama' => 'Dimas Supandi',
            'foto_normal' => 'H1101221019.png',
            'foto_nonformal' => 'H1101221019_non1.png,H1101221019_non2.png,H1101221019.png',
            'hobi' => 'Goreng Pisang',
            'ttl' => 'Pontianak, 19 Desember 2003',
            'quotes' => 'Bangun Pagi',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221034',
            'nama' => 'Marini',
            'foto_normal' => 'H1101221034.png',
            'foto_nonformal' => 'H1101221034_non1.png,H1101221034_non2.png,H1101221034.png',
            'hobi' => 'Nonton film, tidur',
            'ttl' => 'Pontianak, 26 Maret 2004',
            'quotes' => 'Bertindak dan berpegang pada prinsip demi menemukan kunci dari sebuah kesuksesan.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221030',
            'nama' => 'Puan Nabila Astari',
            'foto_normal' => 'H1101221030.png',
            'foto_nonformal' => 'H1101221030_non1.png,H1101221030_non2.png,H1101221030.png',
            'hobi' => 'Traveling',
            'ttl' => 'Ketapang 30 Agustus 2003',
            'quotes' => 'Jalanin ja dulu',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221064',
            'nama' => 'Muhammad Akbar Accamaddin',
            'foto_normal' => 'H1101221064.png',
            'foto_nonformal' => 'H1101221064_non1.png,H1101221064_non2.png,H1101221064.png',
            'hobi' => 'Futsal',
            'ttl' => 'Mempawah, 24 Maret 2002',
            'quotes' => 'Be true to yourself don’t miss your chance. And you won’t end up like a fool who ripped his pants.',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221033',
            'nama' => 'Dani Ali',
            'foto_normal' => 'H1101221033.png',
            'foto_nonformal' => 'H1101221033_non1.png,H1101221033_non2.png,H1101221033.png',
            'hobi' => 'Main game, berenang',
            'ttl' => 'Pekanbaru, 2 Januari 2005',
            'quotes' => 'Maju terus',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221006',
            'nama' => 'Tarsisia Uci Suryani',
            'foto_normal' => 'H1101221006.png',
            'foto_nonformal' => 'H1101221006_non1.png,H1101221006_non2.png,H1101221006.png',
            'hobi' => 'Nyanyi',
            'ttl' => 'Sanggau, 15 Agustus 2003',
            'quotes' => 'Semangat kalo mood',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221039',
            'nama' => 'Lie Po',
            'foto_normal' => 'H1101221039.png',
            'foto_nonformal' => 'H1101221039_non1.png,H1101221039_non2.png,H1101221039.png',
            'hobi' => 'Game, Olahraga',
            'ttl' => 'Pontianak, 6 Oktober 2004',
            'quotes' => 'Every Ending Has A New Beginning ',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221055',
            'nama' => 'Rendy Juniandre Albuchori ',
            'foto_normal' => 'H1101221055.png',
            'foto_nonformal' => 'H1101221055_non1.png,H1101221055_non2.png,H1101221055.png',
            'hobi' => 'Futsal, Balap motor',
            'ttl' => 'Pontianak, 21 Juni 2004',
            'quotes' => 'Apapun resikonya saya dirancang untuk tidak takut pada manusia',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221026',
            'nama' => 'Charistheo Lasso’ Jireh',
            'foto_normal' => 'H1101221026.png',
            'foto_nonformal' => 'H1101221026_non1.png,H1101221026_non2.png,H1101221026.png',
            'hobi' => 'Graphic Design',
            'ttl' => '26 September 2004',
            'quotes' => 'Kehabisan kata-kata dibuat wanita',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221047',
            'nama' => 'Muhammad Ridho Nurfadhillah',
            'foto_normal' => 'H1101221047.png',
            'foto_nonformal' => 'H1101221047_non1.png,H1101221047_non2.png,H1101221047.png',
            'hobi' => 'Main musik',
            'ttl' => 'Ketapang, 14 Maret 2004',
            'quotes' => 'do more. speak less!',
        ]);


        Mahasiswa::create([
            'nim' => 'H1101221066',
            'nama' => 'Muhammad Naufal Akbar',
            'foto_normal' => 'H1101221066.png',
            'foto_nonformal' => 'H1101221066_non1.png,H1101221066_non2.png,H1101221066.png',
            'hobi' => 'Bermain basket',
            'ttl' => 'Sintang, 02 Juli 2004',
            'quotes' => 'Berdiri di kaki sendiri',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221049',
            'nama' => 'Muhammad Fatih Alfadhil',
            'foto_normal' => 'H1101221049.png',
            'foto_nonformal' => 'H1101221049_non1.png,H1101221049_non2.png,H1101221049.png',
            'hobi' => 'Reading a Book',
            'ttl' => 'Sintang, 30 September 2004',
            'quotes' => 'Waktu tak dapat diputar, dijilat, apalagi dicelupin',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221018',
            'nama' => 'Rini Dwinova Sihombing',
            'foto_normal' => 'H1101221018.png',
            'foto_nonformal' => 'H1101221018_non1.png,H1101221018_non2.png,H1101221018.png',
            'hobi' => 'Dance',
            'ttl' => 'Pontianak, 21 November 2004',
            'quotes' => 'don’t be afraid to fail, be afraid not to try',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221010',
            'nama' => 'Atira Salsabilla',
            'foto_normal' => 'H1101221010.png',
            'foto_nonformal' => 'H1101221010_non1.png,H1101221010_non2.png,H1101221010.png',
            'hobi' => 'Traveling & Membaca',
            'ttl' => 'Semitau, 09 Juli 2004',
            'quotes' => 'Be your self',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221008',
            'nama' => 'Luthfiyyah Zahwa Maitari',
            'foto_normal' => 'H1101221008.png',
            'foto_nonformal' => 'H1101221008_non1.png,H1101221008_non2.png,H1101221008.png',
            'hobi' => 'Menonton Film, Membaca Novel, Menggambar, Tidur, Berenang, dan Jalan-jalan.',
            'ttl' => 'Pontianak, 29 Mei 2004',
            'quotes' => 'pray for the best, be prepared for the worst!',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221044',
            'nama' => 'Andhika Putro Raharjo',
            'foto_normal' => 'H1101221044.png',
            'foto_nonformal' => 'H1101221044_non1.png,H1101221044_non2.png,H1101221044.png',
            'hobi' => 'Olahraga, Game Online',
            'ttl' => 'Jakarta, 04 Oktober 2004',
            'quotes' => 'Life is all about perspectives. Be wise and consider all perspectives before you act',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221022',
            'nama' => 'Adinda Latifah',
            'foto_normal' => 'H1101221022.png',
            'foto_nonformal' => 'H1101221022_non1.png,H1101221022_non2.png,H1101221022.png',
            'hobi' => 'Menonton film, tidur, dan jalan-jalan',
            'ttl' => 'Pontianak, 12 November 2004',
            'quotes' => 'What’s meant to be will always find a way',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221051',
            'nama' => 'Muhammad Tiflan Fakri Akbar',
            'foto_normal' => 'H1101221051.png',
            'foto_nonformal' => 'H1101221051_non1.png,H1101221051_non2.png,H1101221051.png',
            'hobi' => 'Main Game',
            'ttl' => 'Pontianak, 29 Januari 2004',
            'quotes' => 'Hidup bermanfaat untuk orang lain',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221063',
            'nama' => 'Febryanto',
            'foto_normal' => 'H1101221063.png',
            'foto_nonformal' => 'H1101221063_non1.png,H1101221063_non2.png,H1101221063.png',
            'hobi' => 'Olah raga dan baca buku',
            'ttl' => 'Sanggau, 12 September 2002',
            'quotes' => 'Veni, Vedi, Vici',
        ]);

        Mahasiswa::create([
            'nim' => 'H1101221060',
            'nama' => 'Erdika Nabila Rizkania',
            'foto_normal' => 'H1101221060.png',
            'foto_nonformal' => 'H1101221060_non1.png,H1101221060_non2.png,H1101221060.png',
            'hobi' => 'Mendengarkan lagu',
            'ttl' => 'Pontianak, 18 Maret 2004',
            'quotes' => 'YOLO',
        ]);

        
        
    }
}
