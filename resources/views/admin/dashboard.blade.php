@extends('admin_app')
@section('title','Dashboard Admin')
@section('content')
<div class="dashboard-hero">
    <img src="{{ asset('images/logo-sekolah.png') }}" class="dashboard-logo" alt="Logo MTS Alhidayah">
    <h1>Selamat datang, {{ auth()->user()->name ?? 'Admin' }} 👋</h1>
    <p>Kelola informasi MTS Alhidayah Bojongnangka dari satu dashboard.</p>
</div>
<div class="dashboard-stats">
<a class="dashboard-stat" href="{{ route('admin.guru') }}"><div class="stat-top"><div><div class="stat-label">Guru</div><div class="stat-number">{{ $jumlahGuru }}</div></div><div class="stat-icon-box"><i class="mdi mdi-account-tie"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
<a class="dashboard-stat" href="{{ route('admin.siswa') }}"><div class="stat-top"><div><div class="stat-label">Siswa</div><div class="stat-number">{{ $jumlahSiswa }}</div></div><div class="stat-icon-box"><i class="mdi mdi-account-group"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
<a class="dashboard-stat" href="{{ route('admin.berita') }}"><div class="stat-top"><div><div class="stat-label">Berita</div><div class="stat-number">{{ $jumlahBerita }}</div></div><div class="stat-icon-box"><i class="mdi mdi-newspaper"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
<a class="dashboard-stat" href="{{ route('admin.ekstrakulikuler') }}"><div class="stat-top"><div><div class="stat-label">Ekstrakurikuler</div><div class="stat-number">{{ $jumlahEkstrakulikuler }}</div></div><div class="stat-icon-box"><i class="mdi mdi-trophy"></i></div></div><div style="margin-top:12px;color:#08752f;font-size:13px">Kelola data →</div></a>
</div>
<div class="dashboard-grid">
<div class="dashboard-card"><h2>Profil Sekolah</h2><p>Identitas utama sekolah.</p>@if($profil)<div class="profile-flex">@if($profil->logo)<img src="{{ asset('uploads/profil/'.$profil->logo) }}" alt="Logo">@else<img src="{{ asset('images/logo-sekolah.png') }}" alt="Logo">@endif<div class="profile-info"><h3>{{ $profil->nama_sekolah }}</h3><p><b>Kepala Sekolah:</b> {{ $profil->kepala_sekolah ?: '-' }}</p><p><b>NPSN:</b> {{ $profil->npsn ?: '-' }}</p><p><b>Alamat:</b> {{ $profil->alamat ?: '-' }}</p></div></div>@else<p>Profil sekolah belum tersedia.</p><a href="{{ route('profil.create') }}">Tambah Profil</a>@endif</div>
<div class="dashboard-card"><h2>Akses Cepat</h2><a class="quick-item" href="{{ route('guru.create') }}"><i class="mdi mdi-account-plus"></i>Tambah Guru</a><a class="quick-item" href="{{ route('siswa.create') }}"><i class="mdi mdi-account-plus"></i>Tambah Siswa</a><a class="quick-item" href="{{ route('berita.create') }}"><i class="mdi mdi-newspaper-plus"></i>Tambah Berita</a><a class="quick-item" href="{{ route('ekstrakulikuler.create') }}"><i class="mdi mdi-trophy-award"></i>Tambah Ekstrakurikuler</a></div>
</div>
@endsection
