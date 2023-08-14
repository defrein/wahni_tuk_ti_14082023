<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bahan;
use App\Models\Level;
use App\Models\Mesin;
use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Status;
use App\Models\Penerbit;
use App\Models\Pengesah;
// use Illuminate\Foundation\Auth\User;
use App\Models\Finishing;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->times(3)->create();
        // Level
        Level::create([
            'nama_level' => 'Administrator'
        ]);

        User::create([
            'username' => 'admin@gmail.com',
            'password' => Hash::make('12345'), // password
            'nama' => 'Saya Administrator',
            'id_level' => 1,
        ]);

        Penerbit::create([
            'nama_penerbit' => 'Institusi',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Jurusan Teknik Sipil',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Jurusan Teknik Mesin',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Jurusan Teknik Elektro',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Jurusan Akuntansi',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Jurusan Administrasi Bisnis',
        ]);

        Pengesah::create([
            'nama_pengesah' => 'Direktur',
        ]);
        Pengesah::create([
            'nama_pengesah' => 'Ketua Jurusan Teknik Sipil',
        ]);
        Pengesah::create([
            'nama_pengesah' => 'Ketua Jurusan Teknik Mesin',
        ]);

        Pengesah::create([
            'nama_pengesah' => 'Ketua Jurusan Teknik Elektro',
        ]);
        Pengesah::create([
            'nama_pengesah' => 'Ketua Jurusan Akuntansi',
        ]);
        Pengesah::create([
            'nama_pengesah' => 'Ketua Jurusan Administrasi Bisnis',
        ]);
    }
}
