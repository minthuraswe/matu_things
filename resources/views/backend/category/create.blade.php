@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center mb-2">
            <div class="col-md-8">
                <div class="card p-5 shadow">
                    <h5 class="pb-3">ကုန်ပစ္စည်းအမျိုးအစားထည့်ခြင်း</h5>
                    <form action="/cat" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label for="name">ကုန်ပစ္စည်းအမျိုးအစား နာမည်</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{old('name')}}">
                            @if($errors->has('name'))
                            <span class="text-danger font-weight-bold">
                                {{$errors->first('name')}}
                            </span>
                            @endif
                          
                        </div>
                        <div class="form-group">
                            <label for="text">ကုန်ပစ္စည်း အမျိုးအစားဓာတ်ပုံ ထည့်ရန်</label>
                            <input type="file" class="form-control" name="image">
                            @if($errors->has('image'))
                            <span class="text-danger font-weight-bold">
                                {{$errors->first('image')}}
                            </span>
                            @endif
                        </div>
                        <div class="float-right">
                            <a href="/cat" class="btn btn-danger">မထည့်ဘူး</a>
                            <button type="submit" class="btn btn-success">ထည့်မယ်</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection