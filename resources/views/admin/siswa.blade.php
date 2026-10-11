@extends('admin_app')

@section('title', 'Siswa')

@section('content')

<div class="page-head">
    <div>
        <h2>Data Siswa</h2>
        <p>Kelola data peserta didik MTS Alhidayah.</p>
    </div>

    <a href="{{ route('siswa.create') }}" class="btn btn-school">
        <i class="mdi mdi-plus me-1"></i>
        Tambah Siswa
    </a>
</div>

<div class="card-school table-card">
    <div class="table-responsive">
        <table class="table align-middle" data-datatable>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tahun Masuk</th>
                    <th class="no-sort">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($siswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <img
                                class="thumb"
                                src="{{ $item->foto ? asset('uploads/siswa/' . $item->foto) : asset('images/faces/face2.jpg') }}"
                                alt="Foto {{ $item->nama_siswa }}"
                            >
                        </td>

                        <td>{{ $item->nisn }}</td>

                        <td class="fw-semibold">
                            {{ $item->nama_siswa }}
                        </td>

                        <td>
                            <span class="badge-green">
                                {{ $item->jenis_kelamin }}
                            </span>
                        </td>

                        <td>{{ $item->tahun_masuk }}</td>

                        <td>
                            <div class="d-flex gap-1">
                                <a
                                    href="{{ route('siswa.edit', ['id' => $item->id_siswa]) }}"
                                    class="btn btn-sm btn-outline-success"
                                    title="Edit data siswa"
                                    aria-label="Edit data siswa"
                                >
                                    <i class="mdi mdi-pencil"></i>
                                </a>

                                <form
                                    action="{{ route('siswa.destroy', ['id' => $item->id_siswa]) }}"
                                    method="POST"
                                    onsubmit="return confirm('Hapus data siswa ini?')"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        title="Hapus data siswa"
                                        aria-label="Hapus data siswa"
                                    >
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">
                            Belum ada data siswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
