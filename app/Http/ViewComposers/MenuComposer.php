<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Support\Facades\Cache;

class MenuComposer
{
    public function compose(View $view)
    {
        // Cache for 2 hours to improve performance
        $categories = Cache::remember('menu_categories', now()->addHours(2), function () {
            return Category::with('categoryType')->get();
        });

        $categoryTypes = Cache::remember('menu_machines', now()->addHours(2), function () {
            return CategoryType::all();
        });

        $view->with('menuCategories', [ 'categories' => $categories, 'categoryTypes' => $categoryTypes]);
    }
}
