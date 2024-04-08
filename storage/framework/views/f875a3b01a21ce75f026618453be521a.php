
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
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

    <?php echo $__env->yieldContent('conteudo'); ?>
</body>
</html><?php /**PATH /home/monarca/Desktop/Laravel/PortalDoAluno/resources/views/professor/dash.blade.php ENDPATH**/ ?>