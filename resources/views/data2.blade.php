<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Sample Project</title>
</head>
<body>
<h1>Data 2 Page</h1>
<nav>
    <ul>
        <li><a href="{{ route('route-index') }}">Index</a></li>
        <li><a href="{{ route('route-data1') }}">Data 1</a></li>
        <li><a href="{{ route('route-data2') }}">Data 2</a></li>
        <li><a href="{{ route('route-about') }}">About</a></li>
    </ul>
</nav>
<p>Category data from route: {{ $category }}</p>
<p>Items data from controller</p>
<ol>
    @foreach($storages as $storage)
        <li>{{ $storage }}</li>
    @endforeach
</ol>
</body>
</html>
