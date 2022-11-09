
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ asset('/build/assets/app.47c5a854.css') }}" rel="stylesheet">
    {{--    <script type="text/javascript" src="/js/app.js"></script>--}}

    <!-- Styles -->
    <style>
        .container {
            max-width: 500px;
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


