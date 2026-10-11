@extends('admin_app')

@section('title', 'Profil Sekolah')

@section('content')

<div class="page-head">
    <div>
        <h2>Profil Sekolah</h2>
        <p>Identitas resmi MTS Alhidayah Bojongnangka.</p>
    </div>

    @if ($profil)
        <a
            href="{{ route('profil.edit', ['id' => $profil->id_profil]) }}"
            class="btn btn-school"
        >
            <i class="mdi mdi-pencil me-1"></i>
            Edit Profil
        </a>
    @else
        <a href="{{ route('profil.create') }}" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Profil
        </a>
    @endif
</div>

@if ($profil)

    <div class="row g-4">

        {{-- Identitas Sekolah --}}
        <div class="col-lg-4">
            <div class="card-school p-4 text-center h-100">

                @if ($profil->logo)
                    <img
                        src="{{ asset('uploads/profil/' . $profil->logo) }}"
                        class="photo-large"
                        alt="Logo {{ $profil->nama_sekolah }}"
                    >
                @else
                    <img
                        src="{{ asset('images/logo-sekolah.png') }}"
                        class="photo-large"
                        alt="Logo sekolah"
                    >
                @endif

                <h3 class="text-green mt-3">
                    {{ $profil->nama_sekolah }}
                </h3>

                <p class="text-muted">
                    {{ $profil->alamat ?: 'Alamat belum diisi' }}
                </p>

                @if ($profil->foto)
                    <img
                        src="{{ asset('uploads/profil/' . $profil->foto) }}"
                        class="photo-school mt-2"
                        alt="Foto sekolah {{ $profil->nama_sekolah }}"
                    >
                @endif

                <div class="mt-3">
                    <form
                        action="{{ route('profil.destroy', ['id' => $profil->id_profil]) }}"
                        method="POST"
                        onsubmit="return confirm('Hapus profil sekolah ini?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-outline-danger btn-sm"
                        >
                            Hapus Profil
                        </button>
                    </form>
                </div>

            </div>
        </div>

        {{-- Informasi Detail Sekolah --}}
        <div class="col-lg-8">
            <div class="card-school p-4 h-100">
                <div class="row g-4">

                    <div class="col-md-6">
                        <strong>Kepala Sekolah</strong>
                        <p class="mb-0">
                            {{ $profil->kepala_sekolah ?: '-' }}
                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>NPSN</strong>
                        <p class="mb-0">
                            {{ $profil->npsn ?: '-' }}
                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>Kontak</strong>
                        <p class="mb-0">
                            {{ $profil->kontak ?: '-' }}
                        </p>
                    </div>

                    <div class="col-md-6">
                        <strong>Tahun Berdiri</strong>
                        <p class="mb-0">
                            {{ $profil->tahun_berdiri ?: '-' }}
                        </p>
                    </div>

                    <div class="col-12">
                        <strong>Visi &amp; Misi</strong>
                        <p class="mb-0 mt-1" style="white-space: pre-line">
                            {{ $profil->visi_misi ?: '-' }}
                        </p>
                    </div>

                    <div class="col-12">
                        <strong>Deskripsi</strong>
                        <p class="mb-0 mt-1" style="white-space: pre-line">
                            {{ $profil->deskripsi ?: '-' }}
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

@else

    {{-- Tampilan Jika Profil Belum Ada --}}
    <div class="card-school empty-state">
        <img
            src="{{ asset('images/logo-sekolah.png') }}"
            class="school-logo-mini mx-auto"
            alt="Logo sekolah"
        >

        <h4 class="mt-3 text-green">
            Profil sekolah belum tersedia
        </h4>

        <p>
            Tambahkan identitas sekolah, logo, dan foto sekolah.
        </p>

        <a href="{{ route('profil.create') }}" class="btn btn-school">
            Tambah Profil Sekolah
        </a>
    </div>

@endif

@endsection
