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
<h1>About Page</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ducimus quaerat sed. A ab architecto cupiditate dolor, error esse illum incidunt molestiae nemo nobis nostrum quas quo ullam veniam vero!</p>
<nav>
    <ul>
        <li><a href="{{ route('route-index') }}">Index</a></li>
        <li><a href="{{ route('route-about') }}">About</a></li>
    </ul>
</nav>
</body>
</html>