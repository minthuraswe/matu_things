@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center mb-2">
            <div class="col-md-8">
                <div class="card p-5 shadow">
                    <h5 class="pb-3">ကုန်ပစ္စည်းပြင်ဆင်ခြင်း</h5>
                    <form action="/pd/{{$product->id}}" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">ကုန်ပစ္စည်း နာမည်</label>
                            <input type="text" class="form-control" name="name" value="{{$product->pd_name}}"  aria-describedby="emailHelp" required>                          
                        </div>
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း စျေးနှုန်း</label>
                            <input type="number" class="form-control" name="price" value="{{$product->pd_price}}" required>
                        </div> 
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း အမျိုးအစားရွေးရန်</label>
                            <select name="category" id="" class="form-control">
                                <option value="">Choose Category</option>
                                @foreach ($category as $get)
                                    @if($get->id == $product->cat_id)
                                        <option value="{{$get->id}}" selected>{{$get->cat_name}}</option>
                                    @else
                                        <option value="{{$get->id}}">{{$get->cat_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း ဓာတ်ပုံထည့်ရန်</label>
                            <input type="file" class="form-control mb-2" name="image" required>
                            <img src="{{asset('/uploads/' . $product->pd_image)}}"  width="60px" height="40px" class="rounded" title={{$product->pd_image}}>
                        </div>
                        <div class="float-right">
                            <a href="/pd" class="btn btn-danger">မပြင်ဘူး</a>
                            <button type="submit" class="btn btn-success">ပြင်မယ်</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection