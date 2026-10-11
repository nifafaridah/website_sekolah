@extends('admin_app')

@section('title', 'Galeri')

@section('content')

    {{-- Judul halaman dan tombol tambah foto --}}
    <div class="page-head">
        <div>
            <h2>Galeri Sekolah</h2>
            <p>Kelola dokumentasi foto kegiatan sekolah.</p>
        </div>

        <a href="{{ route('galeri.create') }}" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Foto
        </a>
    </div>

    {{-- Pesan berhasil atau gagal --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Tabel daftar foto galeri --}}
    <div class="card-school table-card">
        <div class="table-responsive">
            <table class="table align-middle" data-datatable>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($galeri as $item)
                        <tr>
                            {{-- Nomor urut --}}
                            <td>{{ $loop->iteration }}</td>

                            {{-- Foto galeri --}}
                            <td>
                                @if ($item->file)
                                    <img
                                        class="thumb-wide"
                                        src="{{ asset('uploads/galeri/' . $item->file) }}"
                                        alt="{{ $item->judul }}"
                                    >
                                @else
                                    <span class="text-muted">
                                        Tidak ada foto
                                    </span>
                                @endif
                            </td>

                            {{-- Judul foto --}}
                            <td class="fw-semibold">
                                {{ $item->judul }}
                            </td>

                            {{-- Keterangan foto --}}
                            <td>
                                {{ \Illuminate\Support\Str::limit($item->keterangan ?? '', 70) }}
                            </td>

                            {{-- Tanggal dokumentasi --}}
                            <td>
                                @if ($item->tanggal)
                                    {{ \Illuminate\Support\Carbon::parse($item->tanggal)->format('d-m-Y') }}
                                @else
                                    -
                                @endif
                            </td>

                            {{-- Tombol edit dan hapus --}}
                            <td>
                                <div class="d-flex gap-1">

                                    {{-- Tombol edit --}}
                                    <a
                                        href="{{ route('galeri.edit', ['id' => $item->id]) }}"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit foto"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    {{-- Form hapus --}}
                                    <form
                                        action="{{ route('galeri.destroy', ['id' => $item->id]) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus foto ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus foto"
                                        >
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        {{-- Pesan jika belum ada data --}}
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                Belum ada data foto galeri.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
