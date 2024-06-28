<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    private const AD_VALIDATOR = [
        'title' => 'required|max:50',
        'description' => 'required',
        'categories_ids'=>'required'
    ];

    //форма создания объявления
    //по выбранной подкатегории (если она выбрана)
    public function create($selected = null)
    {
        $categories = Category::with('subcategories')->get();
        return view('ads.create',['categories' =>$categories, 'selected' =>$selected]);
    }

    //сохранение объявления в бд,если пользователь активен
    public function store(Request $request)
    {
        if (Auth::user()->isBanned()) {
            return redirect()
                ->route('login')
                ->with('error', 'Вы не можете создавать объявления, так как ваш аккаунт заблокирован.');
        }

       $validated = $request->validate(self::AD_VALIDATOR);
       $arr = explode('/', $validated['categories_ids']);
       $categoryId = $arr[0];
       $subcategoryId = $arr[1];

        Ad::create([
            'title' => $validated['title'],
            'description' =>$validated['description'],
            'user_id' => $request->input('user_id'),
            'category_id'=>$categoryId,
            'subcategory_id'=>$subcategoryId,
        ]);

        $request->session()->flash('status', 'Объявление успешно добавлено.');
        return redirect()->route('home');
    }

    //просмотр объявления
    public function show(Ad $ad)
    {
        return view('ads.show',[
            'ad'=>$ad,
        ]);
    }

    //вывод списка объявлений по категории-подкатегории
    public function advts($category, $subcategory)
    {
        $subcategory = Subcategory::where( 'slug', $subcategory )->firstOrFail();
        $data = [
            'ads' => $subcategory->ads()
            ->whereHas('user', function ($query) {
                $query->where('banned', false);
            })
            ->latest()
            ->paginate(5),
            'subcategory'=>$subcategory,
            'category'=>$category
        ];

        return view('ads.list', $data);
    }
}
