<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_depan' => 'hapis',
            'nama_belakang' => 'abdullah',
            'username' => 'roger123',
            'no_hp' => '0821400xxxxx',
            'email' => 'user@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'nama_depan' => 'admin',
            'nama_belakang' => 'admin',
            'username' => 'admin',
            'no_hp' => '0821400xxxxx',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('admin'),
        ]);
        
        User::create([
            'nama_depan' => 'dokter',
            'nama_belakang' => 'dokter',
            'username' => 'dokter',
            'no_hp' => '0821400xxxxx',
            'email' => 'dokter@gmail.com',
            'is_dokter' => true,
            'password' => Hash::make('admin'),
        ]);
    }
}