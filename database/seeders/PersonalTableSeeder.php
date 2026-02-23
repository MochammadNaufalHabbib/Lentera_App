<?php

namespace Database\Seeders;

use App\Models\PersonalProfile;
use App\Models\PersonalSkill;
use App\Models\PersonalEducation;
use App\Models\PersonalPortfolio;
use Illuminate\Database\Seeder;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Profile
        $profile = PersonalProfile::create([
            'name' => 'John Doe',
            'tagline' => 'Web Developer & Designer',
            'about' => 'Saya adalah seorang web developer dan designer yang passionate dalam menciptakan pengalaman pengguna yang luar biasa. Saya memiliki pengalaman dalam membangun berbagai proyek web menggunakan teknologi modern seperti Laravel, React, dan Tailwind CSS.',
            'email' => 'johndoe@email.com',
            'phone' => '+62 812 3456 7890',
            'address' => 'Jakarta, Indonesia',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'github' => 'https://github.com/johndoe',
            'instagram' => 'https://instagram.com/johndoe',
        ]);

        // Create Skills
        $skills = [
            ['name' => 'HTML & CSS', 'level' => 95, 'category' => 'Programming', 'order' => 1],
            ['name' => 'JavaScript', 'level' => 90, 'category' => 'Programming', 'order' => 2],
            ['name' => 'PHP (Laravel)', 'level' => 85, 'category' => 'Programming', 'order' => 3],
            ['name' => 'React', 'level' => 80, 'category' => 'Programming', 'order' => 4],
            ['name' => 'UI/UX Design', 'level' => 85, 'category' => 'Design', 'order' => 5],
            ['name' => 'Figma', 'level' => 75, 'category' => 'Design', 'order' => 6],
            ['name' => 'Database Design', 'level' => 80, 'category' => 'Database', 'order' => 7],
            ['name' => 'Git', 'level' => 85, 'category' => 'Tools', 'order' => 8],
        ];

        foreach ($skills as $skill) {
            PersonalSkill::create($skill);
        }

        // Create Educations (table name: personal_educations)
        $educations = [
            [
                'institution' => 'Universitas Indonesia',
                'degree' => 'S1 Teknik Informatika',
                'major' => 'Teknik Informatika',
                'start_year' => 2018,
                'end_year' => 2022,
                'is_current' => false,
                'order' => 1
            ],
            [
                'institution' => 'SMA Negeri 1 Jakarta',
                'degree' => 'SMA',
                'major' => 'IPA',
                'start_year' => 2015,
                'end_year' => 2018,
                'is_current' => false,
                'order' => 2
            ],
        ];

        foreach ($educations as $edu) {
            PersonalEducation::create($edu);
        }

        // Create Portfolios
        $portfolios = [
            [
                'title' => 'E-Commerce Website',
                'description' => 'Website e-commerce lengkap dengan fitur keranjang belanja, pembayaran, dan manajemen produk.',
                'category' => 'Web Development',
                'link' => 'https://example.com/project1',
                'order' => 1
            ],
            [
                'title' => 'Portfolio App',
                'description' => 'Aplikasi portfolio pribadi dengan desain modern dan responsif.',
                'category' => 'Web Development',
                'link' => 'https://example.com/project2',
                'order' => 2
            ],
            [
                'title' => 'Dashboard Admin',
                'description' => 'Sistem dashboard admin untuk manajemen data dan analytics.',
                'category' => 'Web Development',
                'link' => 'https://example.com/project3',
                'order' => 3
            ],
        ];

        foreach ($portfolios as $portfolio) {
            PersonalPortfolio::create($portfolio);
        }
    }
}
