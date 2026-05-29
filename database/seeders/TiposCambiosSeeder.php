<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class TiposCambiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.24",
            'fecha_cambio' => "2026-05-24",
            "fecha_hora_registro" => "2026-05-24 11:00:00",
            "habilitado" => 1,
        ]);

         DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.25",
            'fecha_cambio' => "2026-05-25",
            "fecha_hora_registro" => "2026-05-25 11:00:00",
            "habilitado" => 1,
        ]);

         DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.26",
            'fecha_cambio' => "2026-05-26",
            "fecha_hora_registro" => "2026-05-26 11:00:00",
            "habilitado" => 1,
        ]);

        DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.27",
            'fecha_cambio' => "2026-05-27",
            "fecha_hora_registro" => "2026-05-27 11:00:00",
            "habilitado" => 1,
        ]);

        DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.28",
            'fecha_cambio' => "2026-05-28",
            "fecha_hora_registro" => "2026-05-28 11:00:00",
            "habilitado" => 1,
        ]);

        DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.291",
            'fecha_cambio' => "2026-05-29",
            "fecha_hora_registro" => "2026-05-29 11:00:00",
            "habilitado" => 1,
        ]);

        DB::table('tipos_cambios')->insert([
            'id_moneda' => 1,
            'valor' => "3.292",
            'fecha_cambio' => "2026-05-29",
            "fecha_hora_registro" => "2026-05-29 11:00:00",
            "habilitado" => 0,
        ]);
    }
}
