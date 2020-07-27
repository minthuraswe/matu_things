@extends('frontend.layouts.master')
@section('content')


<section class="section-padding-100 blue lighten-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h5 class="pb-0">
                    <a href="/">Home</a> / <a href="/products">Products</a> / 
                    @foreach ($category_product as $get)
                    <?php $category = App\Backend\Category::find($get->cat_id) ?>
                    @endforeach
                    {{$category->cat_name}}
                </h5> 
            </div>
        </div>
    </div>
</section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach ($category_product as $get)
                <div class="col-md-2 text-center mb-4">
                    <div class="card shadow">
                        <img src="{{asset('/uploads/'. $get->pd_image)}}" class="card-img-top" height="130" >
                        <p class="dark-text pt-2">{{$get->pd_name}}</p>
                        <p class="pink-text">{{$get->pd_price}} MMK</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection