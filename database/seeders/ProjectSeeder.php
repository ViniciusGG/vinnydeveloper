<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistema de Gestão Esportiva',
                'description' => 'Plataforma completa para gestão de times de futebol, incluindo escalação, estatísticas e acompanhamento de desempenho.',
                'icon' => '🏆',
                'technologies' => ['Laravel', 'React', 'MySQL'],
                'link' => '#',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'title' => 'API de Estatísticas',
                'description' => 'API RESTful para coleta e análise de dados esportivos em tempo real, utilizada por aplicativos móveis e web.',
                'icon' => '🎯',
                'technologies' => ['Node.js', 'Express', 'MongoDB'],
                'link' => '#',
                'is_featured' => true,
                'order' => 2
            ],
            [
                'title' => 'Dashboard de Performance',
                'description' => 'Dashboard interativo para monitoramento de métricas de performance de jogadores e times com gráficos em tempo real.',
                'icon' => '🚀',
                'technologies' => ['Vue.js', 'D3.js', 'PostgreSQL'],
                'link' => '#',
                'is_featured' => true,
                'order' => 3
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
