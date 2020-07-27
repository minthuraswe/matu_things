<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Matu Things</title>
    <link rel="shortcut icon" type="image/png"  href="{{asset('css/images/mylogo.PNG')}}">

    <!-- booststrap cdn css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <!-- style of css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body style="background-color:rgba(188,188,188,0.2 );">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2  p-0 ">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-10 p-0">
                @include('layouts.navbar')
                @yield('content')    
            </div>
        </div>
    </div>


    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <!-- bootstrap cdn js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>

</html>