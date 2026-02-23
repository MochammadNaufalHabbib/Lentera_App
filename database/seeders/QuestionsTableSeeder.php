<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $likert = json_encode([
            'Sangat Tidak Setuju',
            'Tidak Setuju',
            'Netral',
            'Setuju',
            'Sangat Setuju'
        ]);

        $questions = [
            // R (Realistic)
            ['order' => 1,  'dimension' => 'R', 'text' => 'Jika kamu bisa memilih, apakah kamu akan lebih memilih memperbaiki sebuah mobil mesin klasik daripada menulis laporan administratif?', 'options' => $likert],
            ['order' => 2,  'dimension' => 'R', 'text' => 'Jika kelompok harus membuat sebuah proyek fisik (misalnya membangun sesuatu), apakah kamu akan bersedia mengambil bagian aktif dalam pemasangan bagian-bagiannya?', 'options' => $likert],
            ['order' => 3,  'dimension' => 'R', 'text' => 'Jika seorang teman meminta bantuan untuk memindahkan perabot besar rumahnya, apakah kamu akan menawarkan diri untuk membantu karena kamu suka kerja fisik?', 'options' => $likert],
            ['order' => 4,  'dimension' => 'R', 'text' => 'Jika disediakan dua pilihan ekstrakurikuler, yaitu bengkel mekanik atau klub debat, apakah kamu lebih memilih bengkel mekanik?', 'options' => $likert],
            ['order' => 5,  'dimension' => 'R', 'text' => 'Jika untuk tugas sekolah kamu bisa memilih antara merancang prototipe sederhana benda mekanis atau membuat video kreatif, apakah kamu akan memilih merancang prototipe?', 'options' => $likert],

            // I (Investigative)
            ['order' => 6,  'dimension' => 'I', 'text' => 'Jika kamu mendapat tugas kelompok untuk menyelidiki fenomena alam (misalnya perubahan cuaca), apakah kamu akan memilih menjadi orang yang melakukan riset dan analisis data?', 'options' => $likert],
            ['order' => 7,  'dimension' => 'I', 'text' => 'Jika kamu diundang ke seminar sains dengan topik penelitian mutakhir (misalnya bioteknologi), apakah kamu akan sangat tertarik untuk ikut dan belajar lebih dalam?', 'options' => $likert],
            ['order' => 8,  'dimension' => 'I', 'text' => 'Jika diberikan pilihan antara membaca artikel ilmiah untuk menyelesaikan proyek atau membuat representasi artistik dari topik, apakah kamu lebih suka membaca artikel ilmiah?', 'options' => $likert],
            ['order' => 9,  'dimension' => 'I', 'text' => 'Jika kamu harus memilih antara bekerja di laboratorium kimia atau mengajar di sekolah dasar, apakah kamu akan memilih laboratorium?', 'options' => $likert],
            ['order' => 10, 'dimension' => 'I', 'text' => 'Jika seorang teman menawarkanmu untuk membantu mengembangkan hipotesis percobaan fisika sederhana, apakah kamu akan menerima dan mengerjakannya?', 'options' => $likert],

            // A (Artistic)
            ['order' => 11, 'dimension' => 'A', 'text' => 'Jika kamu diberi kesempatan membuat pameran kecil di sekolah (misalnya lukisan, musik, tarian), apakah kamu akan berpartisipasi dan menampilkan karyamu?', 'options' => $likert],
            ['order' => 12, 'dimension' => 'A', 'text' => 'Jika kamu bisa memilih sebagai hadiah: pensil seni dan kanvas atau kalkulator ilmiah, apakah kamu akan memilih pensil seni dan kanvas?', 'options' => $likert],
            ['order' => 13, 'dimension' => 'A', 'text' => 'Jika dalam sebuah proyek kelompok kamu bisa mengatur elemen visual dan desain (grafis, poster) daripada menghitung anggaran, apakah kamu akan mengambil bagian di bagian visual?', 'options' => $likert],
            ['order' => 14, 'dimension' => 'A', 'text' => 'Jika kamu ditanya apakah ingin menulis cerita pendek atau laporan fakta tentang topik tertentu di sekolah, apakah kamu akan memilih menulis cerita pendek?', 'options' => $likert],
            ['order' => 15, 'dimension' => 'A', 'text' => 'Jika kamu mempunyai waktu luang di rumah, apakah kamu lebih memilih membuat sketsa, menciptakan musik, atau menari dibanding menyusun spreadsheet?', 'options' => $likert],

            // S (Social)
            ['order' => 16, 'dimension' => 'S', 'text' => 'Jika sekolahmu mengadakan program mentoring anak-anak kecil, apakah kamu akan mendaftar untuk menjadi mentor karena kamu suka membantu orang lain?', 'options' => $likert],
            ['order' => 17, 'dimension' => 'S', 'text' => 'Jika dalam sebuah kegiatan kelompok kamu bisa memilih membantu teman memahami materi pelajaran atau mengerjakan tugas sendiri, apakah kamu akan membantu teman?', 'options' => $likert],
            ['order' => 18, 'dimension' => 'S', 'text' => 'Jika kamu dihadapkan pada pilihan untuk mengorganisir kegiatan sosial di sekolah (misalnya bakti sosial), apakah kamu akan berpartisipasi aktif?', 'options' => $likert],
            ['order' => 19, 'dimension' => 'S', 'text' => 'Jika teman meminta nasihat tentang perasaan atau masalah pribadinya, apakah kamu merasa nyaman mendengarkan dan mencoba membantunya?', 'options' => $likert],
            ['order' => 20, 'dimension' => 'S', 'text' => 'Jika kamu bisa memilih profesi masa depan antara psikolog, dokter, atau programmer, apakah kamu akan cenderung memilih psikolog karena suka berinteraksi dan membantu orang?', 'options' => $likert],

            // E (Enterprising)
            ['order' => 21, 'dimension' => 'E', 'text' => 'Jika kamu diizinkan memimpin sebuah proyek siswa (misalnya mengorganisir pameran sekolah), apakah kamu akan mengambil peran pemimpin?', 'options' => $likert],
            ['order' => 22, 'dimension' => 'E', 'text' => 'Jika ada kesempatan untuk menjual ide bisnis kecil di sekolah (misalnya stand jajanan), apakah kamu akan tertarik menjalankannya?', 'options' => $likert],
            ['order' => 23, 'dimension' => 'E', 'text' => 'Jika kamu bisa memilih menjadi pemimpin tim proyek (tim sekolah), apakah kamu akan melakukannya meskipun itu berarti harus mengambil risiko kegagalan?', 'options' => $likert],
            ['order' => 24, 'dimension' => 'E', 'text' => 'Jika kamu dihadapkan pada dua pilihan pekerjaan magang: menjadi asisten manajer acara atau asisten riset, apakah kamu akan memilih asisten manajer acara karena kamu suka dinamika sosial dan tantangan?', 'options' => $likert],
            ['order' => 25, 'dimension' => 'E', 'text' => 'Jika kamu memiliki ide usaha kecil (misalnya online shop), apakah kamu akan berani memulai meski belum punya modal besar?', 'options' => $likert],

            // C (Conventional)
            ['order' => 26, 'dimension' => 'C', 'text' => 'Jika kamu diberi tanggung jawab untuk mengatur file digital atau catatan penting dalam proyek sekolah, apakah kamu akan suka mengorganisirnya secara rapi dan sistematis?', 'options' => $likert],
            ['order' => 27, 'dimension' => 'C', 'text' => 'Jika kamu dihadapkan pada tugas menyusun laporan dengan format yang sangat terstruktur (tabel, kategori, urutan), apakah kamu lebih suka menyusunnya daripada tugas yang bebas tanpa aturan?', 'options' => $likert],
            ['order' => 28, 'dimension' => 'C', 'text' => 'Jika kamu harus memilih antara menjadi bendahara organisasi siswa atau pengurus kreatif (seperti pembuatan poster), apakah kamu akan memilih menjadi bendahara karena kamu suka angka dan keteraturan?', 'options' => $likert],
            ['order' => 29, 'dimension' => 'C', 'text' => 'Jika sekolah meminta relawan untuk mengarsip data lama perpustakaan (misalnya buku, dokumen), apakah kamu akan tertarik membantu karena suka pengaturan detail?', 'options' => $likert],
            ['order' => 30, 'dimension' => 'C', 'text' => 'Jika kamu memiliki pilihan untuk menyusun jadwal kegiatan sekolah (misalnya urutan acara, waktu, daftar peserta), apakah kamu akan mengambil bagian menyusun jadwal karena kamu suka perencanaan dan struktur?', 'options' => $likert],
        ];

        Question::insert($questions);
    }
}
