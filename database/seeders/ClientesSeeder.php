<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente1 = new Cliente();
        $cliente1->nombre="Piero";
        $cliente1->apellido="Mamani";
        $cliente1->dni="73348118";
        $cliente1->email="jesuscristorey@gmail.com";
        $cliente1->passwd="carlota";
        $cliente1->save();
    }
}
