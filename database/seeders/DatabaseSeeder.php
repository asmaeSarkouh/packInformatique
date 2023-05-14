<?php

namespace Database\Seeders;

use App\Models\Chart;
use App\Models\Etablisement;
use App\Models\Material;
use App\Models\Rapport;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $type=
         [
            ['title'=>'camera'],['title'=>'ordinateur'],
            ['title'=>'imprimante'],[ 'title'=>'ecran'],
            ['title'=>'souris'],['title'=>'unité central'],
            ['title'=>'clavier'],['title'=>'scanner'],
            ['title'=>'hauts parlaur'],['title'=>'cable imprimante'],
            ['title'=>'cable vga'],['title'=>'data show'],['title'=>'router'],
         ];
         foreach ($type as $t) {
            Type::factory()->create([
                'title' => $t['title']
        ]);}
        // User::factory(30)->create();
        Material::factory(30)->create();
        Etablisement::factory(30)->create();
        Chart::factory(10)->create();
        // Rapport::factory(10)->create();
    }
}
