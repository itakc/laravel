<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'Buro -@yield('title')</title>
    @section('style')

<!-- votre bootstrap ici -->
<!-- votre <link rel="stylesheet"href="-->
<!-- votre css ici -->
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @show

    @section('script')
<!-- votre bootstrap ici -->
<!-- votre <script src="..."></script> -->
<!-- votre Js ici -->
    <script src="{{ asset('js/app.js') }}"defer></script>

    @show
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">"lien</a></li>
                <li><a href="#">"lien</a></li>
                <li><a href="#">"lien</a></li>
                <li><a href="#">"lien</a></li>

            <ul>
</nav>
</header>

@section('content')
@show

<footer>
    Copyright 2022 Foo bar baz 2022
</footer>

</body>
</html>