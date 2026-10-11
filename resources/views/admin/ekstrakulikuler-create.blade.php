@extends('admin_app')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')

    {{-- Judul halaman --}}
    <div class="page-head">
        <div>
            <h2>Tambah Ekstrakurikuler</h2>
            <p>Tambahkan kegiatan dan foto/logo ekstrakurikuler.</p>
        </div>
    </div>


    {{-- Form tambah ekstrakurikuler --}}
    <div class="card-school form-card">

        <form
            action="{{ route('ekstrakulikuler.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            {{-- Token keamanan Laravel --}}
            @csrf

            <div class="row g-3">

                {{-- Input nama ekstrakurikuler --}}
                <div class="col-md-6">
                    <label for="nama_ekskul" class="form-label">
                        Nama Ekstrakurikuler
                    </label>

                    <input
                        type="text"
                        id="nama_ekskul"
                        name="nama_ekskul"
                        class="form-control"
                        value="{{ old('nama_ekskul') }}"
                        placeholder="Masukkan nama ekstrakurikuler"
                        required
                    >

                    @error('nama_ekskul')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- Input nama pembina --}}
                <div class="col-md-6">
                    <label for="pembina" class="form-label">
                        Pembina
                    </label>

                    <input
                        type="text"
                        id="pembina"
                        name="pembina"
                        class="form-control"
                        value="{{ old('pembina') }}"
                        placeholder="Masukkan nama pembina"
                    >

                    @error('pembina')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- Input jadwal latihan --}}
                <div class="col-md-6">
                    <label for="jadwal_latihan" class="form-label">
                        Jadwal Latihan
                    </label>

                    <input
                        type="text"
                        id="jadwal_latihan"
                        name="jadwal_latihan"
                        class="form-control"
                        value="{{ old('jadwal_latihan') }}"
                        placeholder="Contoh: Jumat, pukul 14.00"
                    >

                    @error('jadwal_latihan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>


                {{-- Input gambar ekstrakurikuler --}}
                <div class="col-md-6">
                    <div class="upload-box">

                        <label for="gambar" class="form-label">
                            Foto Ekstrakurikuler
                        </label>

                        <input
                            type="file"
                            id="gambar"
                            name="gambar"
                            class="form-control"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        <small class="text-muted">
                            Format JPG, PNG, atau WEBP.
                            Ukuran maksimal 2 MB.
                        </small>

                        @error('gambar')
                            <small class="text-danger d-block">
                                {{ $message }}
                            </small>
                        @enderror

                    </div>
                </div>


                {{-- Input deskripsi kegiatan --}}
                <div class="col-12">
                    <label for="deskripsi" class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        id="deskripsi"
                        name="deskripsi"
                        class="form-control"
                        rows="6"
                        placeholder="Tuliskan deskripsi kegiatan ekstrakurikuler..."
                    >{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

            </div>


            {{-- Tombol kembali dan simpan --}}
            <div class="mt-4">

                <a
                    href="{{ route('admin.ekstrakulikuler') }}"
                    class="btn btn-light"
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn btn-school"
                >
                    <i class="mdi mdi-content-save me-1"></i>
                    Simpan Ekstrakurikuler
                </button>

            </div>

        </form>

    </div>

@endsection
