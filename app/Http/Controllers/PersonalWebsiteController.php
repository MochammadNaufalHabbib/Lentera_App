<?php

namespace App\Http\Controllers;

use App\Models\PersonalProfile;
use App\Models\PersonalSkill;
use App\Models\PersonalEducation;
use App\Models\PersonalPortfolio;
use Illuminate\Http\Request;

class PersonalWebsiteController extends Controller
{
    /**
     * Display the personal website.
     */
    public function index()
    {
        // Get the first profile (or create demo data for testing)
        $profile = PersonalProfile::first();
        $skills = PersonalSkill::orderBy('order')->get();
        $educations = PersonalEducation::orderBy('order')->get();
        $portfolios = PersonalPortfolio::orderBy('order')->get();

        // If no profile exists, use demo data for preview
        if (!$profile) {
            $profile = (object) [
                'name' => 'Nama Anda',
                'tagline' => 'Tagline Anda',
                'about' => 'Tuliskan deskripsi tentang diri Anda di sini. Ceritakan minat, keahlian, dan pengalaman Anda.',
                'email' => 'email@anda.com',
                'phone' => '+62 812 3456 7890',
                'address' => 'Jakarta, Indonesia',
                'linkedin' => 'https://linkedin.com/in/anda',
                'github' => 'https://github.com/anda',
                'instagram' => 'https://instagram.com/anda',
                'photo' => null,
            ];
            
            // Empty collections
            $skills = collect();
            $educations = collect();
            $portfolios = collect();
        }

        return view('personal.index', compact('profile', 'skills', 'educations', 'portfolios'));
    }
}
