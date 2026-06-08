<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'email' => "administrador@gmail.com",
            'password' => "1234567",
            'fecha_hora_registro' => "2026-05-24",
            "habilitado" => 1,
        ]);

        DB::table('usuarios')->insert([
            'email' => "caja@gmail.com",
            'password' => "1234567",
            'fecha_hora_registro' => "2026-05-24",
            "habilitado" => 1,
        ]);

        DB::table('usuarios')->insert([
            'email' => "supervisor@gmail.com",
            'password' => "1234567",
            'fecha_hora_registro' => "2026-05-24",
            "habilitado" => 1,
        ]);
    }
}
