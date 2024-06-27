<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'slug' => 'news',
                'name' =>'Новости'
            ],
            [
                'slug' => 'lost',
                'name' =>'Пропажи'
            ],
            [
                'slug' => 'found',
                'name' =>'Находки'
            ],
            [
                'slug' => 'resale',
                'name' =>'Вторые руки'
            ],
            [
                'slug' => 'press',
                'name' =>'Пресса'
            ],
            [
                'slug' =>'life',
                'name' =>'Life'
            ],
            [
                'slug' => 'work',
                'name' =>'Работа'
            ],
            [
                'slug' => 'rest',
                'name' =>'Отдых'
            ],
        ]);
    }
}
