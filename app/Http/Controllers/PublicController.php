<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstrakulikuler;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Profil;
use App\Models\Siswa;

class PublicController extends Controller
{
    private function schoolProfile()
    {
        return Profil::first();
    }

    public function home()
    {
        return view('public.home', [
            'profil' => $this->schoolProfile(),
            'berita' => Berita::orderByDesc('tanggal')->take(3)->get(),
            'ekstrakulikuler' => Ekstrakulikuler::orderBy('nama_ekskul')->take(6)->get(),
            'galeri' => Galeri::orderByDesc('tanggal')->take(6)->get(),
            'jumlahGuru' => Guru::count(),
            'jumlahSiswa' => Siswa::count(),
            'jumlahBerita' => Berita::count(),
            'jumlahEkskul' => Ekstrakulikuler::count(),
        ]);
    }

    public function profil()
    {
        return view('public.profil', ['profil' => $this->schoolProfile(), 'jumlahGuru' => Guru::count(), 'jumlahSiswa' => Siswa::count()]);
    }

    public function berita()
    {
        return view('public.berita', ['profil' => $this->schoolProfile(), 'berita' => Berita::orderByDesc('tanggal')->paginate(9)]);
    }

    public function detailBerita($id)
    {
        $item = Berita::findOrFail($id);
        $beritaLain = Berita::where('id', '!=', $item->id)->orderByDesc('tanggal')->take(3)->get();
        return view('public.berita-detail', ['profil' => $this->schoolProfile(), 'item' => $item, 'beritaLain' => $beritaLain]);
    }

    public function ekstrakulikuler()
    {
        return view('public.ekstrakulikuler', ['profil' => $this->schoolProfile(), 'ekstrakulikuler' => Ekstrakulikuler::orderBy('nama_ekskul')->get()]);
    }

    public function galeri()
    {
        return view('public.galeri', ['profil' => $this->schoolProfile(), 'galeri' => Galeri::orderByDesc('tanggal')->paginate(12)]);
    }
}
