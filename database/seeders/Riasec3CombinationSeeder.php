<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Riasec3Combination;

class Riasec3CombinationSeeder extends Seeder
{
    public function run()
    {
        $data = [

            // -----------------------------
            // RIA – Realistic / Investigative / Artistic
            // -----------------------------
            ['code' => 'RIA', 'job_name' => 'Arsitek'],
            ['code' => 'RIA', 'job_name' => 'Perancang Produk'],
            ['code' => 'RIA', 'job_name' => 'Teknisi Desain Industri'],
            ['code' => 'RIA', 'job_name' => 'Drafter Teknik'],
            ['code' => 'RIA', 'job_name' => 'Engineer Otomotif'],
            ['code' => 'RIA', 'job_name' => 'Designer CAD'],
            ['code' => 'RIA', 'job_name' => 'Teknisi Energi Terbarukan'],
            ['code' => 'RIA', 'job_name' => 'Ilustrator Teknis'],
            ['code' => 'RIA', 'job_name' => 'Teknisi Robotik'],
            ['code' => 'RIA', 'job_name' => 'Teknisi Geospasial'],

            // -----------------------------
            // RIS – Realistic / Investigative / Social
            // -----------------------------
            ['code' => 'RIS', 'job_name' => 'Ahli lingkungan'],
            ['code' => 'RIS', 'job_name' => 'Teknisi laboratorium medis'],
            ['code' => 'RIS', 'job_name' => 'Penyuluh lapangan'],
            ['code' => 'RIS', 'job_name' => 'Analis kesehatan masyarakat'],
            ['code' => 'RIS', 'job_name' => 'Teknisi geologi'],
            ['code' => 'RIS', 'job_name' => 'Teknisi hidrologi'],
            ['code' => 'RIS', 'job_name' => 'Fisioterapi asisten'],
            ['code' => 'RIS', 'job_name' => 'Pelatih keamanan kerja'],
            ['code' => 'RIS', 'job_name' => 'Teknisi penelitian biologi'],
            ['code' => 'RIS', 'job_name' => 'Instruktur teknis'],

            // -----------------------------
            // REC – Realistic / Enterprising / Conventional
            // -----------------------------
            ['code' => 'REC', 'job_name' => 'Supervisor produksi'],
            ['code' => 'REC', 'job_name' => 'Teknisi sales'],
            ['code' => 'REC', 'job_name' => 'Manajer operasional teknis'],
            ['code' => 'REC', 'job_name' => 'Koordinator logistik industri'],
            ['code' => 'REC', 'job_name' => 'Quality assurance supervisor'],
            ['code' => 'REC', 'job_name' => 'Pengawas proyek konstruksi'],
            ['code' => 'REC', 'job_name' => 'Procurement staff teknis'],
            ['code' => 'REC', 'job_name' => 'Project coordinator'],
            ['code' => 'REC', 'job_name' => 'Sales engineer'],
            ['code' => 'REC', 'job_name' => 'Kontraktor mandiri'],

            // -----------------------------
            // RAE – Realistic / Artistic / Enterprising
            // -----------------------------
            ['code' => 'RAE', 'job_name' => 'Desainer produk'],
            ['code' => 'RAE', 'job_name' => 'Pengusaha furniture'],
            ['code' => 'RAE', 'job_name' => 'Teknisi efek visual'],
            ['code' => 'RAE', 'job_name' => 'Artis 3D model industri'],
            ['code' => 'RAE', 'job_name' => 'Pengusaha bengkel modifikasi'],
            ['code' => 'RAE', 'job_name' => 'Interior builder'],
            ['code' => 'RAE', 'job_name' => 'Konsultan desain teknis'],
            ['code' => 'RAE', 'job_name' => 'Kreator prototipe produk'],
            ['code' => 'RAE', 'job_name' => 'Fashion product technician'],
            ['code' => 'RAE', 'job_name' => 'Entrepreneur kerajinan'],

            // -----------------------------
            // RIC – Realistic / Investigative / Conventional
            // -----------------------------
            ['code' => 'RIC', 'job_name' => 'Quality control analyst'],
            ['code' => 'RIC', 'job_name' => 'Lab data documenter'],
            ['code' => 'RIC', 'job_name' => 'Analis laboratorium'],
            ['code' => 'RIC', 'job_name' => 'Teknisi kimia'],
            ['code' => 'RIC', 'job_name' => 'Biotechnician'],
            ['code' => 'RIC', 'job_name' => 'Surveyor data'],
            ['code' => 'RIC', 'job_name' => 'Mapping specialist'],
            ['code' => 'RIC', 'job_name' => 'Analis data eksperimen'],
            ['code' => 'RIC', 'job_name' => 'Dokumentasi riset'],
            ['code' => 'RIC', 'job_name' => 'Teknisi validasi'],

            // -----------------------------
            // ISA – Investigative / Social / Artistic
            // -----------------------------
            ['code' => 'ISA', 'job_name' => 'Konselor pendidikan'],
            ['code' => 'ISA', 'job_name' => 'Peneliti pendidikan'],
            ['code' => 'ISA', 'job_name' => 'Penulis ilmiah'],
            ['code' => 'ISA', 'job_name' => 'Ilustrator medis'],
            ['code' => 'ISA', 'job_name' => 'Dosen seni & sains'],
            ['code' => 'ISA', 'job_name' => 'Content creator edukasi'],
            ['code' => 'ISA', 'job_name' => 'Konsultan kurikulum'],
            ['code' => 'ISA', 'job_name' => 'Health educator'],
            ['code' => 'ISA', 'job_name' => 'Science writer'],
            ['code' => 'ISA', 'job_name' => 'Creative researcher'],

            // -----------------------------
            // ISE – Investigative / Social / Enterprising
            // -----------------------------
            ['code' => 'ISE', 'job_name' => 'Konsultan riset'],
            ['code' => 'ISE', 'job_name' => 'Data analyst'],
            ['code' => 'ISE', 'job_name' => 'Public health consultant'],
            ['code' => 'ISE', 'job_name' => 'Business analyst'],
            ['code' => 'ISE', 'job_name' => 'Project manager riset'],
            ['code' => 'ISE', 'job_name' => 'Product manager'],
            ['code' => 'ISE', 'job_name' => 'Konsultan kebijakan publik'],
            ['code' => 'ISE', 'job_name' => 'Epidemiology associate'],
            ['code' => 'ISE', 'job_name' => 'Research strategist'],
            ['code' => 'ISE', 'job_name' => 'Financial data consultant'],

            // -----------------------------
            // IAR – Investigative / Artistic / Realistic
            // -----------------------------
            ['code' => 'IAR', 'job_name' => 'Game designer'],
            ['code' => 'IAR', 'job_name' => 'UX researcher'],
            ['code' => 'IAR', 'job_name' => 'Data visualization specialist'],
            ['code' => 'IAR', 'job_name' => 'Desainer simulasi'],
            ['code' => 'IAR', 'job_name' => 'Ilustrator teknis'],
            ['code' => 'IAR', 'job_name' => 'Pembuat model 3D ilmiah'],
            ['code' => 'IAR', 'job_name' => 'Animator sains'],
            ['code' => 'IAR', 'job_name' => 'Penulis teknologi'],
            ['code' => 'IAR', 'job_name' => 'Desainer instruksional'],
            ['code' => 'IAR', 'job_name' => 'Sistem multimedia ilmiah'],

            // -----------------------------
            // IEC – Investigative / Enterprising / Conventional
            // -----------------------------
            ['code' => 'IEC', 'job_name' => 'Manajer data'],
            ['code' => 'IEC', 'job_name' => 'Konsultan statistik'],
            ['code' => 'IEC', 'job_name' => 'Manajer riset pasar'],
            ['code' => 'IEC', 'job_name' => 'Analis kebijakan publik'],
            ['code' => 'IEC', 'job_name' => 'Financial analyst'],
            ['code' => 'IEC', 'job_name' => 'Compliance data officer'],
            ['code' => 'IEC', 'job_name' => 'Product research manager'],
            ['code' => 'IEC', 'job_name' => 'Business intelligence'],
            ['code' => 'IEC', 'job_name' => 'Supply chain analyst'],
            ['code' => 'IEC', 'job_name' => 'Operation analyst'],

            // -----------------------------
            // AES – Artistic / Enterprising / Social
            // -----------------------------
            ['code' => 'AES', 'job_name' => 'Creative director'],
            ['code' => 'AES', 'job_name' => 'Brand strategist'],
            ['code' => 'AES', 'job_name' => 'Event manager'],
            ['code' => 'AES', 'job_name' => 'Content marketing'],
            ['code' => 'AES', 'job_name' => 'Public relations creative'],
            ['code' => 'AES', 'job_name' => 'Influencer strategist'],
            ['code' => 'AES', 'job_name' => 'Talent management'],
            ['code' => 'AES', 'job_name' => 'Creative entrepreneur'],
            ['code' => 'AES', 'job_name' => 'Campaign creator'],
            ['code' => 'AES', 'job_name' => 'Corporate trainer kreatif'],

            // -----------------------------
            // ASI – Artistic / Social / Investigative
            // -----------------------------
            ['code' => 'ASI', 'job_name' => 'Art therapist'],
            ['code' => 'ASI', 'job_name' => 'Guru seni'],
            ['code' => 'ASI', 'job_name' => 'Konselor kreatif'],
            ['code' => 'ASI', 'job_name' => 'Peneliti seni'],
            ['code' => 'ASI', 'job_name' => 'Educator media'],
            ['code' => 'ASI', 'job_name' => 'Museum educator'],
            ['code' => 'ASI', 'job_name' => 'Creative curriculum designer'],
            ['code' => 'ASI', 'job_name' => 'Pengembang media pembelajaran'],
            ['code' => 'ASI', 'job_name' => 'Creative writer'],
            ['code' => 'ASI', 'job_name' => 'Illustrator edukasi'],

            // -----------------------------
            // SIA – Social / Investigative / Artistic
            // -----------------------------
            ['code' => 'SIA', 'job_name' => 'Psikolog pendidikan'],
            ['code' => 'SIA', 'job_name' => 'Konselor akademik'],
            ['code' => 'SIA', 'job_name' => 'Kurator museum'],
            ['code' => 'SIA', 'job_name' => 'Pengembang modul pembelajaran'],
            ['code' => 'SIA', 'job_name' => 'Analis perilaku'],
            ['code' => 'SIA', 'job_name' => 'Trainer soft-skill'],
            ['code' => 'SIA', 'job_name' => 'Pengajar seni'],
            ['code' => 'SIA', 'job_name' => 'Pendamping terapi'],
            ['code' => 'SIA', 'job_name' => 'Penulis edukasi'],
            ['code' => 'SIA', 'job_name' => 'Program evaluator'],

            // -----------------------------
            // SEC – Social / Enterprising / Conventional
            // -----------------------------
            ['code' => 'SEC', 'job_name' => 'HR manager'],
            ['code' => 'SEC', 'job_name' => 'Customer success manager'],
            ['code' => 'SEC', 'job_name' => 'Supervisor administrasi'],
            ['code' => 'SEC', 'job_name' => 'Relationship manager'],
            ['code' => 'SEC', 'job_name' => 'Account manager'],
            ['code' => 'SEC', 'job_name' => 'Training coordinator'],
            ['code' => 'SEC', 'job_name' => 'Office manager'],
            ['code' => 'SEC', 'job_name' => 'Government service officer'],
            ['code' => 'SEC', 'job_name' => 'Admin sekolah'],
            ['code' => 'SEC', 'job_name' => 'Supervisor layanan publik'],

            // -----------------------------
            // EIS – Enterprising / Investigative / Social
            // -----------------------------
            ['code' => 'EIS', 'job_name' => 'Corporate trainer'],
            ['code' => 'EIS', 'job_name' => 'Business consultant'],
            ['code' => 'EIS', 'job_name' => 'Learning & development specialist'],
            ['code' => 'EIS', 'job_name' => 'Senior analyst'],
            ['code' => 'EIS', 'job_name' => 'Community strategist'],
            ['code' => 'EIS', 'job_name' => 'HR business partner'],
            ['code' => 'EIS', 'job_name' => 'Startup consultant'],
            ['code' => 'EIS', 'job_name' => 'Public policy advisor'],
            ['code' => 'EIS', 'job_name' => 'Technical advisor'],
            ['code' => 'EIS', 'job_name' => 'Market development lead'],

            // -----------------------------
            // CSE – Conventional / Social / Enterprising
            // -----------------------------
            ['code' => 'CSE', 'job_name' => 'Admin HR'],
            ['code' => 'CSE', 'job_name' => 'Customer service supervisor'],
            ['code' => 'CSE', 'job_name' => 'Admin legal'],
            ['code' => 'CSE', 'job_name' => 'Admin logistik'],
            ['code' => 'CSE', 'job_name' => 'Sekretaris eksekutif'],
            ['code' => 'CSE', 'job_name' => 'Payroll officer'],
            ['code' => 'CSE', 'job_name' => 'Back office officer'],
            ['code' => 'CSE', 'job_name' => 'Staff keuangan'],
            ['code' => 'CSE', 'job_name' => 'Data management staff'],
            ['code' => 'CSE', 'job_name' => 'Procurement admin'],
        ];

        Riasec3Combination::insert($data);
    }
}
