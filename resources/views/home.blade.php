@extends('layouts.master')

@section('content')
<div class="container pt-5 pb-5">
    <div class="row mb-2">
        @foreach ($product as $get)
        <div class="col-md-2 text-center mb-4">
            <div class="card shadow">
                <img src="{{asset('/uploads/'. $get->pd_image)}}" class="card-img-top" height="130" title="{{$get->pd_image}}">
                <p class="text-secondary pt-2">{{$get->pd_name}}</p>
                <p class="text-danger">{{$get->pd_price}} MMK</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

