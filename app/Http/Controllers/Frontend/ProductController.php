<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Product;
use App\Backend\Category;

class ProductController extends Controller
{
    public function index(){
        $product = Category::inRandomOrder()->get();
        return view('frontend.mainpd', compact('product'));
    }

    public function categoryProduct($id){
        $category_product = Product::where('cat_id', $id)->get();
        $category = Category::find($id);
        return view('frontend.product', compact('category_product', 'category'));
    }
}
