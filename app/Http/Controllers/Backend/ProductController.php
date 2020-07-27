<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use App\Backend\Product;
use App\Backend\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(10);
        return view('backend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('cat_name', 'asc')->get();
        return view('backend.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $image = request('image');
  
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = imagePath();
        $image->move($path, $filename);

        $product = Product::create([
            'pd_name' => request('name'),
            'pd_price' => request('price'),
            'cat_id' => request('category'),
            'pd_image' => $filename,
        ]);

        $product->save();
        return redirect('pd')->with('message', 'ကုန်ပစ္စည်းထည့်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('backend.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = request('image');
  
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = imagePath();
        $image->move($path, $filename);

        $product = Product::find($id);
        $product->pd_name = request('name');
        $product->pd_price = request('price');
        $product->cat_id = request('category');
        $product->pd_image = $filename;
        
        $product->save();
        return redirect('pd')->with('message', 'ကုန်ပစ္စည်းပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect('pd')->with('message', 'ကုန်ပစ္စည်းဖျက်ခြင်း အောင်မြင်ပါသည်');
    }

    public function asce(){
        $price = Product::orderBy('pd_price', 'asc')->get();
        return view('backend.product.ascending', compact('price'));
    }
}
