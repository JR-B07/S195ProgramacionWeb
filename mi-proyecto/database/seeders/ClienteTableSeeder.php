<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Ricardo',
                'apellido' => 'Becerra',
                'correo' => 'ricardobec@outlook.com',
                'telefono' => '12345678',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Jose',
                'apellido' => 'Covarrubias',
                'correo' => 'josecova@gmail.com',
                'telefono' => '12345678',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'David',
                'apellido' => 'Saucedo',
                'correo' => 'DavidoS@hotmail.com',
                'telefono' => '12345678',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
