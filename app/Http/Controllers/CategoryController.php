<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Ad;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //вывод списка категорий
  public function index()
  {
     $data = [
         'categories' => Category::all(),
         'title' => 'Главная'
     ];

     return view('categories.list', $data);
  }

    //вывод списка подкатегорий
  public function sublist($slug)
  {
      return view('categories.sublist', [
          'category' => Category::where('slug', $slug)->firstOrFail(),
      ]);
  }
}
