<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="Author" content="{{ config('app.author') }}"/>
    <meta name="description" content="@yield('hdescription', 'Desenvolvedor de software oferecendo sempre soluções inteligentes e inovadoras para suas necessidades')"/>
    <meta name="application-name" content = "{{ config('app.name') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- <link rel="icon" type="image/x-icon" href="{{ mix('favicon.ico') }}"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @section('headCss')
        {{-- <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/> --}}
        <link rel="stylesheet" type="text/css" href="{{ mix('css/materialize.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/psferraz.css') }}"/>
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
        {{-- <script type="text/javascript" src="{{ mix('js/app.js') }}"></script> --}}
        <script type="text/javascript" src="{{ mix('js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/materialize.js') }}"></script>
    @show

</body>
</html>
