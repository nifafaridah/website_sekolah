<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin MTS Alhidayah')</title>

    

    {{-- CSS utama --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/school.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables-local.css') }}">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f8f5;
            color: #24362b;
        }

        .admin-wrap {
            min-height: 100vh;
        }

        /* Sidebar */
        .admin-sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            box-sizing: border-box;
            width: 255px;
            padding: 18px 12px;
            background: linear-gradient(180deg, #075f2a, #003e1c);
        }

        .admin-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            height: 64px;
            margin-bottom: 16px;
            padding: 0 10px;
            color: #fff;
            text-decoration: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .admin-brand img {
            width: 44px;
            height: 44px;
            padding: 3px;
            object-fit: contain;
            background: #fff;
            border-radius: 10px;
        }

        .admin-brand b,
        .admin-brand small {
            display: block;
        }

        .admin-brand b {
            font-size: 15px;
        }

        .admin-brand small {
            margin-top: 3px;
            color: #d7f4df;
            font-size: 11px;
        }

        /* Menu navigasi */
        .admin-nav a,
        .admin-nav button {
            display: flex;
            align-items: center;
            box-sizing: border-box;
            width: 100%;
            gap: 12px;
            margin: 4px 0;
            padding: 12px 13px;
            border: 0;
            border-radius: 9px;
            background: transparent;
            color: #fff;
            font-size: 14px;
            text-align: left;
            text-decoration: none;
            cursor: pointer;
        }

        .admin-nav a:hover,
        .admin-nav a.active,
        .admin-nav button:hover {
            background: #0a9140;
        }

        .admin-nav i {
            width: 25px;
            color: #f0e500;
            font-size: 21px;
            text-align: center;
        }

        .admin-nav form {
            margin: 0;
        }

        /* Konten utama */
        .admin-content {
            min-height: 100vh;
            margin-left: 255px;
        }

        .admin-top {
            position: sticky;
            top: 0;
            z-index: 900;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            height: 68px;
            padding: 0 28px;
            border-bottom: 1px solid #e2ece5;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .admin-top-title {
            color: #31533d;
            font-weight: 700;
        }

        .admin-user {
            margin-left: auto;
            color: #31533d;
            font-weight: 600;
        }

        .admin-page {
            box-sizing: border-box;
            padding: 28px;
        }

        .admin-footer {
            margin-left: 255px;
            padding: 18px 28px;
            border-top: 1px solid #e2ece5;
            background: #fff;
            color: #78877f;
            font-size: 12px;
        }

        /* Dashboard */
        .dashboard-hero {
            position: relative;
            overflow: hidden;
            margin-bottom: 22px;
            padding: 28px;
            border-radius: 18px;
            background: linear-gradient(135deg, #005522, #10a043);
            color: #fff;
            box-shadow: 0 8px 25px rgba(0, 76, 35, 0.14);
        }

        .dashboard-hero::after {
            position: absolute;
            top: -110px;
            right: -80px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(240, 229, 0, 0.16);
            content: "";
        }

        .dashboard-hero h1 {
            margin: 8px 0 6px;
            font-size: 28px;
        }

        .dashboard-hero p {
            margin: 0;
            opacity: 0.88;
        }

        .dashboard-logo {
            width: 58px;
            height: 58px;
            padding: 4px;
            object-fit: contain;
            border-radius: 12px;
            background: #fff;
        }

        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 22px;
        }

        .dashboard-stat {
            display: block;
            padding: 20px;
            border: 1px solid #e1ece5;
            border-radius: 16px;
            background: #fff;
            color: inherit;
            text-decoration: none;
            box-shadow: 0 7px 24px rgba(0, 76, 35, 0.07);
            transition: 0.15s;
        }

        .dashboard-stat:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(0, 76, 35, 0.12);
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-label {
            color: #718078;
            font-size: 13px;
        }

        .stat-number {
            margin-top: 7px;
            color: #005522;
            font-size: 32px;
            font-weight: 800;
        }

        .stat-icon-box {
            display: grid;
            place-items: center;
            width: 48px;
            height: 48px;
            border-radius: 13px;
            background: #eaf7ee;
            color: #08752f;
            font-size: 24px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .dashboard-card {
            padding: 22px;
            border: 1px solid #e1ece5;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 7px 24px rgba(0, 76, 35, 0.07);
        }

        .dashboard-card h2 {
            margin: 0 0 5px;
            color: #005522;
            font-size: 20px;
        }

        .dashboard-card p {
            color: #718078;
        }

        .quick-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 8px 0;
            padding: 12px;
            border: 1px solid #e1ece5;
            border-radius: 10px;
            color: #24362b;
            text-decoration: none;
        }

        .quick-item:hover {
            border-color: #9bc9aa;
            background: #f0f8f3;
        }

        .quick-item i {
            color: #08752f;
            font-size: 21px;
        }

        /* Profil sekolah */
        .profile-flex {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-flex img {
            width: 120px;
            height: 120px;
            padding: 8px;
            object-fit: contain;
            border-radius: 14px;
            background: #f4f8f5;
        }

        .profile-info h3 {
            margin: 0 0 8px;
            color: #23412f;
        }

        .profile-info p {
            margin: 4px 0;
            color: #66766d;
        }

        /* Pesan notifikasi */
        .alert-admin {
            margin-bottom: 18px;
            padding: 12px 16px;
            border-radius: 9px;
        }

        .alert-success-admin {
            background: #e8f6ed;
            color: #176b35;
        }

        .alert-danger-admin {
            background: #fdecec;
            color: #9a2727;
        }

        /* Tampilan tablet */
        @media (max-width: 1000px) {
            .admin-sidebar {
                width: 220px;
            }

            .admin-content,
            .admin-footer {
                margin-left: 220px;
            }

            .dashboard-stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Tampilan HP */
        @media (max-width: 700px) {
            .admin-sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .admin-content,
            .admin-footer {
                margin-left: 0;
            }

            .admin-top {
                padding: 0 15px;
            }

            .admin-page {
                padding: 16px;
            }

            .dashboard-stats {
                grid-template-columns: 1fr;
            }

            .admin-user {
                display: none;
            }

            .profile-flex {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="admin-wrap">

        {{-- Sidebar --}}
        <aside class="admin-sidebar">
            <a href="{{ route('admin.dashboard') }}" class="admin-brand">
                <img
                    src="{{ asset('images/logo_mts.jpg') }}"
                    alt="Logo MTS Alhidayah">

                <span>
                    <b>MTS Alhidayah</b>
                    <small>Bojongnangka</small>
                </span>
            </a>

            <nav class="admin-nav">
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="mdi mdi-view-dashboard"></i>
                    Dashboard
                </a>

                <a
                    href="{{ route('admin.profil') }}"
                    class="{{ request()->routeIs('admin.profil', 'profil.*') ? 'active' : '' }}"
                >
                    <i class="mdi mdi-school"></i>
                    Profil Sekolah
                </a>

                <a
                    href="{{ route('admin.guru') }}"
                    class="{{ request()->routeIs('admin.guru', 'guru.*') ? 'active' : '' }}"
                >
                    <i class="mdi mdi-account-tie"></i>
                    Guru
                </a>

                <a
                    href="{{ route('admin.siswa') }}"
                    class="{{ request()->routeIs('admin.siswa', 'siswa.*') ? 'active' : '' }}"
                >
                    <i class="mdi mdi-account-group"></i>
                    Siswa
                </a>

                <a
                    href="{{ route('admin.berita') }}"
                    class="{{ request()->routeIs('admin.berita', 'berita.*') ? 'active' : '' }}"
                >
                    <i class="mdi mdi-newspaper"></i>
                    Berita
                </a>

                <a
                    href="{{ route('admin.ekstrakulikuler') }}"
                    class="{{ request()->routeIs('admin.ekstrakulikuler', 'ekstrakulikuler.*') ? 'active' : '' }}"
                >
                    <i class="mdi mdi-trophy"></i>
                    Ekstrakurikuler
                </a>

                <a
                    href="{{ route('admin.galeri') }}"
                    class="{{ request()->routeIs('admin.galeri', 'galeri.*') ? 'active' : '' }}"
                >
                    <i class="mdi mdi-image-multiple"></i>
                    Galeri
                </a>

                {{-- Logout --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit">
                        <i class="mdi mdi-logout"></i>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        {{-- Konten utama --}}
        <main class="admin-content">

            <header class="admin-top">
                <span class="admin-top-title">
                    Sistem Informasi Sekolah
                </span>

                <span class="admin-user">
                    <i class="mdi mdi-account-circle"></i>
                    {{ Auth::user()->name ?? 'Admin' }}
                </span>
            </header>

            <section class="admin-page">

                {{-- Notifikasi berhasil --}}
                @if (session('success'))
                    <div class="alert-admin alert-success-admin">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Notifikasi validasi --}}
                @if ($errors->any())
                    <div class="alert-admin alert-danger-admin">
                        <ul style="margin: 0;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Isi halaman --}}
                @yield('content')

            </section>

        </main>

        {{-- Footer --}}
        <footer class="admin-footer">
            MTS Alhidayah Bojongnangka &middot; {{ date('Y') }}
        </footer>

    </div>

    {{-- JavaScript --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/datatables-local.js') }}"></script>
    <script src="{{ asset('js/school.js') }}"></script>

    @stack('scripts')
</body>

</html>
