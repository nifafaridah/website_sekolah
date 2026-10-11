@extends('admin_app')

@section('title', 'Berita')

@section('content')

    {{-- Judul halaman dan tombol tambah berita --}}
    <div class="page-head">
        <div>
            <h2>Berita Sekolah</h2>
            <p>Kelola berita dan informasi terbaru sekolah.</p>
        </div>

        <a href="{{ route('berita.create') }}" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Berita
        </a>
    </div>

    {{-- Tabel daftar berita --}}
    <div class="card-school table-card">
        <div class="table-responsive">

            <table class="table align-middle" data-datatable>

                {{-- Kepala tabel --}}
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Ringkasan</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                {{-- Isi tabel --}}
                <tbody>
                    @forelse ($berita as $item)
                        <tr>
                            {{-- Nomor urut --}}
                            <td>{{ $loop->iteration }}</td>

                            {{-- Foto berita --}}
                            <td>
                                <img
                                    class="thumb-wide"
                                    src="{{ $item->gambar
                                        ? asset('uploads/berita/' . $item->gambar)
                                        : asset('images/auth/login-bg.jpg') }}"
                                    alt="Foto berita"
                                >
                            </td>

                            {{-- Judul berita --}}
                            <td class="fw-semibold">
                                {{ $item->judul }}
                            </td>

                            {{-- Tanggal berita --}}
                            <td>
                                {{ optional($item->tanggal)->format('d-m-Y') }}
                            </td>

                            {{-- Ringkasan isi berita --}}
                            <td>
                                {{ \Illuminate\Support\Str::limit(
                                    strip_tags($item->isi),
                                    80
                                ) }}
                            </td>

                            {{-- Tombol aksi --}}
                            <td>
                                <div class="d-flex gap-1">

                                    {{-- Tombol detail --}}
                                    <a
                                        href="{{ route('berita.show', $item->id) }}"
                                        class="btn btn-sm btn-outline-primary"
                                        title="Lihat detail"
                                    >
                                        <i class="mdi mdi-eye"></i>
                                    </a>

                                    {{-- Tombol edit --}}
                                    <a
                                        href="{{ route('berita.edit', $item->id) }}"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit berita"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    {{-- Tombol hapus --}}
                                    <form
                                        action="{{ route('berita.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Hapus berita ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus berita"
                                        >
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty
                        {{-- Pesan jika belum ada berita --}}
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                Belum ada data berita.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

@endsection
