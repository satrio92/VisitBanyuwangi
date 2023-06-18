<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembayaran::create([
            'nama' => 'Ruben Galvan',
            'email' => 'ruben@mail.com',
            'telepon' => '08123456789',
            'tanggal' => date("Y/m/d"),
            'image' => './images/hero-banner.png',
        ]);

        Pembayaran::create([
            'nama' => 'Monica Ellison',
            'email' => 'monica@mail.com',
            'telepon' => '08123456789',
            'tanggal' => date("Y/m/d"),
            'image' => './images/hero-banner.png',
        ]);

        Pembayaran::create([
            'nama' => 'Amanda Wattson',
            'email' => 'amanda@mail.com',
            'telepon' => '08123456789',
            'tanggal' => date("Y/m/d"),
            'image' => './images/hero-banner.png',
        ]);
    }
}
