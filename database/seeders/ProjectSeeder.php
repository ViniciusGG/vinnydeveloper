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
                'title' => 'Jeronimo Martins',
                'description' => 'Site institucional da gigante empresa Jeronimo Martins, presente em Portugal, Polônia e Colômbia, com mais de 230 anos de história. Atuei na manutenção e no desenvolvimento de novos módulos do site.',
                'image' => 'jeronimomartins.svg',
                'technologies' => ['WordPress', 'PHP'],
                'link' => 'https://www.jeronimomartins.com/',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'title' => 'Azulfy',
                'description' => 'Aplicativo que auxilia governos locais a monitorar a poluição utilizando dados de satélite em Portugal. Fui responsável pelo desenvolvimento do Backend.',
                'image' => 'azulfy.svg',
                'technologies' => ['Laravel', 'API'],
                'link' => 'https://www.jeronimomartins.com/',
                'is_featured' => true,
                'order' => 2
            ],
            [
                'title' => 'Hotspotty',
                'description' => 'Plataforma para criação e gerenciamento de redes wireless descentralizadas. Atuei na manutenção e evolução do Backend.',
                'image' => 'hotspotty.svg',
                'technologies' => ['Laravel', 'API'],
                'link' => 'https://hotspotty.net/',
                'is_featured' => true,
                'order' => 3
            ],
            [
                'title' => 'Primor',
                'description' => 'Site institucional da renomada marca Primor, exibindo seus produtos e receitas. Fui responsável pela criação completa do site.',
                'image' => 'primor.svg',
                'technologies' => ['WordPress', 'PHP'],
                'link' => 'https://www.primor.com.pt/',
                'is_featured' => true,
                'order' => 4
            ],
            [
                'title' => 'Moose Kids',
                'description' => 'Loja brasileira especializada em roupas e acessórios para bebês e recém-nascidos. Atuei na manutenção e desenvolvimento do e-commerce',
                'image' => 'moosekids.svg',
                'technologies' => ['Shopify', 'Liquid'],
                'link' => 'https://moosekids.com.br/',
                'is_featured' => true,
                'order' => 5
            ],
            [
                'title' => 'Kings Apparel',
                'description' => 'Kings Apparel é uma marca brasileira de streetwear fundada em 2007. Responsável pela manutenção e desenvolvimento do e-commerce',
                'image' => 'kingsapparel.svg',
                'technologies' => ['Shopify', 'Liquid'],
                'link' => 'https://kings-apparel.com/',
                'is_featured' => true,
                'order' => 6
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
