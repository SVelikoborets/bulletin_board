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
     //dump($data);
     return view('categories.list', $data);
  }

    //вывод списка подкатегорий
  public function sublist($slug)
  {
      $category = Category::where('slug', $slug)->firstOrFail();
      return view('categories.sublist', [
          'category' => $category,
      ]);
  }
}
