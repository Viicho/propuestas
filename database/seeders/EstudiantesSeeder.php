<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ["rut"=>"10932457-4","nombre"=>"Bruce","apellido"=>"Challinor","email"=>"bblow0@posterous.com"],
            ["rut"=>"11932457-4","nombre"=>"Bruce","apellido"=>"Challinor","email"=>"bblow0@posterous.com"],
            ["rut"=>"12932457-4","nombre"=>"Bruce","apellido"=>"Challinor","email"=>"bblow0@posterous.com"],
            ["rut"=>"13932457-4","nombre"=>"Bruce","apellido"=>"Challinor","email"=>"bblow0@posterous.com"],
            ["rut"=>"14932457-4","nombre"=>"Bruce","apellido"=>"Challinor","email"=>"bblow0@posterous.com"],
            ["rut"=>"15932457-4","nombre"=>"Bruce","apellido"=>"Challinor","email"=>"bblow0@posterous.com"]
        ]);
    }
}