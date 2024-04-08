<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="aluno.css">
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
                    <a href="perfil-aluno">Ferfil</a>
                </li>
                <li>
                    <a href="boletim">Boletim</a>
                </li>
                <li>
                    <a href="">Calendario</a>
                    <ul>
                        <li>
                            <a href="">Provas</a>
                        </li>
                        <li>
                            <a href="">Aulas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="noticias">Noticias</a>
                </li>
            </ul>
            <a href="sair"><input type="button" value="Sair"></a>
        </nav>
    </header>
    @yield('conteudo')
</body>
</html>