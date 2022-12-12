
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connect The Dots: A Place To Belong</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{--    <script type="text/javascript" src="/js/app.js"></script>--}}

    <!-- Styles -->
    <style>
        .container {
            max-width: 850px;
        }
        .reload {
            font-family: Lucida Sans Unicode
        }
    </style>
</head>
<body>
    @section('nav')
    @endsection
{{--  EXAMPLE  --}}
{{--    https://www.bigsouptheatregroup.co.uk/index.php --}}
    <div class="container">
    @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<footer>
{{--    @section('scripts')--}}
{{--        {{ asset('') }}--}}
{{--    @stop--}}
</footer>


