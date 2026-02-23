<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiasecJob; // Daftar pekerjaan 1 (single indikator)
use App\Models\Riasec2Job; // Daftar pekerjaan 2 (kombinasi 2 indikator)
use App\Models\Riasec3Combination; // Daftar pekerjaan 3 (kombinasi 3 indikator)

class RiasecController extends Controller
{
    /**
     * Fungsi untuk mendapatkan rekomendasi pekerjaan berdasarkan nilai RIASEC user
     *
     * @param array $userScores ['R'=>90, 'I'=>80, 'A'=>80, 'S'=>70, 'E'=>60, 'C'=>50]
     * @return \Illuminate\Support\Collection
     */
    public function getRecommendations(array $userScores)
    {
        // 1️⃣ Urutkan indikator berdasarkan nilai tertinggi
        arsort($userScores);
        $indicators = array_keys($userScores);
        $values = array_values($userScores);

        $primary = $indicators[0];
        $primaryValue = $values[0];

        $secondary = $indicators[1];
        $secondaryValue = $values[1];

        $tertiary = $indicators[2];
        $tertiaryValue = $values[2];

        // 2️⃣ Ambil 4 pekerjaan dari indikator utama (daftar pekerjaan 1)
        $primaryJobs = RiasecJob::where('code', $primary)
            ->limit(4)
            ->get();

        // 3️⃣ Ambil 4 pekerjaan dari kombinasi 2 indikator teratas (daftar pekerjaan 2)
        $top2Combo = $primary . $secondary; // misal 'RA'
        $combo2Jobs = Riasec2Job::where('code', $top2Combo)
            ->limit(4)
            ->get();

        // 4️⃣ Cek kondisi khusus: nilai kedua dan ketiga sama → ambil kombinasi 3 indikator
        $combo3Jobs = collect();
        if($secondaryValue == $tertiaryValue){
            $top3Combo = $primary . $secondary . $tertiary; // misal 'RIA'
            $combo3Jobs = Riasec3Combination::where('code', $top3Combo)
                ->limit(4)
                ->get();
        }

        // 5️⃣ Cek kondisi khusus: nilai tertinggi sama → ambil pekerjaan masing-masing indikator
        if($primaryValue == $secondaryValue){
            $primaryJobs = RiasecJob::whereIn('code', [$primary, $secondary])
                ->limit(8) // ambil 4 dari masing-masing
                ->get();
            // tetap ambil kombinasi 2 indikator dari daftar pekerjaan 2
            $top2Combo = $primary . $secondary;
            $combo2Jobs = Riasec2Job::where('code', $top2Combo)
                ->limit(4)
                ->get();
            // abaikan kombinasi 3
            $combo3Jobs = collect();
        }

        // 6️⃣ Gabungkan semua rekomendasi
        $finalJobs = $primaryJobs->merge($combo2Jobs)->merge($combo3Jobs);

        return $finalJobs;
    }
}
