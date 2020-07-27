@extends('frontend.layouts.master')
@section('content')
    <section class="section-padding-100 blue lighten-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <h5 class="pb-0"><a href="/">Home</a> / Products 
                    </h5> 
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach ($product as $get)
                <div class="col-md-6 pr-1 pl-1">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img src="{{asset('/uploads/' .$get->cat_image)}}" class="w-100 rounded" style="max-height: 400px;">
                            <div class="mask flex-center rgba-pink-strong rounded">
                                <?php $replacingname = str_replace(' ', '-', $get->cat_name) ?>
                                <a href="/products/{{$get->id}}/{{$replacingname}}"><h3 class="white-text ">{{$get->cat_name}}</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection