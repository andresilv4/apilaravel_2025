<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
            //'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);

        Tarefa::insert([
            [
                "texto" => "Preparar o café da manhã",
            ],
            [
                "texto" => "Levar as crianças para a escola (se aplicável)",
            ],
            [
                "texto" => "Verificar e-mails importantes",
            ],
            [
                "texto" => "Participar da reunião de equipe das 10h",
            ],
            [
                "texto" => "Almoçar e fazer uma pequena pausa",
            ],
            [
                "texto" => "Revisar o relatório do projeto X",
            ],
            [
                "texto" => "Fazer uma caminhada de 30 minutos",
            ],
            [
                "texto" => "Responder às pendências da tarde",
            ],
            [
                "texto" => "Preparar o jantar",
            ],
            [
                "texto" => "Ler 1 capítulo de um livro",
            ],
            [
                "texto" => "Organizar a área de trabalho para o dia seguinte",
            ],
        ]);
        
    }
}
