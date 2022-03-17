<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .container{
            background-color: grey;
        }
        .card{
            margin: 20px;
            background-color: transparent;
            border: none;
            margin: auto;
        }
        .card-header, .card-footer{
            background-color: transparent;
            border: none;
        }
        .details{
            margin-top: 10px;
            margin-bottom: 10px;
            border: black 1px solid;
        }
        .card-title{
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    @include("layouts.menu")
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success my-2">{{ Session::get('success') }}</div>
        @endif
        {{--    @include("layouts.menu")--}}
        @yield("content")
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield("innerjs")
</body>
</html>
