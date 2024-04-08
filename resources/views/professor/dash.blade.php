
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="professor.css">
    <link rel="stylesheet" href="cssM/perfil.css">
</head>

<body>
    <header>
        <nav class="nav ">
            <ul >
                <li class="">
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="perfil-prof">Ferfil</a>
                </li>
                <li>
                    <a href="prof">MiniPauta</a>
                </li>
            </ul>
            <a href="sair"><input type="button" value="Sair"></a>
        </nav>
    </header>

    @yield('conteudo')
</body>
</html>