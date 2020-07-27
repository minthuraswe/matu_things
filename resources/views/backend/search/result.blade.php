@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    @if(isset($searchdata))
                    @if($search_count == true)
                        <div class="col-md-12 pb-2 pl-0">
                            <b> {{$search_count}} </b> 
                                @if($search_count < 2) 
                                result 
                                @else 
                                results 
                                @endif for "{{$searchdata}}"
                        </div>
                        <div class="row">
                            @foreach ($search as $get)
                                <div class="col-md-2 text-center pb-2">
                                    <div class="card shadow">
                                        <img src="{{asset('/uploads/'. $get->pd_image)}}" class="card-img-top" height="130" title="{{$get->pd_image}}">
                                        <p class="text-secondary pt-2">{{$get->pd_name}}</p>
                                        <p class="text-danger">{{$get->pd_price}} MMK</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="row mx-auto p-5">
                            <div class="col-md-12">
                                <h5>The <span class="text-warning">{{$searchdata}}</span> was not found. Make sure your text in search. Sorry!</h5>
                            </div>
                        </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection