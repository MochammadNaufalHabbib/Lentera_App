@extends('layouts.app')

@section('page_title', 'Histori Tes')

@section('content')

@php
    $records = ($tests ?? $histories ?? collect())->sortByDesc('created_at');
@endphp

<style>
    .history-shell {
        font-family: 'Poppins', sans-serif;
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .history-hero {
        background: linear-gradient(135deg, #4338ca, #1f1b4b);
        border-radius: 28px;
        padding: 2.75rem;
        color: #fff;
        box-shadow: 0 25px 60px rgba(31, 27, 75, 0.35);
    }
    .history-hero h1 {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        margin-bottom: .75rem;
    }
    .history-hero p {
        color: rgba(255,255,255,0.8);
        max-width: 540px;
    }
    .history-count {
        margin-top: 1.5rem;
        display: inline-flex;
        align-items: center;
        gap: .75rem;
        background: rgba(255,255,255,0.15);
        border-radius: 999px;
        padding: .5rem 1.25rem;
        font-weight: 600;
    }
    .history-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.25rem;
    }
    .history-card {
        background: #fff;
        border-radius: 24px;
        padding: 1.75rem;
        box-shadow: 0 20px 45px rgba(15,23,42,0.08);
        border: 1px solid rgba(226,232,240,0.8);
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .history-card h4 {
        font-size: 1.15rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: .25rem;
    }
    .history-date {
        font-size: .9rem;
        color: #64748b;
    }
    .score-bar {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: .65rem;
    }
    .score-pill {
        background: #f8fafc;
        border-radius: 14px;
        padding: .65rem .85rem;
        border: 1px solid #e2e8f0;
        display: flex;
        flex-direction: column;
        gap: .25rem;
    }
    .score-pill span {
        font-size: .75rem;
        color: #94a3b8;
    }
    .score-pill strong {
        font-size: 1.1rem;
        color: #0f172a;
    }
    .rekom-title {
        font-weight: 600;
        color: #475569;
    }
    .rekom-list {
        display: flex;
        flex-wrap: wrap;
        gap: .6rem;
    }
    .rekom-list li {
        list-style: none;
        background: #eef2ff;
        color: #3730a3;
        font-weight: 600;
        border-radius: 12px;
        padding: .4rem .85rem;
        border: 1px solid rgba(55,48,163,0.2);
        font-size: .85rem;
    }
    .empty-state {
        background: #fff;
        border-radius: 24px;
        padding: 2.5rem;
        text-align: center;
        border: 1px dashed #cbd5f5;
        color: #475569;
        box-shadow: 0 20px 35px rgba(15,23,42,0.05);
    }
</style>

<div class="history-shell">
    <div class="history-hero">
        <h1>Histori Tes Kamu</h1>
        <p>Lihat rekam jejak penilaian RIASEC-mu dan bandingkan rekomendasi karier yang pernah diberikan.</p>
        <div class="history-count">
            <span>📊</span>
            <span>{{ $records->count() }} tes tersimpan</span>
        </div>
    </div>

    @if($records->isEmpty())
        <div class="empty-state">
            <h3 class="text-2xl font-semibold mb-2 text-slate-800">Belum ada histori</h3>
            <p>Kerjakan Tes Minat &amp; Bakat untuk melihat hasilnya di sini.</p>
        </div>
    @else
        <div class="history-grid">
            @foreach($records as $record)
                @php
                    $scores = [
                        'R (Realistic)' => $record->R,
                        'I (Investigative)' => $record->I,
                        'A (Artistic)' => $record->A,
                        'S (Social)' => $record->S,
                        'E (Enterprising)' => $record->E,
                        'C (Conventional)' => $record->C,
                    ];

                    $recommendations = $record->recommendations;
                    if (is_string($recommendations)) {
                        $recommendations = json_decode($recommendations, true) ?: [];
                    }
                @endphp

                <div class="history-card">
                    <div>
                        <h4>{{ $record->primary_type }} + {{ $record->secondary_type }}</h4>
                        <div class="history-date">{{ $record->created_at->format('d M Y · H:i') }}</div>
                    </div>

                    <div class="score-bar">
                        @foreach($scores as $label => $value)
                            <div class="score-pill">
                                <span>{{ $label }}</span>
                                <strong>{{ $value }}</strong>
                            </div>
                        @endforeach
                    </div>

                    <div>
                        <div class="rekom-title mb-2">Rekomendasi Pekerjaan</div>
                        <ul class="rekom-list">
                            @forelse($recommendations as $job)
                                <li>{{ $job }}</li>
                            @empty
                                <li>Tidak ada rekomendasi</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection