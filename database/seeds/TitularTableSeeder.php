<?php

use Illuminate\Database\Seeder;
use App\Titular;

class TitularTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titular = new Titular();
        $titular->nombres = 'Bladimir';
        $titular->apellidos = 'Guerrero';
        $titular->cedula = '104503443';
        $titular->correo = 'blacho@hotmail.com';
        $titular->save();
    }
}
