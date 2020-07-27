@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center mb-2">
            <div class="col-md-8">
                <div class="card p-5 shadow">
                    <h5 class="pb-3">ကုန်ပစ္စည်းအမျိုးအစား ပြင်ဆင်ခြင်း</h5>
                    <form action="/cat/{{$category->id}}" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">ကုန်ပစ္စည်းအမျိုးအစား နာမည်</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$category->cat_name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း အမျိုးအစားဓာတ်ပုံ ထည့်ရန်</label>
                            <input type="file" class="form-control mb-2" name="image" required>
                            <img src="{{asset('/uploads/' . $category->cat_image)}}"  width="60px" height="40px" class="rounded" title={{$category->pd_image}}>
                        </div>
                        <div class="float-right">
                            <a href="/cat" class="btn btn-danger">မပြင်ဘူး</a>
                            <button type="submit" class="btn btn-success">ပြင်မယ်</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection