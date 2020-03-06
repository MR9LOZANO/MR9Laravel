<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','MR9')</title>
</head>
<body>
    <nav>
        <ul>
                <li><a href="../public">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="porta">Portafolio</a></li>
                <li><a href="contacto">Contacto</a></li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>