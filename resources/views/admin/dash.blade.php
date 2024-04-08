<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="admin.css">
    
</head>
<body>
    <nav>

        <div class="user">
            <span href="" class="icon"></span href="">
            <a href="" class="txt-link">Usuario</a href="">
            </div>
        <ul class="menu-lateral">
            <li>
                <span href="" class="icon"></span href="">
                <a href="" class="txt-link">DashBoard</a href="">
            </li>
            <li>
                <span href="" class="icon"></span href="">
                <a href="" class="txt-link">Perfil</a href="">
            </li>
            <li class="mais">
                <span href="" class="icon"></span href="">
                <a href="" class="txt-link ">Escolas +</a href="">
                    <ul>
                        <li>
                            <span href="" class="icon"></span href="">
                                <a href="" class="txt-link">Ver</a href="">
                        </li>
                        <li>
                            <span href="" class="icon"></span href="">
                                <a href="" class="txt-link">Nova</a href="">
                        </li>
                    </ul>
            </li>
            <li class="mais">
                <span href="" class="icon"></span href="">
                <a href="" class="txt-link">Candidatos +</a href="">

                    <ul>
                        <li>
                            <span href="" class="icon"></span href="">
                                <a href="" class="txt-link">Ver</a href="">
                        </li>
                        <li>
                            <span href="" class="icon"></span href="">
                                <a href="" class="txt-link">Novo</a href="">
                        </li>
                    </ul>
            </li>
            <li>
                <span href="" class="icon"></span href="">
                <a href="" class="txt-link">Clientes</a href="">
            </li>
            <li>
                <span href="" class="icon"></span href="">
                <a href="" class="txt-link">Configuracoes</a href="">
            </li>
            <li>
                <span href="" class="icon"></span href="">
                <a href="sair" class="txt-link">Sair</a href="">
            </li>
        </ul>
    </nav>
    @yield('conteudo')
    
</body>
</html>