<?php

namespace Database\Seeders;

use App\Models\Informasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informasi::create([
            'judul' => 'Apa kalian tau apa itu stunting?',
            'isi' => '<p>Dalam upaya mengatasi masalah stunting yang masih menjadi perhatian serius di Indonesia, pemerintah telah meluncurkan serangkaian program dan kebijakan untuk meningkatkan gizi anak-anak dan mencegah stunting. Stunting, atau pertumbuhan terhambat pada anak akibat kekurangan gizi, merupakan masalah kesehatan masyarakat yang membutuhkan perhatian serius.</p>
            <p>Salah satu langkah yang diambil pemerintah adalah melibatkan aktif sekali masyarakat dalam edukasi gizi. Program ini mencakup penyuluhan kepada ibu hamil dan balita tentang pentingnya asupan gizi seimbang selama masa kehamilan dan pertumbuhan awal anak-anak. Pusat kesehatan dan posyandu di berbagai daerah juga aktif memberikan layanan pemantauan pertumbuhan anak dan penyuluhan gizi kepada ibu-ibu.</p>
            <p>Menanggapi hal ini, Menteri Kesehatan, Dr. Siti Indrawati, mengatakan, "Pemerintah berkomitmen untuk mengurangi angka stunting di Indonesia. Dengan melibatkan masyarakat dan meningkatkan pemahaman akan gizi yang baik, kami berharap dapat melindungi anak-anak kita dari risiko stunting yang dapat berdampak jangka panjang pada kesehatan dan perkembangan mereka."</p>
            <p>Selain itu, pemerintah juga merencanakan untuk meningkatkan distribusi suplemen gizi kepada keluarga kurang mampu sebagai bagian dari program perlindungan sosial. Program ini diharapkan dapat memberikan akses lebih baik kepada masyarakat terhadap nutrisi yang diperlukan untuk pertumbuhan optimal anak-anak.</p>
            <p>Pemerintah juga akan terus bekerja sama dengan organisasi internasional dan lembaga swadaya masyarakat untuk mendukung upaya penanggulangan stunting ini. Dengan kerjasama lintas sektor, diharapkan dapat diciptakan lingkungan yang mendukung pertumbuhan dan perkembangan anak-anak Indonesia.</p>
            <p>Stunting merupakan masalah kompleks yang memerlukan keterlibatan semua pihak. Melalui langkah-langkah konkret dan sinergi antara pemerintah, masyarakat, dan lembaga terkait, diharapkan Indonesia dapat berhasil mengatasi tantangan kesehatan ini dan memberikan masa depan yang lebih baik bagi generasi mendatang.</p>',
            'tanggal' => date('Y-m-d'),
            'gambar' => 'assets/img/image4.jpg',
            'slug' => 'apa-kalian-tau-apa-itu-stunting'
        ]);
    }
}
