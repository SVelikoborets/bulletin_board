<?php

namespace App\View\Components;
use App\Models\Category;
use Illuminate\View\Component;

class Sidebar extends Component
{
      public function render()
    {
        return view('components.sidebar', ['categories' =>Category::all()]);
    }
}

