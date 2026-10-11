@extends('admin_app')

@section('title', 'Data Guru')

@section('content')

    {{-- Judul halaman dan tombol tambah --}}
    <div class="page-head">
        <div>
            <h2>Data Guru</h2>
            <p>Kelola data tenaga pendidik MTS Alhidayah.</p>
        </div>

        <a href="{{ route('guru.create') }}" class="btn btn-school">
            <i class="mdi mdi-plus me-1"></i>
            Tambah Guru
        </a>
    </div>

    {{-- Tabel data guru --}}
    <div class="card-school table-card">
        <div class="table-responsive">
            <table class="table align-middle" data-datatable>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th class="no-sort">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($guru as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <img
                                    class="thumb"
                                    src="{{ $item->foto
                                        ? asset('uploads/guru/' . $item->foto)
                                        : asset('images/faces/face1.jpg') }}"
                                    alt="Foto {{ $item->nama_guru }}"
                                >
                            </td>

                            <td class="fw-semibold">
                                {{ $item->nama_guru }}
                            </td>

                            <td>
                                {{ $item->nip ?: '-' }}
                            </td>

                            <td>
                                <span class="badge-green">
                                    {{ $item->mapel ?: 'Guru Mata Pelajaran' }}
                                </span>
                            </td>

                            <td>
                                <div class="d-flex gap-1">

                                    {{-- Tombol edit --}}
                                    <a
                                        href="{{ route('guru.edit', ['id' => $item->id]) }}"
                                        class="btn btn-sm btn-outline-success"
                                        title="Edit data guru"
                                    >
                                        <i class="mdi mdi-pencil"></i>
                                    </a>

                                    {{-- Tombol hapus --}}
                                    <form
                                        action="{{ route('guru.destroy', ['id' => $item->id]) }}"
                                        method="POST"
                                        onsubmit="return confirm('Hapus data guru ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Hapus data guru"
                                        >
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Belum ada data guru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
