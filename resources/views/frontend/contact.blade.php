@extends('frontend.layouts.master')
@section('content')
<section class="section-padding-100 blue lighten-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h5 class="pb-0"><a href="/">Home</a> / Contact 
                </h5> 
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3">
                    Get In Touch
                </h2>
                <form class="border border-light p-5 rounded" action="POST" accept-charset="utf-8">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control mb-4" id="exampleInputPassword1" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn active mr-0 text-light">Send Message
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                            </svg>
                        </button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 border border-light">
                
            </div>
        </div>
    </div>
</section>
@endsection