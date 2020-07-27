<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Product;

class ImageController extends Controller
{
    public function index(){
        $gallery = Product::inRandomOrder()->get();
        return view('frontend.gallery', compact('gallery'));
    }
}
