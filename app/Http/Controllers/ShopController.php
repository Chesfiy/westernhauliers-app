<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class ShopController extends Controller
{
    //


public function index(){
 $categories = Category::with([
        'categoryType.machines',
        'machines' => function ($query) {
            $query->whereNull('category_type_id');
        }
    ])->get();
    return view('shop_view', compact(['categories']));
}



}