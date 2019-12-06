<html>
    <head>
    <link rel="stylesheet" href="style.css">
        <title>LAYTOUT</title>
        {!! Html::style('assets/css/bootstrap.min.css') !!}
    </head>
    <body>
        <h1> INI MAH LAYOUT   </h1>
        @yield('content')
        {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>