<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestHistory;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    // ============================
    // 1. Halaman awal
    // ============================

    public function start()
    {
        session()->forget('test_answers');
        return redirect()->route('test.interest.page', 1);
    }


    public function index()
    {
        return redirect()->route('test.interest.start');
    }


    // ============================
    // 2. Daftar 30 soal RIASEC
    // ============================

    private $questions = [
        // Realistic (1-5)
        1  => ['text' => 'Jika kamu bisa memilih, apakah kamu akan lebih memilih memperbaiki sebuah mobil mesin klasik daripada menulis laporan administratif?', 'cat' => 'R'],
        2  => ['text' => 'Jika kelompok harus membuat sebuah proyek fisik (misalnya membangun sesuatu), apakah kamu akan bersedia mengambil bagian aktif dalam pemasangan bagian-bagiannya?', 'cat' => 'R'],
        3  => ['text' => 'Jika seorang teman meminta bantuan untuk memindahkan perabot besar rumahnya, apakah kamu akan menawarkan diri untuk membantu karena kamu suka kerja fisik?', 'cat' => 'R'],
        4  => ['text' => 'Jika disediakan dua pilihan ekstrakurikuler, yaitu bengkel mekanik atau klub debat, apakah kamu lebih memilih bengkel mekanik?', 'cat' => 'R'],
        5  => ['text' => 'Jika untuk tugas sekolah kamu bisa memilih antara merancang prototipe sederhana benda mekanis atau membuat video kreatif, apakah kamu akan memilih merancang prototipe?', 'cat' => 'R'],

        // Investigative (6-10)
        6  => ['text' => 'Jika kamu mendapat tugas kelompok untuk menyelidiki fenomena alam (misalnya perubahan cuaca), apakah kamu akan memilih menjadi orang yang melakukan riset dan analisis data?', 'cat' => 'I'],
        7  => ['text' => 'Jika kamu diundang ke seminar sains dengan topik penelitian mutakhir (misalnya bioteknologi), apakah kamu akan sangat tertarik untuk ikut dan belajar lebih dalam?', 'cat' => 'I'],
        8  => ['text' => 'Jika diberikan pilihan antara membaca artikel ilmiah untuk menyelesaikan proyek atau membuat representasi artistik dari topik, apakah kamu lebih suka membaca artikel ilmiah?', 'cat' => 'I'],
        9  => ['text' => 'Jika kamu harus memilih antara bekerja di laboratorium kimia atau mengajar di sekolah dasar, apakah kamu akan memilih laboratorium?', 'cat' => 'I'],
        10 => ['text' => 'Jika seorang teman menawarkanmu untuk membantu mengembangkan hipotesis percobaan fisika sederhana, apakah kamu akan menerima dan mengerjakannya?', 'cat' => 'I'],

        // Artistic (11-15)
        11 => ['text' => 'Jika kamu diberi kesempatan membuat pameran kecil di sekolah (misalnya lukisan, musik, tarian), apakah kamu akan berpartisipasi dan menampilkan karyamu?', 'cat' => 'A'],
        12 => ['text' => 'Jika kamu bisa memilih sebagai hadiah: pensil seni dan kanvas atau kalkulator ilmiah, apakah kamu akan memilih pensil seni dan kanvas?', 'cat' => 'A'],
        13 => ['text' => 'Jika dalam sebuah proyek kelompok kamu bisa mengatur elemen visual dan desain (grafis, poster) daripada menghitung anggaran, apakah kamu akan mengambil bagian di bagian visual?', 'cat' => 'A'],
        14 => ['text' => 'Jika kamu ditanya apakah ingin menulis cerita pendek atau laporan fakta tentang topik tertentu di sekolah, apakah kamu akan memilih menulis cerita pendek?', 'cat' => 'A'],
        15 => ['text' => 'Jika kamu mempunyai waktu luang di rumah, apakah kamu lebih memilih membuat sketsa, menciptakan musik, atau menari dibanding menyusun spreadsheet?', 'cat' => 'A'],

        // Social (16-20)
        16 => ['text' => 'Jika sekolahmu mengadakan program mentoring anak-anak kecil, apakah kamu akan mendaftar untuk menjadi mentor karena kamu suka membantu orang lain?', 'cat' => 'S'],
        17 => ['text' => 'Jika dalam sebuah kegiatan kelompok kamu bisa memilih membantu teman memahami materi pelajaran atau mengerjakan tugas sendiri, apakah kamu akan membantu teman?', 'cat' => 'S'],
        18 => ['text' => 'Jika kamu dihadapkan pada pilihan untuk mengorganisir kegiatan sosial di sekolah (misalnya bakti sosial), apakah kamu akan berpartisipasi aktif?', 'cat' => 'S'],
        19 => ['text' => 'Jika teman meminta nasihat tentang perasaan atau masalah pribadinya, apakah kamu merasa nyaman mendengarkan dan mencoba membantunya?', 'cat' => 'S'],
        20 => ['text' => 'Jika kamu bisa memilih profesi masa depan antara psikolog, dokter, atau programmer, apakah kamu akan cenderung memilih psikolog karena suka berinteraksi dan membantu orang?', 'cat' => 'S'],

        // Enterprising (21-25)
        21 => ['text' => 'Jika kamu diizinkan memimpin sebuah proyek siswa (misalnya mengorganisir pameran sekolah), apakah kamu akan mengambil peran pemimpin?', 'cat' => 'E'],
        22 => ['text' => 'Jika ada kesempatan untuk menjual ide bisnis kecil di sekolah (misalnya stand jajanan), apakah kamu akan tertarik menjalankannya?', 'cat' => 'E'],
        23 => ['text' => 'Jika kamu bisa memilih menjadi pemimpin tim proyek (tim sekolah), apakah kamu akan melakukannya meskipun itu berarti harus mengambil risiko kegagalan?', 'cat' => 'E'],
        24 => ['text' => 'Jika kamu kedatangan pada dua pilihan pekerjaan magang: menjadi asisten manajer acara atau asisten riset, apakah kamu akan memilih asisten manajer acara karena kamu suka dinamika sosial dan tantangan?', 'cat' => 'E'],
        25 => ['text' => 'Jika kamu memiliki ide usaha kecil (misalnya online shop), apakah kamu akan berani memulai meski belum punya modal besar?', 'cat' => 'E'],

        // Conventional (26-30)
        26 => ['text' => 'Jika kamu diberi tanggung jawab untuk mengatur file digital atau catatan penting dalam proyek sekolah, apakah kamu akan suka mengorganisirnya secara rapi dan sistematis?', 'cat' => 'C'],
        27 => ['text' => 'Jika kamu berkesempatan pada tugas menyusun laporan dengan format yang sangat terstruktur (tabel, kategori, urutan), apakah kamu lebih suka menyusunnya daripada tugas yang bebas tanpa aturan?', 'cat' => 'C'],
        28 => ['text' => 'Jika kamu harus memilih antara menjadi bendahara organisasi siswa atau pengurus kreatif (seperti pembuatan poster), apakah kamu akan memilih menjadi bendahara karena kamu suka angka dan keteraturan?', 'cat' => 'C'],
        29 => ['text' => 'Jika sekolah meminta relawan untuk mengarsip data lama perpustakaan (misalnya buku, dokumen), apakah kamu akan tertarik membantu karena suka pengaturan detail?', 'cat' => 'C'],
        30 => ['text' => 'Jika kamu memiliki pilihan untuk menyusun jadwal kegiatan sekolah (misalnya urutan acara, waktu, daftar peserta), apakah kamu akan mengambil bagian menyusun jadwal karena kamu suka perencanaan dan struktur?', 'cat' => 'C'],
    ];

    // ============================
    // Job Recommendations Database
    // ============================

    // Single type recommendations (top 15)
    private $singleJobs = [
        'R' => ['Teknisi Mesin', 'Mekanik Otomotif', 'Operator Produksi', 'Teknisi Listrik / Elektroteknik', 'Surveyor Lapangan', 'Teknisi Jaringan', 'Teknisi AC & Refrigerasi', 'Montir Motor', 'Teknisi Komputer', 'Teknisi Laboratorium Teknik', 'Tukang Las / Welder', 'Teknisi Konstruksi', 'Petani / Agrikultur Praktis', 'Teknisi Audio-Video', 'Teknisi Drone / UAV Operator'],
        'I' => ['Analis Data', 'Peneliti (Researcher)', 'Analis Sistem', 'Ilmuwan Komputer / Machine Learning Engineer', 'Biolog / Mikrobiolog', 'Analis Statistik', 'Analis Keuangan Kuantitatif', 'Epidemiolog', 'Kimiawan Laboratorium', 'Peneliti Psikologi', 'Analis Quality Control (QC Analyst)', 'Aktuaris', 'Teknisi Medis Laboratorium', 'Analis Keamanan Siber', 'Insinyur Riset & Pengembangan (R&D Engineer)'],
        'A' => ['Desainer Grafis', 'Illustrator Digital', 'Animator 2D/3D', 'Desainer UI/UX', 'Fotografer', 'Videografer', 'Penulis Kreatif / Content Writer', 'Music Composer', 'Desainer Interior', 'Fashion Designer', 'Seniman / Pelukis', 'Editor Video', 'Art Director', 'Web Designer', 'Kreator Konten (Creative Content Creator)'],
        'S' => ['Guru / Pengajar', 'Konselor Karir', 'Konselor Sekolah', 'Psikolog', 'Perawat', 'Terapis Wicara', 'Pekerja Sosial', 'Dosen / Instruktur', 'Tenaga Bimbingan Konseling', 'Customer Service', 'Trainer / Instruktur Pelatihan', 'Relawan Layanan Sosial', 'Bidan', 'Tutor Privat', 'Pembimbing Komunitas'],
        'E' => ['Manajer Operasional', 'Sales Executive', 'Marketing Strategist', 'Supervisor / Leader Tim', 'Pengusaha / Entrepreneur', 'Public Relations Specialist', 'Business Development', 'Konsultan Bisnis', 'Agen Properti', 'Manajer HR', 'Manajer Retail', 'Event Organizer', 'Broker Keuangan / Saham', 'Konsultan Manajemen', 'Manajer Proyek (Project Manager)'],
        'C' => ['Staf Administrasi', 'Administrasi Perkantoran', 'Akuntan', 'Kasir / Teller Bank', 'Staf Pembukuan', 'Petugas Entry Data', 'Admin Gudang', 'Sekretaris', 'Quality Assurance (Dokumentasi)', 'Inventory Controller', 'Pengarsip Dokumen', 'Staf Keuangan', 'Auditor Internal', 'Payroll Officer', 'Operator Database / Data Management Staff'],
    ];

    // Combination jobs (RI, RA, RS, RE, RC, etc.)
    private $comboJobs = [
        'RI' => ['Teknisi Laboratorium', 'Teknisi Kualitas Produk', 'Surveyor Geologi', 'Teknisi Biomedis', 'Teknisi Energi Terbarukan', 'Teknisi Kendaraan Listrik'],
        'RA' => ['Teknisi Desain Produk', 'Pembuat Furniture Custom', 'Desainer Otomotif', 'Teknisi Efek Visual Mekanis', 'Artis Patung (Metal / Kayu)', 'Pembuat Instrumen Musik'],
        'RS' => ['Pelatih Olahraga', 'Instruktur Safety', 'Fisioterapis Asisten', 'Petugas SAR', 'Instruktur Bengkel SMK', 'Teknisi Peralatan Medis Lapangan'],
        'RE' => ['Teknisi Sales (Field Engineer)', 'Konsultan Instalasi Mesin', 'Supervisor Produksi', 'Pengusaha Bengkel Otomotif', 'Kontraktor Mandiri', 'Sales Engineer'],
        'RC' => ['Operator Produksi', 'Quality Control Inspector', 'Teknisi Administrasi Perawatan (Maintenance Admin)', 'Document Controller Teknik', 'Inventory Planner Teknik', 'Teknisi Arsip Digital'],
        'IR' => ['Analis Forensik', 'Peneliti Biologi Lapangan', 'Ahli Geologi Eksplorasi', 'Analis Polusi Lingkungan', 'Teknisi Mikroskopi', 'Ahli Hidrologi Terapan'],
        'IA' => ['Analis UX Research', 'Data Visualization Specialist', 'Perancang Instrumen Sains', 'Penulis Sains (Science Writer)', 'Desainer Informasi', 'Ilustrator Medis'],
        'IS' => ['Konselor Pendidikan Sains', 'Psikolog Riset', 'Health Educator', 'Konsultan Gizi', 'Peneliti Sosial', 'Dosen / Pengajar STEM'],
        'IE' => ['Konsultan Data', 'Business Analyst', 'Manajer R&D', 'Ahli Statistik Industri', 'Product Strategist (Tech)', 'Konsultan Kebijakan Publik'],
        'IC' => ['Data Entry Science', 'Dokumentasi Lab', 'Administrator Riset', 'Analis Sistem Administrasi', 'Pengolah Data Kesehatan', 'Analis Dokumentasi Mutu'],
        'AR' => ['Desainer Produk', 'Pembuat Kerajinan', 'Artis 3D Model', 'Desainer Fashion Teknis', 'Kreator Efek Praktikal', 'Artis Visual Instalasi'],
        'AI' => ['Desainer Instruksional', 'Penulis Skenario Dokumenter', 'Creative Researcher', 'Desainer Algoritma Kreatif', 'Game Designer', 'Sound Analyst'],
        'AS' => ['Guru Seni', 'Konselor Kreatif', 'Art Therapist', 'Pemandu Kegiatan Kreatif', 'Desainer Edukasi Anak', 'Kreator Konten Edukasi'],
        'AE' => ['Creative Director', 'Brand Strategist', 'Pengusaha Produk Kreatif', 'Fashion Entrepreneur', 'Manajer Event Kreatif', 'Creative Marketing Specialist'],
        'AC' => ['Editor Foto', 'Layout Artist', 'Typography Specialist', 'Pengolah Arsip Visual', 'Editor Buku', 'Desain Template Publikasi'],
        'SR' => ['Terapis Okupasi Asisten', 'Instruktur Keterampilan Teknik', 'Petugas Kesehatan Lapangan', 'Pembimbing Remaja', 'Fisioterapis', 'Pelatih Fitness'],
        'SI' => ['Konselor Akademik', 'Peneliti Pendidikan', 'Ahli Kesehatan Masyarakat', 'Psikometrik Asisten', 'Konsultan Sekolah', 'Social Program Evaluator'],
        'SA' => ['Art Counselor', 'Guru Musik', 'Pelatih Seni Pertunjukan', 'Pendamping Terapi Seni', 'Kreator Program Anak', 'Content Creator Edukasi Seni'],
        'SE' => ['Sales Trainer', 'Public Relations Specialist', 'Business Development', 'Motivator / Coach', 'HR Recruiter', 'Customer Success Manager'],
        'SC' => ['Petugas Administrasi Klinik', 'Staf BPJS', 'Customer Service', 'Admin Sekolah', 'Petugas Front Office', 'Data Admin Kesehatan'],
        'ER' => ['Supervisor Operasional', 'Pengusaha Produk Teknik', 'Kontraktor Bangunan', 'Franchise Owner', 'Sales Engineer', 'Manager Bengkel'],
        'EI' => ['Manajer Bisnis Data', 'Konsultan Strategi', 'Analis Pasar', 'Manajer Tech Startup', 'Financial Planner', 'Manajer Riset Pasar'],
        'EA' => ['Brand Manager', 'Creative Marketing Supervisor', 'Content Director', 'Pengusaha Seni', 'Manajer Fashion Retail', 'Creative PR Specialist'],
        'ES' => ['HR Manager', 'Trainer SDM', 'Relationship Manager', 'Event Organizer', 'Community Manager', 'Supervisor Layanan'],
        'EC' => ['Supervisor Administrasi', 'Manajer Finansial', 'Pengawas Logistik', 'Auditor Operasional', 'Control Analyst', 'Procurement Officer'],
        'CR' => ['Inventory Control', 'Admin Teknisi', 'Data Processor', 'Asset Management Staff', 'Logistic Admin', 'Operator Komputer Industri'],
        'CI' => ['Data Analyst', 'Quality Documentation Analyst', 'Analis Perpajakan', 'Compliance Analyst', 'Administrasi Hasil Riset', 'Data Quality Specialist'],
        'CA' => ['Editor Media', 'Penyusun Layout Majalah', 'Proofreader', 'Editor Naskah', 'Penyusun Arsip Digital', 'Desainer Template'],
        'CS' => ['Customer Support', 'Staff Administrasi Kesehatan', 'Front Desk Officer', 'Admin HR', 'Call Center Officer', 'Staf Layanan Publik'],
        'CE' => ['Supervisor Administrasi', 'Procurement Staff', 'Manajer Back Office', 'Auditor Internal', 'Staff Keuangan', 'Logistic Coordinator'],
    ];

    // ============================
    // 3. Halaman pertanyaan
    // ============================

    public function page($page)
    {
        if (!in_array($page, [1,2,3,4,5,6])) return redirect('/dashboard');

        $start = ($page - 1) * 5 + 1;
        $end   = $start + 4;

        $questions = [];
        for ($i = $start; $i <= $end; $i++) {
            $questions[$i] = $this->questions[$i];
        }

        return view('test.interest_page', compact('page', 'questions'));
    }

    public function next(Request $req)
    {
        $existing = session('test_answers', []);
        $incoming = $req->input('answers', []);
        session()->put('test_answers', array_replace($existing, $incoming));

        return redirect()->route('test.interest.page', $req->page + 1);
    }


    // ============================
    // 4. Finish – hitung hasil RIASEC
    // ============================

    public function finish(Request $req)
    {
        // gabungkan jawaban terakhir
        $existing = session('test_answers', []);
        $incoming = $req->input('answers', []);
        session()->put('test_answers', array_replace($existing, $incoming));

        $answers = session('test_answers', []);
        if (empty($answers)) {
            return redirect()->route('test.interest.page', 1)
                ->with('error', 'Silakan lengkapi jawaban tes terlebih dahulu.');
        }

        // hitung skor
        $score = ['R'=>0,'I'=>0,'A'=>0,'S'=>0,'E'=>0,'C'=>0];

        foreach ($answers as $num => $value) {
            $cat = $this->questions[$num]['cat'];
            $score[$cat] += intval($value);
        }

        // urutkan dari yg tertinggi
        arsort($score);
        $sortedKeys = array_keys($score);
        
        $primary   = $sortedKeys[0];
        $secondary = $sortedKeys[1];
        
        $scoreValues = array_values($score);
        
        // Tentukan rekomendasi pekerjaan
        $final_rekom = [];
        
        // Cek apakah ada tie (nilai sama) pada posisi 2 dan 3
        $hasTie = ($scoreValues[1] == $scoreValues[2]);
        
        if ($hasTie) {
            // Jika ada tie, gunakan kombinasi 3 indikator
            $third = $sortedKeys[2];
            $tripleKey = $primary . $third;
            
            if (isset($this->comboJobs[$tripleKey])) {
                $final_rekom = array_merge($final_rekom, $this->comboJobs[$tripleKey]);
            }
            
            // Cari comboJobs untuk secondary + third
            $tripleKey2 = $secondary . $third;
            if (isset($this->comboJobs[$tripleKey2])) {
                $final_rekom = array_merge($final_rekom, $this->comboJobs[$tripleKey2]);
            }
            
            // Ambil juga dari single jobs untuk primary
            $final_rekom = array_merge($final_rekom, array_slice($this->singleJobs[$primary], 0, 3));
        } else {
            // Normal case - tidak ada tie
            $comboKey = $primary . $secondary;
            
            if (isset($this->comboJobs[$comboKey])) {
                $final_rekom = array_merge($final_rekom, $this->comboJobs[$comboKey]);
            }
            
            // Tambahkan dari single jobs primary
            $final_rekom = array_merge($final_rekom, array_slice($this->singleJobs[$primary], 0, 3));
            
            // Tambahkan dari single jobs secondary
            $final_rekom = array_merge($final_rekom, array_slice($this->singleJobs[$secondary], 0, 2));
        }
        
        // Ambil 10 rekomendasi teratas (hapus duplikat)
        $final_rekom = array_unique($final_rekom);
        $final_rekom = array_values($final_rekom);
        $final_rekom = array_slice($final_rekom, 0, 10);

        // simpan ke database
        $history = TestHistory::create([
            'user_id'        => Auth::id(),
            'R' => $score['R'],
            'I' => $score['I'],
            'A' => $score['A'],
            'S' => $score['S'],
            'E' => $score['E'],
            'C' => $score['C'],
            'primary_type'   => $primary,
            'secondary_type' => $secondary,
            'recommendations'=> json_encode($final_rekom),
        ]);

        // hapus session jawaban
        session()->forget('test_answers');

        return redirect()->route('test.interest.result', $history->id);
    }


    // ============================
    // 5. Halaman Hasil Tes
    // ============================

    public function result($id)
    {
        $data = TestHistory::findOrFail($id);
        return view('test.interest_result', compact('data'));
    }


    // ============================
    // 6. History Tes
    // ============================

    public function history()
    {
        $histories = TestHistory::where('user_id', Auth::id())
                    ->orderBy('created_at','desc')->get();

        return view('test.history', compact('histories'));
    }


    // ============================
    // Dummy tes kepribadian
    // ============================

    public function kepribadian()
    {
        return view('test-kepribadian');
    }

}
