<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Product;

class SearchController extends Controller
{
    public function index(){
        $searchdata = request('search');
        if($searchdata != ""){
            $search = Product::where('pd_name', 'like', '%'.$searchdata.'%')
                            ->orwhere('pd_price', 'like', '%'.$searchdata.'%')->paginate();
            $search_count = $search->count();
            return view('backend.search.result', compact('search','search_count','searchdata'));
        }
    }

}
