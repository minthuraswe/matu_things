<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(10);
        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $image = request('image');
  
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = imagePath();
        $image->move($path, $filename);

        $category = Category::create([
            'cat_name' => request('name'),
            'cat_image' => $filename,
        ]);
        
        return redirect('cat')->with('message', 'ကုန်ပစ္စည်းအမျိုးအစားထည့်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
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

        $category = Category::find($id);
        $category->cat_name = request('name');
        $category->cat_image = $filename;
        
        $category->save();
        return redirect('cat')->with('message', 'ကုန်ပစ္စည်းအမျိုးအစားပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();
        return redirect('cat')->with('message', 'ကုန်ပစ္စည်းအမျိုးအစားဖျက်ခြင်း အောင်မြင်ပါသည်');;
    }
}
