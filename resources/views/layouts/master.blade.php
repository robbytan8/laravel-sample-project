<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Web Programming</title>
    @yield('more-css')
</head>
<body>
<h1>Laravel Web Programming</h1>
<nav>
    <ul>
        <li><a href="{{ route('fc-view') }}">Family Card Mgmt</a></li>
        <li><a href="#">Citizen Mgmt</a></li>
    </ul>
</nav>
@yield('main-content')
@yield('more-js')
</body>
</html>
