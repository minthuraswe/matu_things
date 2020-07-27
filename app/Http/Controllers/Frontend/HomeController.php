<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Product;
use App\Backend\Category;

class HomeController extends Controller
{
    public function index(){
        $gallery = Product::inRandomOrder()->limit(9)->get();
        $category = Category::inRandomOrder()->limit(1)->get();
        return view('frontend.index', compact('category', 'gallery'));
    }

}
