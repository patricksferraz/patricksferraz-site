<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="Author" content="{{ config('app.author') }}"/>
    <meta name="description" content="@yield('hdescription', 'Desenvolvedor de software oferecendo sempre soluções inteligentes e inovadoras para suas necessidades')"/>
    <meta name="application-name" content = "{{ config('app.name') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" type="image/png" href="{{ mix('favicon.png') }}">
    <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.7.2/css/all.css') }}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    @section('headCss')
        <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css') }}"/>
    @show

    <title>patricksferraz | @yield('title', 'Home Page')</title>
</head>

<body>

    @section('header')
        @include('includes.header')
    @show

    <main>
        @yield('content')
    </main>

    @section('footer')
        @include('includes.footer')
    @show

    @section('scripts')
        <script type="text/javascript" src="{{ mix('js/all.js') }}"></script>
    @show

</body>
</html>
