<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('subcategories')->insert([
            [
                'slug' => 'events',
                'name' =>'Мероприятия',
                'category_id' =>1,
            ],
            [
                'slug' => 'day',
                'name' =>'Событие дня',
                'category_id' =>1,
            ],
            [
                'slug' => 'horoscope',
                'name' =>'Гороскоп',
                'category_id' =>1,
            ],
            [
                'slug' => 'weather',
                'name' =>'Погода',
                'category_id' =>1,
            ],
            [
                'slug' => 'things',
                'name' =>'Вещи',
                'category_id' =>2,
            ],
            [
                'slug' => 'technic',
                'name' =>'Техника',
                'category_id' =>2,
            ],
            [
                'slug' => 'pets',
                'name' =>'Питомцы',
                'category_id' =>2,
            ],
            [
                'slug' => 'people',
                'name' =>'Люди',
                'category_id' =>2,
            ],
            [
                'slug' => 'jewelry',
                'name' =>'Драгоценности',
                'category_id' =>3,
            ],
            [
                'slug' => 'finds',
                'name' =>'Вещи',
                'category_id' =>3,
            ],
            [
                'slug' => 'found_pets',
                'name' =>'Питомцы',
                'category_id' =>3,
            ],
            [
                'slug' => 'buy',
                'name' =>'Куплю',
                'category_id' =>4,
            ],
            [
                'slug' => 'sale',
                'name' =>'Продам',
                'category_id' =>4,
            ],
            [
                'slug' => 'stories',
                'name' =>'Интересные истории',
                'category_id' =>5,
            ],
            [
                'slug' => 'true_stories',
                'name' =>'Чистая правда',
                'category_id' =>5,
            ],
            [
                'slug' => 'false_stories',
                'name' =>'Грязная ложь',
                'category_id' =>5,
            ],
            [
                'slug' => 'life_hacks',
                'name' =>'Лайфхаки',
                'category_id' =>6,
            ],
            [
                'slug' => 'recipes',
                'name' =>'Рецепты',
                'category_id' =>6,
            ],
            [
                'slug' => 'hobby',
                'name' =>'Хобби',
                'category_id' =>6,
            ],
            [
                'slug' => 'trips',
                'name' =>'Путешествия',
                'category_id' =>6,
            ],
            [
                'slug' =>'vacancies',
                'name' =>'Вакансии',
                'category_id' =>7,
            ],
            [
                'slug' =>'summary',
                'name' =>'Резюме',
                'category_id' =>7,
            ],
            [
                'slug' =>'vouchers',
                'name' =>'Путевки',
                'category_id' =>8,
            ],
            [
                'slug' =>'tours',
                'name' =>'Горящие туры',
                'category_id' =>8,
            ],
            [
                'slug' =>'excursion',
                'name' =>'Экскурсии',
                'category_id' =>8,
            ],
            [
                'slug' =>'trip',
                'name' =>'Турпоходы',
                'category_id' =>8,
            ],
        ]);
    }
}
