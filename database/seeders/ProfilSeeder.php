<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profil::create([
            'nama_sekolah' => 'MTS Alhidayah',
            'kepala_sekolah' => '',
            'foto' => 'gedung_sekolah.jpg',
            'logo' => 'logo_sekolah.png',
            'npsn' => '20210890',
            'alamat' => '',
            'kontak' => '089531564233',
            'visi_misi' => "Visi:\nMenjadi MTS unggul yang berkarakter, berdaya saing global",
            'tahun_berakhir' => 2000,
            'deskripsi' => 'MTS Alhidayah'
        ]);
    }
}