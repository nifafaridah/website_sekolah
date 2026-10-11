<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EkstrakulikulerController extends Controller
{
    /**
     * Menampilkan seluruh data ekstrakurikuler.
     */
    public function index()
    {
        // Mengambil data dan mengurutkannya berdasarkan nama.
        $ekstrakulikuler = Ekstrakulikuler::orderBy('nama_ekskul')->get();

        // Menampilkan halaman daftar ekstrakurikuler.
        return view('admin.ekstrakulikuler', compact('ekstrakulikuler'));
    }

    /**
     * Menampilkan halaman form tambah ekstrakurikuler.
     */
    public function create()
    {
        return view('admin.ekstrakulikuler-create');
    }

    /**
     * Menyimpan data ekstrakurikuler baru.
     */
    public function store(Request $request)
    {
        // Memvalidasi data yang dikirim dari form.
        $data = $request->validate([
            'nama_ekskul'    => 'required|string|max:100',
            'pembina'        => 'nullable|string|max:100',
            'jadwal_latihan' => 'nullable|string|max:100',
            'deskripsi'      => 'nullable|string',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Mengganti deskripsi NULL dengan string kosong.
        // Ini diperlukan karena kolom deskripsi di database wajib memiliki nilai.
        $data['deskripsi'] = $data['deskripsi'] ?? '';

        // Memeriksa apakah gambar diunggah.
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->upload(
                $request->file('gambar'),
                'ekstrakulikuler'
            );
        }

        // Menyimpan data ke database.
        Ekstrakulikuler::create($data);

        // Kembali ke halaman daftar ekstrakurikuler.
        return redirect()
            ->route('admin.ekstrakulikuler')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit ekstrakurikuler.
     */
    public function edit($id)
    {
        // Mencari data berdasarkan ID.
        $ekstrakulikuler = Ekstrakulikuler::findOrFail($id);

        // Menampilkan halaman edit.
        return view(
            'admin.ekstrakulikuler-edit',
            compact('ekstrakulikuler')
        );
    }

    /**
     * Memperbarui data ekstrakurikuler.
     */
    public function update(Request $request, $id)
    {
        // Mengambil data yang akan diperbarui.
        $item = Ekstrakulikuler::findOrFail($id);

        // Memvalidasi data dari form edit.
        $data = $request->validate([
            'nama_ekskul'    => 'required|string|max:100',
            'pembina'        => 'nullable|string|max:100',
            'jadwal_latihan' => 'nullable|string|max:100',
            'deskripsi'      => 'nullable|string',
            'gambar'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Memastikan deskripsi tidak dikirim sebagai NULL.
        $data['deskripsi'] = $data['deskripsi'] ?? '';

        // Memeriksa apakah pengguna memilih gambar baru.
        if ($request->hasFile('gambar')) {
            // Mengunggah gambar pengganti.
            $gambarLama = $item->gambar;

            $data['gambar'] = $this->upload(
                $request->file('gambar'),
                'ekstrakulikuler'
            );

            // Menghapus gambar lama setelah gambar baru berhasil diunggah.
            $this->deleteFile($gambarLama, 'ekstrakulikuler');
        } else {
            // Mempertahankan gambar lama jika tidak diganti.
            unset($data['gambar']);
        }

        // Memperbarui data ekstrakurikuler.
        $item->update($data);

        // Kembali ke halaman daftar ekstrakurikuler.
        return redirect()
            ->route('admin.ekstrakulikuler')
            ->with('success', 'Data ekstrakurikuler berhasil diubah.');
    }

    /**
     * Menghapus data ekstrakurikuler.
     */
    public function destroy($id)
    {
        // Mencari data yang akan dihapus.
        $item = Ekstrakulikuler::findOrFail($id);

        // Menghapus gambar dari folder penyimpanan.
        $this->deleteFile($item->gambar, 'ekstrakulikuler');

        // Menghapus data dari database.
        $item->delete();

        // Kembali ke halaman daftar ekstrakurikuler.
        return redirect()
            ->route('admin.ekstrakulikuler')
            ->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }

    /**
     * Mengunggah gambar ke folder public/uploads.
     */
    private function upload($file, $folder)
    {
        // Membuat nama file unik.
        $namaFile = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Menentukan lokasi penyimpanan gambar.
        $lokasiFolder = public_path('uploads/' . $folder);

        // Membuat folder jika belum tersedia.
        if (!is_dir($lokasiFolder)) {
            mkdir($lokasiFolder, 0755, true);
        }

        // Memindahkan gambar ke folder tujuan.
        $file->move($lokasiFolder, $namaFile);

        // Mengembalikan nama file untuk disimpan ke database.
        return $namaFile;
    }

    /**
     * Menghapus file gambar dari folder penyimpanan.
     */
    private function deleteFile($namaFile, $folder)
    {
        // Memastikan nama file tersedia.
        if (!$namaFile) {
            return;
        }

        // Menentukan lokasi gambar.
        $lokasiFile = public_path(
            'uploads/' . $folder . '/' . $namaFile
        );

        // Menghapus file jika ditemukan.
        if (is_file($lokasiFile)) {
            unlink($lokasiFile);
        }
    }
}
