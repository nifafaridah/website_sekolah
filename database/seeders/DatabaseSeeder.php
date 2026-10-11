<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Ekstrakulikuler;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Profil;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@alhidayah.sch.id'],
            ['name' => 'Admin', 'password' => Hash::make('password')]
        );

        Profil::updateOrCreate(
            ['id_profil' => 1],
            [
                'nama_sekolah' => 'MTS Alhidayah',
                'kepala_sekolah' => 'Kepala Sekolah MTS Alhidayah',
                'logo' => 'logo-sekolah.png',
                'foto' => 'sekolah.jpg',
                'npsn' => '20299999',
                'alamat' => 'Bojongnangka, Jawa Barat',
                'kontak' => '08xxxxxxxxxx',
                'visi_misi' => "VISI\nMenjadi madrasah yang unggul dalam ilmu, prestasi, dan karakter.\n\nMISI\nMenyelenggarakan pendidikan yang berkarakter, berprestasi, dan berwawasan teknologi.",
                'tahun_berdiri' => 2005,
                'deskripsi' => 'MTS Alhidayah Bojongnangka merupakan sekolah yang mengembangkan ilmu pengetahuan, keterampilan, karakter, dan prestasi siswa.'
            ]
        );

        if (Guru::count() === 0) {
            Guru::create(['nama_guru' => 'Ahmad, S.Pd', 'nip' => '198501012010011001', 'mapel' => 'Matematika', 'foto' => 'guru-1.jpg']);
            Guru::create(['nama_guru' => 'Siti Nurhayati, S.Pd', 'nip' => '198602022011012002', 'mapel' => 'Bahasa Indonesia', 'foto' => 'guru-2.jpg']);
            Guru::create(['nama_guru' => 'Dewi Lestari, S.Pd', 'nip' => '198703032012013003', 'mapel' => 'IPA', 'foto' => 'guru-3.jpg']);
        }

        if (Siswa::count() === 0) {
            Siswa::create(['nisn' => '12345', 'nama_siswa' => 'Ahmad Fauzi', 'jenis_kelamin' => 'Laki-Laki', 'tahun_masuk' => 2026, 'foto' => 'siswa-1.jpg']);
            Siswa::create(['nisn' => '12346', 'nama_siswa' => 'Siti Nurhaliza', 'jenis_kelamin' => 'Perempuan', 'tahun_masuk' => 2026, 'foto' => 'siswa-2.jpg']);
            Siswa::create(['nisn' => '12347', 'nama_siswa' => 'Rizky Maulana', 'jenis_kelamin' => 'Laki-Laki', 'tahun_masuk' => 2026, 'foto' => 'siswa-3.jpg']);
        }

        if (Berita::count() === 0) {
            Berita::create(['judul' => 'Pemilihan Ketua dan Wakil Ketua OSIS', 'isi' => 'Kegiatan pemilihan ketua dan wakil ketua OSIS dilaksanakan secara tertib dan demokratis sebagai pembelajaran kepemimpinan bagi siswa.', 'tanggal' => now()->toDateString(), 'gambar' => 'berita-1.jpg', 'id_user' => 1]);
            Berita::create(['judul' => 'Kegiatan Pramuka MTS Alhidayah', 'isi' => 'Kegiatan pramuka menjadi sarana pembentukan karakter, kedisiplinan, kerja sama, dan kemandirian siswa.', 'tanggal' => now()->subDays(2)->toDateString(), 'gambar' => 'berita-2.jpg', 'id_user' => 1]);
        }

        if (Ekstrakulikuler::count() === 0) {
            Ekstrakulikuler::create(['nama_ekskul' => 'Pramuka', 'pembina' => 'Ahmad', 'jadwal_latihan' => 'Sabtu', 'deskripsi' => 'Kegiatan pembinaan karakter dan keterampilan siswa.', 'gambar' => 'pramuka.jpg']);
            Ekstrakulikuler::create(['nama_ekskul' => 'Futsal', 'pembina' => 'Budi', 'jadwal_latihan' => 'Jumat', 'deskripsi' => 'Wadah pengembangan bakat olahraga siswa.', 'gambar' => 'futsal.jpg']);
            Ekstrakulikuler::create(['nama_ekskul' => 'PMR', 'pembina' => 'Siti', 'jadwal_latihan' => 'Rabu', 'deskripsi' => 'Melatih kepedulian, kesehatan, dan keterampilan pertolongan pertama.', 'gambar' => 'pmr.jpg']);
        }

        if (Galeri::count() === 0) {
            Galeri::create(['judul' => 'Kegiatan Sekolah', 'keterangan' => 'Dokumentasi kegiatan sekolah.', 'file' => 'galeri-1.jpg', 'kategori' => 'Foto', 'tanggal' => now()->toDateString()]);
            Galeri::create(['judul' => 'Kegiatan Siswa', 'keterangan' => 'Dokumentasi aktivitas peserta didik.', 'file' => 'galeri-2.jpg', 'kategori' => 'Foto', 'tanggal' => now()->subDays(3)->toDateString()]);
        }
    }
}
