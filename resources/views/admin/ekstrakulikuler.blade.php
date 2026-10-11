@extends('admin_app')

@section('title', 'Ekstrakurikuler')

@section('content')

    {{-- Judul halaman dan tombol tambah --}}
    <div class="page-head">
        <div>
            <h2>Data Ekstrakurikuler</h2>
            <p>Kelola kegiatan pengembangan bakat dan minat siswa.</p>
        </div>

        <a
            href="{{ route('ekstrakulikuler.create') }}"
            class="btn btn-school"
        >
            <i class="mdi mdi-plus me-1"></i>
            Tambah Ekstrakurikuler
        </a>
    </div>


    {{-- Tabel daftar ekstrakurikuler --}}
    <div class="card-school table-card">
        <div class="table-responsive">

            <table class="table align-middle" data-datatable>

                {{-- Kepala tabel --}}
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Pembina</th>
                        <th>Jadwal</th>
                        <th>Deskripsi</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                {{-- Isi tabel --}}
                <tbody>
                    @forelse ($ekstrakulikuler as $item)
                        <tr>

                            {{-- Nomor urut --}}
                            <td>{{ $loop->iteration }}</td>

                            {{-- Foto ekstrakurikuler --}}
                            <td>
                                <img
                                    class="thumb-wide"
                                    src="{{ $item->gambar
                                        ? asset('uploads/ekstrakulikuler/' . $item->gambar)
                                        : asset('images/auth/login-bg.jpg') }}"
                                    alt="Foto ekstrakurikuler"
                                >
                            </td>

                            {{-- Nama kegiatan --}}
                            <td class="fw-semibold">
                                {{ $item->nama_ekskul }}
                            </td>

                            {{-- Nama pembina --}}
                            <td>
                                {{ $item->pembina ?: '-' }}
                            </td>

                            {{-- Jadwal latihan --}}
                            <td>
                                <span class="badge-green">
                                    {{ $item->jadwal_latihan ?: '-' }}
                                </span>
                            </td>

                            {{-- Ringkasan deskripsi --}}
                            <td>
                                {{ \Illuminate\Support\Str::limit(
                                    $item->deskripsi,
                                    80
                                ) }}
                            </td>

                            {{-- Tombol aksi --}}
                            <td>
                                <div class="d-flex gap-1">

                                    {{-- Tombol edit --}}
                                    <a
                                        href="{{ route('ekstrakulikuler.edit', $item->id) }}"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit ekstrakurikuler"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    {{-- Tombol hapus --}}
                                    <form
                                        action="{{ route('ekstrakulikuler.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Hapus data ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus ekstrakurikuler"
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
                            <td colspan="7" class="text-center py-4">
                                Belum ada data ekstrakurikuler.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

@endsection
