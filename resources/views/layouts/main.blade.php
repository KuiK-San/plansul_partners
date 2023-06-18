<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <div id="side-bar">
        <ul>
            <li>Listar</li>
            <li>Incluir</li>
            <li>Alterar</li>
        </ul>
    </div>
    @yield('content')
</body>
</html>