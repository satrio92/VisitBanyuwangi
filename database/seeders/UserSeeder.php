<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'Hazel Stafford',
            'email' => 'hazel@mail.com',
            'password' => bcrypt('hazel123')
        ]);

        User::create([
            'nama' => 'Monica Ellison',
            'email' => 'monica@mail.com',
            'password' => bcrypt('monica123')
        ]);

        User::create([
            'nama' => 'Ruben Galvan',
            'email' => 'ruben@mail.com',
            'password' => bcrypt('ruben123'),
            'isAdmin' => true
        ]);

        User::create([
            'nama' => 'Brooks Waller',
            'email' => 'brooks@mail.com',
            'password' => bcrypt('brooks123')
        ]);

        User::create([
            'nama' => 'Amanda Wattson',
            'email' => 'amanda@mail.com',
            'password' => bcrypt('amanda123'),
            'isAdmin' => true,
        ]);
    }
}
