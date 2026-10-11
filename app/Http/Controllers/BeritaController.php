<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Menampilkan seluruh data berita.
     */
    public function index()
    {
        // Mengambil data berita berdasarkan tanggal terbaru.
        $berita = Berita::orderByDesc('tanggal')->get();

        // Menampilkan halaman daftar berita.
        return view('admin.berita', compact('berita'));
    }


    /**
     * Menampilkan halaman form tambah berita.
     */
    public function create()
    {
        return view('admin.berita-create');
    }


    /**
     * Menyimpan berita baru ke database.
     */
    public function store(Request $request)
    {
        // Memeriksa data yang dikirim melalui form.
        $data = $request->validate([
            'judul'   => 'required|max:255',
            'isi'     => 'required',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Memeriksa apakah pengguna mengunggah foto.
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->upload(
                $request->file('gambar'),
                'berita'
            );
        }

        // Menyimpan ID pengguna yang membuat berita.
        $data['id_user'] = Auth::id();

        // Menyimpan berita baru ke database.
        Berita::create($data);

        // Kembali ke halaman daftar berita.
        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil ditambahkan.');
    }


    /**
     * Menampilkan detail berita berdasarkan ID.
     */
    public function show($id)
    {
        // Mencari berita berdasarkan ID.
        $berita = Berita::findOrFail($id);

        // Menampilkan halaman detail berita.
        return view('admin.berita-detail', compact('berita'));
    }


    /**
     * Menampilkan form untuk mengedit berita.
     */
    public function edit($id)
    {
        // Mengambil data berita yang akan diedit.
        $berita = Berita::findOrFail($id);

        // Menampilkan halaman edit berita.
        return view('admin.berita-edit', compact('berita'));
    }


    /**
     * Memperbarui data berita di database.
     */
    public function update(Request $request, $id)
    {
        // Mencari berita yang akan diperbarui.
        $berita = Berita::findOrFail($id);

        // Memvalidasi data dari form edit.
        $data = $request->validate([
            'judul'   => 'required|max:255',
            'isi'     => 'required',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Memeriksa apakah foto berita diganti.
        if ($request->hasFile('gambar')) {

            // Menghapus foto berita yang lama.
            $this->deleteFile($berita->gambar, 'berita');

            // Mengunggah foto berita yang baru.
            $data['gambar'] = $this->upload(
                $request->file('gambar'),
                'berita'
            );

        } else {
            // Mempertahankan foto lama jika tidak ada foto baru.
            unset($data['gambar']);
        }

        // Memperbarui data berita.
        $berita->update($data);

        // Kembali ke halaman daftar berita.
        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil diperbarui.');
    }


    /**
     * Menghapus berita dari database.
     */
    public function destroy($id)
    {
        // Mencari berita yang akan dihapus.
        $berita = Berita::findOrFail($id);

        // Menghapus file foto berita.
        $this->deleteFile($berita->gambar, 'berita');

        // Menghapus data berita dari database.
        $berita->delete();

        // Kembali ke halaman daftar berita.
        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil dihapus.');
    }


    /**
     * Mengunggah foto ke folder public/uploads.
     */
    private function upload($file, $folder)
    {
        // Membuat nama file unik agar tidak bentrok.
        $namaFile = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Menentukan lokasi penyimpanan foto.
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
        // Memeriksa apakah nama file tersedia.
        if (!$namaFile) {
            return;
        }

        // Menentukan lokasi file yang akan dihapus.
        $lokasiFile = public_path('uploads/' . $folder . '/' . $namaFile);

        // Menghapus file jika memang tersedia.
        if (is_file($lokasiFile)) {
            unlink($lokasiFile);
        }
    }
}