<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        $jobs = [

            // R — Realistic
            ['code' => 'R', 'job_name' => 'Mekanik Mobil'],
            ['code' => 'R', 'job_name' => 'Teknisi Mesin'],
            ['code' => 'R', 'job_name' => 'Operator Pabrik'],
            ['code' => 'R', 'job_name' => 'Teknisi AC & Refrigerasi'],
            ['code' => 'R', 'job_name' => 'Montir Motor'],
            ['code' => 'R', 'job_name' => 'Petani Modern'],
            ['code' => 'R', 'job_name' => 'Sopir Alat Berat'],
            ['code' => 'R', 'job_name' => 'Ahli Konstruksi'],
            ['code' => 'R', 'job_name' => 'Teknisi Listrik'],
            ['code' => 'R', 'job_name' => 'Welder / Tukang Las'],

            // I — Investigative
            ['code' => 'I', 'job_name' => 'Analis Data'],
            ['code' => 'I', 'job_name' => 'Analis Laboratorium'],
            ['code' => 'I', 'job_name' => 'Peneliti Sains'],
            ['code' => 'I', 'job_name' => 'Ahli Bioteknologi'],
            ['code' => 'I', 'job_name' => 'Programmer / Software Engineer'],
            ['code' => 'I', 'job_name' => 'Analis Sistem'],
            ['code' => 'I', 'job_name' => 'Analis Keamanan Siber'],
            ['code' => 'I', 'job_name' => 'Ahli Statistik'],
            ['code' => 'I', 'job_name' => 'Quality Control Scientist'],
            ['code' => 'I', 'job_name' => 'Ahli Forensik Digital'],

            // A — Artistic
            ['code' => 'A', 'job_name' => 'Desainer Grafis'],
            ['code' => 'A', 'job_name' => 'Seniman / Pelukis'],
            ['code' => 'A', 'job_name' => 'Musisi / Komposer'],
            ['code' => 'A', 'job_name' => 'Content Creator'],
            ['code' => 'A', 'job_name' => 'Videografer'],
            ['code' => 'A', 'job_name' => 'UI/UX Designer'],
            ['code' => 'A', 'job_name' => 'Penulis Kreatif'],
            ['code' => 'A', 'job_name' => 'Animator'],
            ['code' => 'A', 'job_name' => 'Fashion Designer'],
            ['code' => 'A', 'job_name' => 'Fotografer'],

            // S — Social
            ['code' => 'S', 'job_name' => 'Guru / Pengajar'],
            ['code' => 'S', 'job_name' => 'Konselor'],
            ['code' => 'S', 'job_name' => 'Psikolog'],
            ['code' => 'S', 'job_name' => 'Perawat'],
            ['code' => 'S', 'job_name' => 'Pekerja Sosial'],
            ['code' => 'S', 'job_name' => 'Pelatih / Coach'],
            ['code' => 'S', 'job_name' => 'Pembina Asrama / Pesantren'],
            ['code' => 'S', 'job_name' => 'Instruktur Pelatihan'],
            ['code' => 'S', 'job_name' => 'Tutor Privat'],
            ['code' => 'S', 'job_name' => 'Bidan'],

            // E — Enterprising
            ['code' => 'E', 'job_name' => 'Pengusaha / Entrepreneur'],
            ['code' => 'E', 'job_name' => 'Marketing'],
            ['code' => 'E', 'job_name' => 'Sales Executive'],
            ['code' => 'E', 'job_name' => 'Manajer Proyek'],
            ['code' => 'E', 'job_name' => 'Public Relations'],
            ['code' => 'E', 'job_name' => 'Supervisor'],
            ['code' => 'E', 'job_name' => 'Event Organizer'],
            ['code' => 'E', 'job_name' => 'Konsultan Bisnis'],
            ['code' => 'E', 'job_name' => 'Manajer Operasional'],
            ['code' => 'E', 'job_name' => 'Broker Properti'],

            // C — Conventional
            ['code' => 'C', 'job_name' => 'Administrasi Perkantoran'],
            ['code' => 'C', 'job_name' => 'Akuntan'],
            ['code' => 'C', 'job_name' => 'Staff Gudang'],
            ['code' => 'C', 'job_name' => 'Data Entry'],
            ['code' => 'C', 'job_name' => 'Auditor'],
            ['code' => 'C', 'job_name' => 'Sekretaris'],
            ['code' => 'C', 'job_name' => 'Kasir'],
            ['code' => 'C', 'job_name' => 'Staff Logistik'],
            ['code' => 'C', 'job_name' => 'Arsiparis'],
            ['code' => 'C', 'job_name' => 'Administrasi Keuangan'],

        ];

        Job::insert($jobs);
    }
}
