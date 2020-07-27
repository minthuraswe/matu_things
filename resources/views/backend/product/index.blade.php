@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center mb-2">
            <div class="col-md-12">
                <div class="card p-5 shadow">
                    <div class="d-flex">
                        <div><h5 class="pb-3 pr-3">ကုန်ပစ္စည်များ</h5></div>
                        <div><a href="/pd/price/asce" class="btn btn-danger text-light">
                            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-arrow-down-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M10.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L11 3.707 8.354 6.354a.5.5 0 1 1-.708-.708l3-3zm-9 7a.5.5 0 0 1 .708 0L5 12.293l2.646-2.647a.5.5 0 1 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M5 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5z"/>
                              </svg> စျေးနှုန်းအလိုက်စီရန်</a></div>
                        <div class="ml-auto">
                            <a href="/pd/create" class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
                                </svg> အသစ်ထည့်ရန်</a>
                        </div>
                    </div>

                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Date/ Time</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $get)
                            <tr>
                                <th scope="row">{{$get->id}}</th>
                                <td>{{$get->pd_name}}</td>
                                <td class="text-danger">{{$get->pd_price}} MMK</td>
                                <td>
                                    <?php $category = App\Backend\Category::find($get->cat_id) ?>
                                    <span class="badge badge-success px-2 py-1">{{$category->cat_name}}</span>
                                </td>
                                <td> <img src="{{asset('/uploads/' . $get->pd_image)}}"  width="40px" height="40px" title={{$get->pd_image}}></td>
                                <td>{{$get->updated_at->diffforHumans()}}</td>
                                <td>
                                    <a href="{{ URL::to('pd/' . $get->id . '/edit') }}" title="edit" class="pr-1">
                                        <button class="rounded" style="border:1px solid;">
                                            <svg class="bi bi-pencil-square text-dark" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </button>
                                    </a>
                                    <form action="{{ URL::to('pd/' . $get->id ) }}" method="post" style="display: inline;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" title="delete" class="rounded" style="border:1px solid;">
                                            <svg class="bi bi-trash text-dark" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div>
                          {{$product->links()}}
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection