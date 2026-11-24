<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>

    <nav>
        <a href="/">Accueil</a>
        <a href="/dragons">Tous les dragons</a>
        <a href="/dragons/create">Créer un dragon</a>
    </nav>

    @yield('content')

</body>
</html>