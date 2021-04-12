<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('css/site.css') }}"> -->
        <link rel="icon" type="image/png" href="{{ url('imgs/favicon.png') }}">
        <style>
            *{
                background-color: ddd;
            }

            table, td, tr, th, div{
                background-color: fff;
            }

        </style>
    </head>

    <body class="container">
        @yield('content') 
    
    </body>

</html>