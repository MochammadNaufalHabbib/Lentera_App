<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-sm shadow-sm z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold text-indigo-600">{{ $profile->name ?? 'MyPortfolio' }}</a>
            <div class="hidden md:flex space-x-8">
                <a href="#about" class="text-gray-700 hover:text-indigo-600 transition">Tentang Saya</a>
                <a href="#skills" class="text-gray-700 hover:text-indigo-600 transition">Skills</a>
                <a href="#education" class="text-gray-700 hover:text-indigo-600 transition">Pendidikan</a>
                <a href="#portfolio" class="text-gray-700 hover:text-indigo-600 transition">Portofolio</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg min-h-screen flex items-center justify-center pt-20">
        <div class="text-center text-white px-4">
            @if($profile && $profile->photo)
                <img src="{{ asset('storage/' . $profile->photo) }}" alt="{{ $profile->name }}" 
                     class="w-40 h-40 rounded-full mx-auto mb-6 border-4 border-white shadow-xl object-cover">
            @else
                <div class="w-40 h-40 rounded-full mx-auto mb-6 border-4 border-white shadow-xl bg-indigo-300 flex items-center justify-center">
                    <span class="text-5xl font-bold">{{ substr($profile->name ?? 'P', 0, 1) }}</span>
                </div>
            @endif
            
            <h1 class="text-4xl md:text-5xl font-bold mb-2">{{ $profile->name ?? 'Nama Anda' }}</h1>
            <p class="text-xl md:text-2xl text-indigo-100 mb-6">{{ $profile->tagline ?? 'Tagline Anda' }}</p>
            
            <div class="flex justify-center gap-4">
                <a href="#about" class="px-6 py-3 bg-white text-indigo-600 rounded-full font-semibold hover:bg-gray-100 transition">
                    Pelajari Lebih Lanjut
                </a>
                <a href="#contact" class="px-6 py-3 bg-indigo-800 text-white rounded-full font-semibold hover:bg-indigo-900 transition">
                    Hubungi Saya
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Tentang Saya</h2>
            <div class="max-w-3xl mx-auto">
                <p class="text-gray-600 text-lg leading-relaxed">
                    {{ $profile->about ?? 'Tuliskan deskripsi tentang diri Anda di sini...' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Skills</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($skills as $skill)
                    <div class="bg-white rounded-xl p-6 card-hover shadow-md">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="font-semibold text-gray-800">{{ $skill->name }}</h3>
                            <span class="text-indigo-600 font-bold">{{ $skill->level }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-2 rounded-full" style="width: {{ $skill->level }}%"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center col-span-full">Belum ada skills.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Pendidikan</h2>
            <div class="space-y-6 max-w-3xl mx-auto">
                @forelse($educations as $edu)
                    <div class="bg-gray-50 rounded-xl p-6 card-hover">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-bold text-xl text-gray-800">{{ $edu->institution }}</h3>
                                <p class="text-indigo-600">{{ $edu->degree }} - {{ $edu->major ?? '' }}</p>
                            </div>
                            <span class="text-gray-500">{{ $edu->start_year }} - {{ $edu->is_current ? 'Sekarang' : $edu->end_year }}</span>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">Belum ada data pendidikan.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Portofolio</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($portfolios as $portfolio)
                    <div class="bg-white rounded-xl overflow-hidden card-hover shadow-md">
                        @if($portfolio->image)
                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                                <span class="text-white text-4xl">📁</span>
                            </div>
                        @endif
                        <div class="p-6">
                            <h3 class="font-bold text-lg text-gray-800 mb-2">{{ $portfolio->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ $portfolio->description }}</p>
                            @if($portfolio->link)
                                <a href="{{ $portfolio->link }}" target="_blank" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                    Lihat Projekt →
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center col-span-full">Belum ada portofolio.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Kontak</h2>
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <h3 class="font-bold text-xl text-gray-800 mb-4">Informasi Kontak</h3>
                    
                    @if($profile)
                        <div class="space-y-4">
                            @if($profile->email)
                                <div class="flex items-center gap-3">
                                    <span class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">✉️</span>
                                    <span class="text-gray-600">{{ $profile->email }}</span>
                                </div>
                            @endif
                            
                            @if($profile->phone)
                                <div class="flex items-center gap-3">
                                    <span class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">📱</span>
                                    <span class="text-gray-600">{{ $profile->phone }}</span>
                                </div>
                            @endif
                            
                            @if($profile->address)
                                <div class="flex items-center gap-3">
                                    <span class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">📍</span>
                                    <span class="text-gray-600">{{ $profile->address }}</span>
                                </div>
                            @endif
                            
                            <!-- Social Links -->
                            <div class="flex gap-3 pt-4">
                                @if($profile->linkedin)
                                    <a href="{{ $profile->linkedin }}" target="_blank" class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition">
                                        in
                                    </a>
                                @endif
                                
                                @if($profile->github)
                                    <a href="{{ $profile->github }}" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-gray-900 transition">
                                        GH
                                    </a>
                                @endif
                                
                                @if($profile->instagram)
                                    <a href="{{ $profile->instagram }}" target="_blank" class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center text-white hover:bg-pink-600 transition">
                                        IG
                                    </a>
                                @endif
                            </div>
                        </div>
                    @else
                        <p class="text-gray-500">Belum ada informasi kontak.</p>
                    @endif
                </div>

                <!-- Contact Form -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <form>
                        <div class="space-y-4">
                            <input type="text" placeholder="Nama Anda" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none">
                            <input type="email" placeholder="Email Anda" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none">
                            <textarea rows="4" placeholder="Pesan Anda" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none"></textarea>
                            <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-gray-400">© {{ date('Y') }} {{ $profile->name ?? 'Personal Website' }}. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
