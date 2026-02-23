<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiasecJob;

class RiasecCombinationSeeder extends Seeder
{
    public function run()
    {
        $data = [

            // -----------------------------
            // REALISTIC + INVESTIGATIVE (RI)
            // -----------------------------
            ['code' => 'RI', 'job_name' => 'Teknisi Laboratorium'],
            ['code' => 'RI', 'job_name' => 'Teknisi Kualitas Produk'],
            ['code' => 'RI', 'job_name' => 'Surveyor Geologi'],
            ['code' => 'RI', 'job_name' => 'Teknisi Biomedis'],
            ['code' => 'RI', 'job_name' => 'Teknisi Energi Terbarukan'],
            ['code' => 'RI', 'job_name' => 'Teknisi Kendaraan Listrik'],

            // -----------------------------
            // REALISTIC + ARTISTIC (RA)
            // -----------------------------
            ['code' => 'RA', 'job_name' => 'Teknisi Desain Produk'],
            ['code' => 'RA', 'job_name' => 'Pembuat Furniture Custom'],
            ['code' => 'RA', 'job_name' => 'Desainer Otomotif'],
            ['code' => 'RA', 'job_name' => 'Teknisi Efek Visual Mekanis'],
            ['code' => 'RA', 'job_name' => 'Artis Patung (Metal/Kayu)'],
            ['code' => 'RA', 'job_name' => 'Pembuat Instrumen Musik'],

            // -----------------------------
            // REALISTIC + SOCIAL (RS)
            // -----------------------------
            ['code' => 'RS', 'job_name' => 'Pelatih Olahraga'],
            ['code' => 'RS', 'job_name' => 'Instruktur Safety'],
            ['code' => 'RS', 'job_name' => 'Fisioterapis Asisten'],
            ['code' => 'RS', 'job_name' => 'Petugas SAR'],
            ['code' => 'RS', 'job_name' => 'Instruktur Bengkel SMK'],
            ['code' => 'RS', 'job_name' => 'Teknisi Peralatan Medis Lapangan'],

            // -----------------------------
            // REALISTIC + ENTERPRISING (RE)
            // -----------------------------
            ['code' => 'RE', 'job_name' => 'Teknisi Sales (Field Engineer)'],
            ['code' => 'RE', 'job_name' => 'Konsultan Instalasi Mesin'],
            ['code' => 'RE', 'job_name' => 'Supervisor Produksi'],
            ['code' => 'RE', 'job_name' => 'Pengusaha Bengkel Otomotif'],
            ['code' => 'RE', 'job_name' => 'Kontraktor Mandiri'],
            ['code' => 'RE', 'job_name' => 'Sales Engineer'],

            // -----------------------------
            // REALISTIC + CONVENTIONAL (RC)
            // -----------------------------
            ['code' => 'RC', 'job_name' => 'Operator Produksi'],
            ['code' => 'RC', 'job_name' => 'Quality Control Inspector'],
            ['code' => 'RC', 'job_name' => 'Teknisi Administrasi Perawatan'],
            ['code' => 'RC', 'job_name' => 'Document Controller Teknik'],
            ['code' => 'RC', 'job_name' => 'Inventory Planner Teknik'],
            ['code' => 'RC', 'job_name' => 'Teknisi Arsip Digital'],

            // -----------------------------
            // INVESTIGATIVE + REALISTIC (IR)
            // -----------------------------
            ['code' => 'IR', 'job_name' => 'Analis Forensik'],
            ['code' => 'IR', 'job_name' => 'Peneliti Biologi Lapangan'],
            ['code' => 'IR', 'job_name' => 'Ahli Geologi Eksplorasi'],
            ['code' => 'IR', 'job_name' => 'Analis Polusi Lingkungan'],
            ['code' => 'IR', 'job_name' => 'Teknisi Mikroskopi'],
            ['code' => 'IR', 'job_name' => 'Ahli Hidrologi Terapan'],

            // -----------------------------
            // INVESTIGATIVE + ARTISTIC (IA)
            // -----------------------------
            ['code' => 'IA', 'job_name' => 'Analis UX Research'],
            ['code' => 'IA', 'job_name' => 'Data Visualization Specialist'],
            ['code' => 'IA', 'job_name' => 'Perancang Instrumen Sains'],
            ['code' => 'IA', 'job_name' => 'Penulis Sains'],
            ['code' => 'IA', 'job_name' => 'Desainer Informasi'],
            ['code' => 'IA', 'job_name' => 'Ilustrator Medis'],

            // -----------------------------
            // INVESTIGATIVE + SOCIAL (IS)
            // -----------------------------
            ['code' => 'IS', 'job_name' => 'Konselor Pendidikan Sains'],
            ['code' => 'IS', 'job_name' => 'Psikolog Riset'],
            ['code' => 'IS', 'job_name' => 'Health Educator'],
            ['code' => 'IS', 'job_name' => 'Konsultan Gizi'],
            ['code' => 'IS', 'job_name' => 'Peneliti Sosial'],
            ['code' => 'IS', 'job_name' => 'Dosen / Pengajar STEM'],

            // -----------------------------
            // INVESTIGATIVE + ENTERPRISING (IE)
            // -----------------------------
            ['code' => 'IE', 'job_name' => 'Konsultan Data'],
            ['code' => 'IE', 'job_name' => 'Business Analyst'],
            ['code' => 'IE', 'job_name' => 'Manajer R&D'],
            ['code' => 'IE', 'job_name' => 'Ahli Statistik Industri'],
            ['code' => 'IE', 'job_name' => 'Product Strategist'],
            ['code' => 'IE', 'job_name' => 'Konsultan Kebijakan Publik'],

            // -----------------------------
            // INVESTIGATIVE + CONVENTIONAL (IC)
            // -----------------------------
            ['code' => 'IC', 'job_name' => 'Data Entry Science'],
            ['code' => 'IC', 'job_name' => 'Dokumentasi Lab'],
            ['code' => 'IC', 'job_name' => 'Administrator Riset'],
            ['code' => 'IC', 'job_name' => 'Analis Sistem Administrasi'],
            ['code' => 'IC', 'job_name' => 'Pengolah Data Kesehatan'],
            ['code' => 'IC', 'job_name' => 'Analis Dokumentasi Mutu'],

            // -----------------------------
            // ARTISTIC + REALISTIC (AR)
            // -----------------------------
            ['code' => 'AR', 'job_name' => 'Desainer Produk'],
            ['code' => 'AR', 'job_name' => 'Pembuat Kerajinan'],
            ['code' => 'AR', 'job_name' => 'Artis 3D Model'],
            ['code' => 'AR', 'job_name' => 'Desainer Fashion Teknis'],
            ['code' => 'AR', 'job_name' => 'Kreator Efek Praktikal'],
            ['code' => 'AR', 'job_name' => 'Artis Visual Instalasi'],

            // -----------------------------
            // ARTISTIC + INVESTIGATIVE (AI)
            // -----------------------------
            ['code' => 'AI', 'job_name' => 'Desainer Instruksional'],
            ['code' => 'AI', 'job_name' => 'Penulis Skenario Dokumenter'],
            ['code' => 'AI', 'job_name' => 'Creative Researcher'],
            ['code' => 'AI', 'job_name' => 'Desainer Algoritma Kreatif'],
            ['code' => 'AI', 'job_name' => 'Game Designer'],
            ['code' => 'AI', 'job_name' => 'Sound Analyst'],

            // -----------------------------
            // ARTISTIC + SOCIAL (AS)
            // -----------------------------
            ['code' => 'AS', 'job_name' => 'Guru Seni'],
            ['code' => 'AS', 'job_name' => 'Konselor Kreatif'],
            ['code' => 'AS', 'job_name' => 'Art Therapist'],
            ['code' => 'AS', 'job_name' => 'Pemandu Kegiatan Kreatif'],
            ['code' => 'AS', 'job_name' => 'Desainer Edukasi Anak'],
            ['code' => 'AS', 'job_name' => 'Kreator Konten Edukasi'],

            // -----------------------------
            // ARTISTIC + ENTERPRISING (AE)
            // -----------------------------
            ['code' => 'AE', 'job_name' => 'Creative Director'],
            ['code' => 'AE', 'job_name' => 'Brand Strategist'],
            ['code' => 'AE', 'job_name' => 'Pengusaha Produk Kreatif'],
            ['code' => 'AE', 'job_name' => 'Fashion Entrepreneur'],
            ['code' => 'AE', 'job_name' => 'Manajer Event Kreatif'],
            ['code' => 'AE', 'job_name' => 'Creative Marketing Specialist'],

            // -----------------------------
            // ARTISTIC + CONVENTIONAL (AC)
            // -----------------------------
            ['code' => 'AC', 'job_name' => 'Editor Foto'],
            ['code' => 'AC', 'job_name' => 'Layout Artist'],
            ['code' => 'AC', 'job_name' => 'Typography Specialist'],
            ['code' => 'AC', 'job_name' => 'Pengolah Arsip Visual'],
            ['code' => 'AC', 'job_name' => 'Editor Buku'],
            ['code' => 'AC', 'job_name' => 'Desain Template Publikasi'],

            // -----------------------------
            // SOCIAL + REALISTIC (SR)
            // -----------------------------
            ['code' => 'SR', 'job_name' => 'Terapis Okupasi Asisten'],
            ['code' => 'SR', 'job_name' => 'Instruktur Keterampilan Teknik'],
            ['code' => 'SR', 'job_name' => 'Petugas Kesehatan Lapangan'],
            ['code' => 'SR', 'job_name' => 'Pembimbing Remaja'],
            ['code' => 'SR', 'job_name' => 'Fisioterapis'],
            ['code' => 'SR', 'job_name' => 'Pelatih Fitness'],

            // -----------------------------
            // SOCIAL + INVESTIGATIVE (SI)
            // -----------------------------
            ['code' => 'SI', 'job_name' => 'Konselor Akademik'],
            ['code' => 'SI', 'job_name' => 'Peneliti Pendidikan'],
            ['code' => 'SI', 'job_name' => 'Ahli Kesehatan Masyarakat'],
            ['code' => 'SI', 'job_name' => 'Psikometrik Asisten'],
            ['code' => 'SI', 'job_name' => 'Konsultan Sekolah'],
            ['code' => 'SI', 'job_name' => 'Social Program Evaluator'],

            // -----------------------------
            // SOCIAL + ARTISTIC (SA)
            // -----------------------------
            ['code' => 'SA', 'job_name' => 'Art Counselor'],
            ['code' => 'SA', 'job_name' => 'Guru Musik'],
            ['code' => 'SA', 'job_name' => 'Pelatih Seni Pertunjukan'],
            ['code' => 'SA', 'job_name' => 'Pendamping Terapi Seni'],
            ['code' => 'SA', 'job_name' => 'Kreator Program Anak'],
            ['code' => 'SA', 'job_name' => 'Content Creator Edukasi Seni'],

            // -----------------------------
            // SOCIAL + ENTERPRISING (SE)
            // -----------------------------
            ['code' => 'SE', 'job_name' => 'Sales Trainer'],
            ['code' => 'SE', 'job_name' => 'Public Relations Specialist'],
            ['code' => 'SE', 'job_name' => 'Business Development'],
            ['code' => 'SE', 'job_name' => 'Motivator / Coach'],
            ['code' => 'SE', 'job_name' => 'HR Recruiter'],
            ['code' => 'SE', 'job_name' => 'Customer Success Manager'],

            // -----------------------------
            // SOCIAL + CONVENTIONAL (SC)
            // -----------------------------
            ['code' => 'SC', 'job_name' => 'Petugas Administrasi Klinik'],
            ['code' => 'SC', 'job_name' => 'Staf BPJS'],
            ['code' => 'SC', 'job_name' => 'Customer Service'],
            ['code' => 'SC', 'job_name' => 'Admin Sekolah'],
            ['code' => 'SC', 'job_name' => 'Petugas Front Office'],
            ['code' => 'SC', 'job_name' => 'Data Admin Kesehatan'],

            // -----------------------------
            // ENTERPRISING + REALISTIC (ER)
            // -----------------------------
            ['code' => 'ER', 'job_name' => 'Supervisor Operasional'],
            ['code' => 'ER', 'job_name' => 'Pengusaha Produk Teknik'],
            ['code' => 'ER', 'job_name' => 'Kontraktor Bangunan'],
            ['code' => 'ER', 'job_name' => 'Franchise Owner'],
            ['code' => 'ER', 'job_name' => 'Sales Engineer'],
            ['code' => 'ER', 'job_name' => 'Manajer Bengkel'],

            // -----------------------------
            // ENTERPRISING + INVESTIGATIVE (EI)
            // -----------------------------
            ['code' => 'EI', 'job_name' => 'Manajer Bisnis Data'],
            ['code' => 'EI', 'job_name' => 'Konsultan Strategi'],
            ['code' => 'EI', 'job_name' => 'Analis Pasar'],
            ['code' => 'EI', 'job_name' => 'Manajer Tech Startup'],
            ['code' => 'EI', 'job_name' => 'Financial Planner'],
            ['code' => 'EI', 'job_name' => 'Manajer Riset Pasar'],

            // -----------------------------
            // ENTERPRISING + ARTISTIC (EA)
            // -----------------------------
            ['code' => 'EA', 'job_name' => 'Brand Manager'],
            ['code' => 'EA', 'job_name' => 'Creative Marketing Supervisor'],
            ['code' => 'EA', 'job_name' => 'Content Director'],
            ['code' => 'EA', 'job_name' => 'Pengusaha Seni'],
            ['code' => 'EA', 'job_name' => 'Manajer Fashion Retail'],
            ['code' => 'EA', 'job_name' => 'Creative PR Specialist'],

            // -----------------------------
            // ENTERPRISING + SOCIAL (ES)
            // -----------------------------
            ['code' => 'ES', 'job_name' => 'HR Manager'],
            ['code' => 'ES', 'job_name' => 'Trainer SDM'],
            ['code' => 'ES', 'job_name' => 'Relationship Manager'],
            ['code' => 'ES', 'job_name' => 'Event Organizer'],
            ['code' => 'ES', 'job_name' => 'Community Manager'],
            ['code' => 'ES', 'job_name' => 'Supervisor Layanan'],

            // -----------------------------
            // ENTERPRISING + CONVENTIONAL (EC)
            // -----------------------------
            ['code' => 'EC', 'job_name' => 'Supervisor Administrasi'],
            ['code' => 'EC', 'job_name' => 'Manager Finansial'],
            ['code' => 'EC', 'job_name' => 'Pengawas Logistik'],
            ['code' => 'EC', 'job_name' => 'Auditor Operasional'],
            ['code' => 'EC', 'job_name' => 'Control Analyst'],
            ['code' => 'EC', 'job_name' => 'Procurement Officer'],

            // -----------------------------
            // CONVENTIONAL + REALISTIC (CR)
            // -----------------------------
            ['code' => 'CR', 'job_name' => 'Inventory Control'],
            ['code' => 'CR', 'job_name' => 'Admin Teknisi'],
            ['code' => 'CR', 'job_name' => 'Data Processor'],
            ['code' => 'CR', 'job_name' => 'Asset Management Staff'],
            ['code' => 'CR', 'job_name' => 'Logistic Admin'],
            ['code' => 'CR', 'job_name' => 'Operator Komputer Industri'],

            // -----------------------------
            // CONVENTIONAL + INVESTIGATIVE (CI)
            // -----------------------------
            ['code' => 'CI', 'job_name' => 'Data Analyst'],
            ['code' => 'CI', 'job_name' => 'Quality Documentation Analyst'],
            ['code' => 'CI', 'job_name' => 'Analis Perpajakan'],
            ['code' => 'CI', 'job_name' => 'Compliance Analyst'],
            ['code' => 'CI', 'job_name' => 'Administrasi Hasil Riset'],
            ['code' => 'CI', 'job_name' => 'Data Quality Specialist'],

            // -----------------------------
            // CONVENTIONAL + ARTISTIC (CA)
            // -----------------------------
            ['code' => 'CA', 'job_name' => 'Editor Media'],
            ['code' => 'CA', 'job_name' => 'Penyusun Layout Majalah'],
            ['code' => 'CA', 'job_name' => 'Proofreader'],
            ['code' => 'CA', 'job_name' => 'Editor Naskah'],
            ['code' => 'CA', 'job_name' => 'Penyusun Arsip Digital'],
            ['code' => 'CA', 'job_name' => 'Desainer Template'],

            // -----------------------------
            // CONVENTIONAL + SOCIAL (CS)
            // -----------------------------
            ['code' => 'CS', 'job_name' => 'Customer Support'],
            ['code' => 'CS', 'job_name' => 'Staf Administrasi Kesehatan'],
            ['code' => 'CS', 'job_name' => 'Front Desk Officer'],
            ['code' => 'CS', 'job_name' => 'Admin HR'],
            ['code' => 'CS', 'job_name' => 'Call Center Officer'],
            ['code' => 'CS', 'job_name' => 'Staf Layanan Publik'],

            // -----------------------------
            // CONVENTIONAL + ENTERPRISING (CE)
            // -----------------------------
            ['code' => 'CE', 'job_name' => 'Supervisor Administrasi'],
            ['code' => 'CE', 'job_name' => 'Procurement Staff'],
            ['code' => 'CE', 'job_name' => 'Manager Back Office'],
            ['code' => 'CE', 'job_name' => 'Auditor Internal'],
            ['code' => 'CE', 'job_name' => 'Staff Keuangan'],
            ['code' => 'CE', 'job_name' => 'Logistic Coordinator'],
        ];

        RiasecJob::insert($data);
    }
}
