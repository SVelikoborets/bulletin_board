<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private const AD_VALIDATOR = [
        'title' => 'required|max:50',
        'description' => 'required',
        'categories_ids'=>'required'
    ];

    private const USER_VALIDATOR = [
        'userName' => 'required|max:50',
        'email' => 'required|email',
        'status'=>'required'
    ];

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $data = [
            'users' =>User::latest()->paginate(8),
            'title' => 'Пользователи'
        ];
        return view('admin.users', $data);
    }


    public function ads()
    {
        $data = [
            'ads' =>Ad::with(['category','subcategory','user'])->latest()->paginate(8),
            'title' => 'Объявления'
        ];
        return view('admin.ads', $data);
    }


    public function editAd(Ad $ad)
    {
        return view('admin.edit.ad',
            [
                'ad'=>$ad,
                'categories' => Category::with('subcategories')->get(),
            ]);
    }

    public function editUser(User $user)
    {
        return view('admin.edit.user', ['user'=>$user]);
    }

    public function updateAd(Request $request, Ad $ad)
    {
        $validated = $request->validate(self::AD_VALIDATOR);
        $arr = explode('/', $validated['categories_ids']);
        $categoryId = $arr[0];
        $subcategoryId = $arr[1];

        $ad->fill([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'category_id'=>$categoryId,
            'subcategory_id'=>$subcategoryId,
        ]);
        $ad->save();

        return redirect()->route('admin.dashboard');
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate(self::USER_VALIDATOR);

        $user->fill([
            'name' => $validated['userName'],
            'email' => $validated['email'],
            'banned' => $validated['status']
        ]);
        $user->save();

        return redirect()->route('admin.dashboard');
    }
}
