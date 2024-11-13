<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ClienteTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('clientes')->insert{
            [
                [
                    'nombre' => 'José',
                    'apellido' => 'Becerra',
                    'correo' => 'ricardo@gmail.com',
                    'telefono' => '24356987714'
                ],
                [
                    'nombre' => 'José',
                    'apellido' => 'Becerra',
                    'correo' => 'ricardo@gmail.com',
                    'telefono' => '24356987714'
                ],
                [
                    'nombre' => 'José',
                    'apellido' => 'Becerra',
                    'correo' => 'ricardo@gmail.com',
                    'telefono' => '24356987714'
                ]
            ]}
        ;
    }
}
