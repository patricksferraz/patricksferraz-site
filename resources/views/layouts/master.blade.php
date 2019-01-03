<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="Author" content="{{ config('app.author') }}"/>
    <meta name="description" content="@yield('hdescription', 'Desenvolvedor de software oferecendo sempre soluções inteligentes e inovadoras para suas necessidades')"/>
    <meta name="application-name" content = "{{ config('app.name') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{-- <link rel="icon" type="image/x-icon" href="{{ mix('favicon.ico') }}"> --}}
    <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.6.3/css/all.css') }}" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    @section('headCss')
        <link rel="stylesheet" type="text/css" href="{{ mix('css/materialize.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/fonts-google.css') }}"/>
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
        <script type="text/javascript" src="{{ mix('js/jquery-3.3.1.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/materialize.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/init.js') }}"></script>
    @show

</body>
</html>
