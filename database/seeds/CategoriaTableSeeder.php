<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Categoria::create(['nome' => 'Eletrodomestico']);
        Categoria::create(['nome' => 'Eletronica']);
        Categoria::create(['nome' => 'Fuzil de Assalto']);
        Categoria::create(['nome' => 'Smartphone']);
    }   
}
