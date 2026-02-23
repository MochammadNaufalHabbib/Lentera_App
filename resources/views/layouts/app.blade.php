<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LENTERA') }} - @yield('page_title')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
        }

        .app-shell {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .app-nav {
            position: sticky;
            top: 0;
            z-index: 40;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 0.75rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .app-nav-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .app-nav-logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 700;
            font-size: 1.25rem;
            color: #4f46e5;
        }

        .app-nav-logo svg {
            width: 32px;
            height: 32px;
        }

        .app-nav-title {
            font-weight: 600;
            color: #1e293b;
            padding-left: 1rem;
            border-left: 2px solid #e2e8f0;
        }

        .app-nav-burger {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: none;
            background: #eef2ff;
            color: #4f46e5;
            font-size: 1.2rem;
            display: grid;
            place-items: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .app-nav-burger:hover {
            background: #e0e7ff;
            transform: scale(1.05);
        }

        .app-nav-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
            padding: 0.35rem 0.75rem;
            border-radius: 999px;
            background: linear-gradient(135deg, #eef2ff 0%, #e0e7ff 100%);
            color: #4f46e5;
            font-weight: 600;
            transition: all 0.2s;
        }

        .app-nav-user:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
        }

        .app-nav-user img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #c7d2fe;
        }

        .app-nav-user .avatar-initials {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.875rem;
            border: 2px solid #c7d2fe;
        }

        .sidebar-flyout {
            position: fixed;
            inset: 0;
            display: none;
            z-index: 50;
        }

        .sidebar-flyout.active {
            display: block;
        }

        .sidebar-overlay {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.5);
            backdrop-filter: blur(4px);
        }

        .sidebar-panel {
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 100%;
            background: #ffffff;
            box-shadow: 20px 0 40px rgba(15, 23, 42, 0.15);
            padding: 1.5rem;
            transform: translateX(-100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow-y: auto;
        }

        .sidebar-flyout.active .sidebar-panel {
            transform: translateX(0);
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .sidebar-header h4 {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.1rem;
        }

        .sidebar-close {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            border: none;
            background: #f1f5f9;
            color: #64748b;
            cursor: pointer;
            display: grid;
            place-items: center;
            transition: all 0.2s;
        }

        .sidebar-close:hover {
            background: #e2e8f0;
            color: #1e293b;
        }

        .sidebar-item {
            padding: 0.85rem 1rem;
            border-radius: 12px;
            font-weight: 600;
            color: #64748b;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .sidebar-item:hover {
            background: linear-gradient(135deg, #eef2ff 0%, #e0e7ff 100%);
            color: #4f46e5;
        }

        .sidebar-item.active {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
            color: white;
        }

        .sidebar-item svg {
            width: 20px;
            height: 20px;
        }

        .sidebar-item + .sidebar-item {
            margin-top: 0.25rem;
        }

        .sidebar-divider {
            height: 1px;
            background: #e2e8f0;
            margin: 1rem 0;
        }

        /* Main Content Area */
        main {
            flex: 1;
            padding: 1.5rem;
            background: #f8fafc;
        }

        /* Smooth transitions */
        * {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
    </style>
</head>

<body class="font-sans antialiased">

    @php
        $pageTitle = trim($__env->yieldContent('page_title')) ?: 'Dashboard';
        $user = auth()->user();
        $userInitials = $user ? strtoupper(substr($user->name, 0, 2)) : 'U';
    @endphp

    <div class="app-shell">
        <nav class="app-nav">
            <div class="app-nav-left">
                <button class="app-nav-burger" type="button" onclick="window.toggleSidebar()">
                    ☰
                </button>
                
                <div class="app-nav-logo">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    <span>Lentera</span>
                </div>
                
                <span class="app-nav-title hidden md:block">{{ $pageTitle }}</span>
            </div>
            
            <div class="app-nav-user" onclick="window.location.href='{{ route('profile') }}'">
                @if($user && $user->photo)
                    <img src="{{ asset('storage/' . $user->photo) }}" alt="Profil {{ $user->name }}">
                @else
                    <div class="avatar-initials">{{ $userInitials }}</div>
                @endif
                <span class="hidden sm:block">{{ $user->name ?? 'User' }}</span>
            </div>
        </nav>

        <div id="sidebar-flyout" class="sidebar-flyout">
            <div class="sidebar-overlay" onclick="window.toggleSidebar()"></div>
            <div class="sidebar-panel">
                <div class="sidebar-header">
                    <h4>Menu Navigasi</h4>
                    <button class="sidebar-close" onclick="window.toggleSidebar()">✕</button>
                </div>
                
                @hasSection('sidebar')
                    @yield('sidebar')
                @else
                    <div class="sidebar-item" onclick="window.location.href='{{ route('dashboard') }}'">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('test.interest') }}'">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Tes Minat & Bakat
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('test.kepribadian') }}'">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Tes Kepribadian
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('history') }}'">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Riwayat Tes
                    </div>

                    <div class="sidebar-divider"></div>

                    <div class="sidebar-item" onclick="window.location.href='{{ route('profile') }}'">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Profil Saya
                    </div>

                    <div class="sidebar-divider"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="sidebar-item" style="width: 100%; text-align: left; border: none; background: transparent; color: #ef4444;">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <main class="flex-1">
            @yield('content')
        </main>
    </div>

    <script>
        window.toggleSidebar = function () {
            const flyout = document.getElementById('sidebar-flyout');
            if (!flyout) return;
            flyout.classList.toggle('active');
        };

        // Close sidebar on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const flyout = document.getElementById('sidebar-flyout');
                if (flyout && flyout.classList.contains('active')) {
                    flyout.classList.remove('active');
                }
            }
        });
    </script>

</body>
</html>
