@extends('frontend.layouts.master')
@section('content')
<section class="section-padding-100 blue lighten-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h5 class="pb-0"><a href="/">Home</a> / Gallery 
                </h5> 
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-5 text-center pink lighten-5">
    <div class="container">
        <div class="row">
            @foreach ($gallery as $get)
            <div class="col-md-3 px-1">
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
    </div>
</section>
@endsection