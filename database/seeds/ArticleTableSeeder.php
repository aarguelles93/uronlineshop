<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        DB::table('articles')->insert([
            ['description' => 'Reloj Casio 1520',
            'cost' => 120000]
        ]);
        DB::table('articles')->insert([
            ['description' => 'Camiseta Polo',
            'cost' => 80000]
        ]);
        DB::table('articles')->insert([
            ['description' => 'Cinturón Converse riata',
            'cost' => 55000]
        ]);
        DB::table('articles')->insert([
            ['description' => 'Smartwatch Amazfit Bip',
            'cost' => 200000]
        ]);

    }
}
