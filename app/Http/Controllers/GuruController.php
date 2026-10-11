<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Menampilkan seluruh data guru.
     */
    public function index()
    {
        $guru = Guru::orderBy('nama_guru')->get();

        return view('admin.guru', compact('guru'));
    }

    /**
     * Menampilkan form tambah guru.
     */
    public function create()
    {
        return view('admin.guru-create');
    }

    /**
     * Menyimpan data guru baru.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_guru' => 'required|max:100',
            'nip'       => 'nullable|max:30',
            'mapel'     => 'nullable|max:100',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->upload(
                $request->file('foto'),
                'guru'
            );
        }

        Guru::create($data);

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit guru.
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);

        return view('admin.guru-edit', compact('guru'));
    }

    /**
     * Memperbarui data guru.
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $data = $request->validate([
            'nama_guru' => 'required|max:100',
            'nip'       => 'nullable|max:30',
            'mapel'     => 'nullable|max:100',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $namaFotoLama = $guru->foto;

            $data['foto'] = $this->upload(
                $request->file('foto'),
                'guru'
            );

            // Hapus foto lama setelah upload foto baru berhasil.
            $this->deleteFile($namaFotoLama, 'guru');
        } else {
            // Foto lama tetap digunakan jika tidak ada upload baru.
            unset($data['foto']);
        }

        $guru->update($data);

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil diubah.');
    }

    /**
     * Menghapus data guru.
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        $namaFoto = $guru->foto;

        $guru->delete();

        $this->deleteFile($namaFoto, 'guru');

        return redirect()
            ->route('admin.guru')
            ->with('success', 'Data guru berhasil dihapus.');
    }

    /**
     * Mengunggah foto guru ke folder public/uploads/guru.
     */
    private function upload($file, $folder)
    {
        $namaFile = Str::uuid() . '.' . $file->getClientOriginalExtension();

        $lokasiFolder = public_path('uploads/' . $folder);

        if (!is_dir($lokasiFolder)) {
            mkdir($lokasiFolder, 0755, true);
        }

        $file->move($lokasiFolder, $namaFile);

        return $namaFile;
    }

    /**
     * Menghapus file foto dari folder penyimpanan.
     */
    private function deleteFile($namaFile, $folder)
    {
        if (empty($namaFile)) {
            return;
        }

        $lokasiFile = public_path(
            'uploads/' . $folder . '/' . $namaFile
        );

        if (is_file($lokasiFile)) {
            unlink($lokasiFile);
        }
    }
}
