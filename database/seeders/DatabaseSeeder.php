<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
            [
                'email' => 'dosen@celoe.test',
            ],
            [
                'name' => 'Dosen LMS',
                'nomor_induk' => '123456789',
                'password' => Hash::make('password123'),
                'role' => 'dosen',
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'mahasiswa@celoe.test',
            ],
            [
                'name' => 'Mahasiswa LMS',
                'nomor_induk' => '987654321',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ]
        );
    }
}
