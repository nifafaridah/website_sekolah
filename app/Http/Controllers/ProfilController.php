<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();

        return view('admin.profil', compact('profil'));
    }

    public function create()
    {
        return view('admin.profil-create');
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request, true);

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->upload(
                $request->file('foto'),
                'profil'
            );
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $this->upload(
                $request->file('logo'),
                'profil'
            );
        }

        Profil::create($data);

        return redirect()
            ->route('admin.profil')
            ->with('success', 'Profil sekolah berhasil dibuat.');
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);

        return view('admin.profil-edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $data = $this->validateData($request, false);

        $fotoLama = $profil->foto;
        $logoLama = $profil->logo;

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->upload(
                $request->file('foto'),
                'profil'
            );
        } else {
            unset($data['foto']);
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $this->upload(
                $request->file('logo'),
                'profil'
            );
        } else {
            unset($data['logo']);
        }

        $profil->update($data);

        if ($request->hasFile('foto')) {
            $this->deleteFile($fotoLama, 'profil');
        }

        if ($request->hasFile('logo')) {
            $this->deleteFile($logoLama, 'profil');
        }

        return redirect()
            ->route('admin.profil')
            ->with('success', 'Profil sekolah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);

        $fotoLama = $profil->foto;
        $logoLama = $profil->logo;

        $profil->delete();

        $this->deleteFile($fotoLama, 'profil');
        $this->deleteFile($logoLama, 'profil');

        return redirect()
            ->route('admin.profil')
            ->with('success', 'Profil sekolah berhasil dihapus.');
    }

    private function validateData(Request $request, $creating)
    {
        return $request->validate([
            'nama_sekolah' => 'required|max:150',
            'kepala_sekolah' => 'nullable|max:150',
            'npsn' => 'nullable|max:30',
            'alamat' => 'nullable',
            'kontak' => 'nullable|max:100',
            'visi_misi' => 'nullable',
            'tahun_berdiri' => 'nullable|integer|min:1900|max:2100',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);
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
