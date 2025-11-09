<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'João da Silva',
            'email' => 'joao@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Maria Oliveira',
            'email' => 'maria@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
