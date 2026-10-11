<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy('nama_siswa')->get();

        return view('admin.siswa', compact('siswa'));
    }

    public function create()
    {
        return view('admin.siswa-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nisn' => 'required|max:30',
            'nama_siswa' => 'required|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tahun_masuk' => 'required|integer|min:2000|max:2100',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->upload(
                $request->file('foto'),
                'siswa'
            );
        }

        Siswa::create($data);

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('admin.siswa-edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $data = $request->validate([
            'nisn' => 'required|max:30',
            'nama_siswa' => 'required|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tahun_masuk' => 'required|integer|min:2000|max:2100',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $fotoLama = $siswa->foto;

            $data['foto'] = $this->upload(
                $request->file('foto'),
                'siswa'
            );

            $siswa->update($data);

            $this->deleteFile($fotoLama, 'siswa');
        } else {
            unset($data['foto']);

            $siswa->update($data);
        }

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $fotoLama = $siswa->foto;

        $siswa->delete();

        $this->deleteFile($fotoLama, 'siswa');

        return redirect()
            ->route('admin.siswa')
            ->with('success', 'Data siswa berhasil dihapus.');
    }

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

    private function deleteFile($namaFile, $folder)
    {
        if (!$namaFile) {
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
