<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'mnina',
            'email' => 'dnina826@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(10),
            'direccion' => '',
            'telefono' => '',
            'ci' => '8537800',
            'nombres' => 'MAURICIO',
            'paterno' => 'NINA',
            'materno' => 'CANAVIRI',
            'fec_nac' => '1995-01-01',
            'activo' => '1'
        ]);
    }
}
