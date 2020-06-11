<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title'     => 'Tecnologia',
        ]);
        Category::create([
            'title'     => 'Programação',
        ]);
        Category::create([
            'title'     => 'Acadêmico',
        ]);
        Category::create([
            'title'     => 'Dia-a-Dia',
        ]);
        Category::create([
            'title'     => 'Mercado de Trabalho',
        ]);
    }
}
