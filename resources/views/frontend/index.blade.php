@extends('frontend.layouts.master')
@section('content')

    @include('frontend.layouts.slider')
    <section class="pt-5 pb-5 pink lighten-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2>Welcome to Matu Things</h2>
                    <p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit provident earum facere, quam, non blanditiis doloremque quibusdam molestias iste quae unde atque? Nihil sequi voluptas similique officia officiis animi tempore?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5 text-center blue lighten-5">
        <div class="container">
            <h2 class="mb-3">Our Products</h2>
            <div class="row">
                @foreach ($category as $get)
                <div class="col-md-12 px-1">
                    <div class="card mb-2">
                        <div class="view overlay">
                            <img src="{{asset('/uploads/' .$get->cat_image)}}" class="w-100 rounded" style="max-height: 550px;">
                            <div class="mask flex-center rgba-pink-strong rounded">
                                <?php $replacingname = str_replace(' ', '-', $get->cat_name) ?>
                                <a href="/products/{{$get->id}}/{{$replacingname}}"><h3 class="white-text ">{{$get->cat_name}}</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="/products">
                <h5 class="mt-3 text-right">more products
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                    </svg>
                </h5>
            </a>
        </div>
    </section>

    <section class="pt-5 pb-5 text-center pink lighten-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="mb-3">Gallery</h2>
                    <div class="row">
                        @foreach ($gallery as $get)
                        <div class="col-md-4 px-1">
                            <div class="card mb-2">
                                <div class="view overlay">
                                    <img src="{{asset('/uploads/' .$get->pd_image)}}" class="w-100 rounded" style="max-height: 200px;">
                                    <div class="mask rgba-pink-strong rounded">
                                        <div class="flex-center" style="height: 70%">
                                            <span class="d-block p-2 blue lighten-3 text-dark">{{$get->pd_name}}</span>
                                            <span class="d-block p-2 pink lighten-5 text-dark">{{$get->pd_price}} MMK</span>
                                        </div>
                                        <a href="tel:+959787249717"><h5 class="white-text">Call Now</h5></a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="/gallery">
                        <h5 class="mt-3 text-right">view more
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                            </svg>
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection