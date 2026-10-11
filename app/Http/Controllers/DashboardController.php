<?php
namespace App\Http\Controllers;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;
use App\Models\Ekstrakulikuler;
use App\Models\Profil;
class DashboardController extends Controller {
    public function indexPublic(){
        $profil=Profil::first();
        $berita=Berita::orderByDesc('tanggal')->take(3)->get();
        $ekstrakulikuler=Ekstrakulikuler::orderBy('nama_ekskul')->take(6)->get();
        return view('welcome',compact('profil','berita','ekstrakulikuler'));
    }
    public function index(){
        return view('admin.dashboard',[
            'jumlahGuru'=>Guru::count(),
            'jumlahSiswa'=>Siswa::count(),
            'jumlahBerita'=>Berita::count(),
            'jumlahEkstrakulikuler'=>Ekstrakulikuler::count(),
            'profil'=>Profil::first(),
        ]);
    }
}
