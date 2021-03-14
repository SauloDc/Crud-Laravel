<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('css/site.css') }}"> -->
        <link rel="icon" type="image/png" href="{{ url('imgs/favicon.png') }}">
    </head>

    <body style="max-width: 1200px; margin: 0 auto;">
        <a class='btn btn-primary' style="float: right;" href="{{route('product.index')}}">Home</a>
        @yield('content') 
    
    </body>

</html>