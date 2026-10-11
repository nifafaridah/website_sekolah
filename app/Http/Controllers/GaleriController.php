<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Menampilkan seluruh data galeri.
     */
    public function index()
    {
        // Mengambil data galeri berdasarkan tanggal terbaru.
        $galeri = Galeri::orderByDesc('tanggal')->get();

        // Menampilkan halaman daftar galeri.
        return view('admin.galeri', compact('galeri'));
    }

    /**
     * Menampilkan form tambah foto.
     */
    public function create()
    {
        return view('admin.galeri-create');
    }

    /**
     * Menyimpan data foto galeri baru.
     */
    public function store(Request $request)
    {
        // Memeriksa data yang dikirim dari form.
        $data = $request->validate([
            'judul'      => 'required|string|max:100',
            'keterangan' => 'nullable|string',
            'file'       => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
            'kategori'   => 'required|in:Foto',
            'tanggal'    => 'required|date',
        ]);

        // Mengunggah foto ke folder galeri.
        if ($request->hasFile('file')) {
            $data['file'] = $this->upload(
                $request->file('file'),
                'galeri'
            );
        }

        // Menyimpan data ke database.
        Galeri::create($data);

        // Kembali ke halaman daftar galeri.
        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit foto.
     */
    public function edit($id)
    {
        // Mencari data galeri berdasarkan primary key.
        $galeri = Galeri::findOrFail($id);

        // Menampilkan halaman edit.
        return view('admin.galeri-edit', compact('galeri'));
    }

    /**
     * Memperbarui data foto galeri.
     */
    public function update(Request $request, $id)
    {
        // Mencari data yang akan diperbarui.
        $item = Galeri::findOrFail($id);

        // Memeriksa data dari form edit.
        $data = $request->validate([
            'judul'      => 'required|string|max:100',
            'keterangan' => 'nullable|string',
            'file'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'kategori'   => 'required|in:Foto',
            'tanggal'    => 'required|date',
        ]);

        // Mengunggah foto baru jika pengguna memilih file.
        if ($request->hasFile('file')) {
            // Simpan nama foto lama untuk dihapus setelah upload sukses.
            $fotoLama = $item->file;

            // Mengunggah foto pengganti.
            $data['file'] = $this->upload(
                $request->file('file'),
                'galeri'
            );

            // Menghapus foto lama setelah foto baru berhasil diunggah.
            $this->deleteFile($fotoLama, 'galeri');
        } else {
            // Tidak mengubah foto jika file baru tidak dipilih.
            unset($data['file']);
        }

        // Memperbarui data galeri.
        $item->update($data);

        // Kembali ke halaman daftar galeri.
        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Foto galeri berhasil diubah.');
    }

    /**
     * Menghapus data foto galeri.
     */
    public function destroy($id)
    {
        // Mencari data yang akan dihapus.
        $item = Galeri::findOrFail($id);

        // Menghapus file foto dari folder penyimpanan.
        $this->deleteFile($item->file, 'galeri');

        // Menghapus data dari database.
        $item->delete();

        // Kembali ke halaman daftar galeri.
        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Foto galeri berhasil dihapus.');
    }

    /**
     * Mengunggah foto ke public/uploads/galeri.
     */
    private function upload($file, $folder)
    {
        // Membuat nama file unik agar tidak bertabrakan.
        $namaFile = Str::uuid() . '.'
            . $file->getClientOriginalExtension();

        // Menentukan folder penyimpanan.
        $lokasiFolder = public_path('uploads/' . $folder);

        // Membuat folder jika belum tersedia.
        if (!is_dir($lokasiFolder)) {
            mkdir($lokasiFolder, 0755, true);
        }

        // Memindahkan foto ke folder tujuan.
        $file->move($lokasiFolder, $namaFile);

        // Mengembalikan nama file untuk disimpan ke database.
        return $namaFile;
    }

    /**
     * Menghapus file foto dari folder penyimpanan.
     */
    private function deleteFile($namaFile, $folder)
    {
        // Memastikan nama file tersedia.
        if (!$namaFile) {
            return;
        }

        // Menentukan lokasi file.
        $lokasiFile = public_path(
            'uploads/' . $folder . '/' . $namaFile
        );

        // Menghapus file jika ditemukan.
        if (is_file($lokasiFile)) {
            unlink($lokasiFile);
        }
    }
}
