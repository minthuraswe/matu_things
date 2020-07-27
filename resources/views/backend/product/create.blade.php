@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center mb-2">
            <div class="col-md-8">
                <div class="card p-5 shadow">
                    <h5 class="pb-3">ကုန်ပစ္စည်းထည့်ခြင်း</h5>
                    <form action="/pd" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label for="name">ကုန်ပစ္စည်း နာမည်</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{old('name')}}">
                            @if($errors->has('name'))
                            <span class="text-danger font-weight-bold">
                                {{$errors->first('name')}}
                            </span>
                            @endif
                          
                        </div>
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း စျေးနှုန်း</label>
                            <input type="number" class="form-control" name="price" value="{{old('price')}}">
                            @if($errors->has('price'))
                            <span class="text-danger font-weight-bold">
                                {{$errors->first('price')}}
                            </span>
                            @endif
                        </div> 
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း အမျိုးအစားရွေးရန်</label>
                            <select name="category" id="" class="form-control">
                                <option value="">Choose Category</option>
                                @foreach ($category as $get)
                                    @if(Request::old('category') == $get->id)
                                        <option value="{{$get->id}}" selected>{{$get->cat_name}}</option>
                                    @else
                                        <option value="{{$get->id}}">{{$get->cat_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                            <span class="text-danger font-weight-bold">
                                {{$errors->first('category')}}
                            </span>
                            @endif
                        </div> 
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း ဓာတ်ပုံထည့်ရန်</label>
                            <input type="file" class="form-control" name="image">
                            @if($errors->has('image'))
                            <span class="text-danger font-weight-bold">
                                {{$errors->first('image')}}
                            </span>
                            @endif
                        </div>
                        <div class="float-right">
                            <a href="/pd" class="btn btn-danger">မထည့်ဘူး</a>
                            <button type="submit" class="btn btn-success">ထည့်မယ်</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection