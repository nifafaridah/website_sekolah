<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('guru')) {
            Schema::create('guru', function (Blueprint $table) {
                $table->bigIncrements('id_guru');
                $table->string('nama_guru', 100);
                $table->string('nip', 30)->nullable();
                $table->string('mapel', 100)->nullable();
                $table->string('foto', 255)->nullable();
            });
        }

        if (!Schema::hasTable('siswa')) {
            Schema::create('siswa', function (Blueprint $table) {
                $table->bigIncrements('id_siswa');
                $table->string('nisn', 30);
                $table->string('nama_siswa', 100);
                $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
                $table->unsignedSmallInteger('tahun_masuk');
                $table->string('foto', 255)->nullable();
            });
        }

        if (!Schema::hasTable('berita')) {
            Schema::create('berita', function (Blueprint $table) {
                $table->id();
                $table->string('judul', 255);
                $table->text('isi');
                $table->date('tanggal');
                $table->string('gambar', 255)->nullable();
                $table->unsignedBigInteger('id_user')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('ekstrakulikulers')) {
            Schema::create('ekstrakulikulers', function (Blueprint $table) {
                $table->id();
                $table->string('nama_ekskul', 100);
                $table->string('pembina', 100)->nullable();
                $table->string('jadwal_latihan', 100)->nullable();
                $table->text('deskripsi')->nullable();
                $table->string('gambar', 255)->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('galeri')) {
            Schema::create('galeri', function (Blueprint $table) {
                $table->bigIncrements('id_galeri');
                $table->string('judul', 100);
                $table->text('keterangan')->nullable();
                $table->string('file', 255)->nullable();
                $table->string('kategori', 30)->default('Foto');
                $table->date('tanggal');
            });
        }

        if (!Schema::hasTable('profil_sekolah')) {
            Schema::create('profil_sekolah', function (Blueprint $table) {
                $table->bigIncrements('id_profil');
                $table->string('nama_sekolah', 150);
                $table->string('kepala_sekolah', 150)->nullable();
                $table->string('foto', 255)->nullable();
                $table->string('logo', 255)->nullable();
                $table->string('npsn', 30)->nullable();
                $table->text('alamat')->nullable();
                $table->string('kontak', 100)->nullable();
                $table->text('visi_misi')->nullable();
                $table->unsignedSmallInteger('tahun_berdiri')->nullable();
                $table->text('deskripsi')->nullable();
            });
        }

        // Add the photo column to existing tables when this migration is used
        // on an older school database.
        if (Schema::hasTable('siswa') && !Schema::hasColumn('siswa', 'foto')) {
            Schema::table('siswa', fn (Blueprint $table) => $table->string('foto', 255)->nullable());
        }
        if (Schema::hasTable('guru') && !Schema::hasColumn('guru', 'foto')) {
            Schema::table('guru', fn (Blueprint $table) => $table->string('foto', 255)->nullable());
        }
        if (Schema::hasTable('profil_sekolah')) {
            if (!Schema::hasColumn('profil_sekolah', 'foto')) Schema::table('profil_sekolah', fn (Blueprint $table) => $table->string('foto', 255)->nullable());
            if (!Schema::hasColumn('profil_sekolah', 'logo')) Schema::table('profil_sekolah', fn (Blueprint $table) => $table->string('logo', 255)->nullable());
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('ekstrakulikulers');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('guru');
        Schema::dropIfExists('profil_sekolah');
    }
};
