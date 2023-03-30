<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorias::create([
            'nome' => 'administrador' 
        ]);

        Categorias::create([
            'nome' => 'marketing' 
        ]);

        Categorias::create([
            'nome' => 'simples' 
        ]);
    }
}
