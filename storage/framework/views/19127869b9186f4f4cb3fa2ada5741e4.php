<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssM/login.css">
    <title>Login_simples</title>
</head>

<body>
    <main>
        <div class="create_acount">
            <h1>Não estas cadastrado?</h1>
            <p>Não te preocupes basta clicar no botão a baixo
                e seguir os passos que seram indicados.
            </p>

            <button class="btn">Criar Conta</button>
        </div>

        <div class="login">
            <?php if($mensagem = session()->get('error')): ?>

            <h5 style="color: firebrick;"><?php echo e($mensagem); ?></h5>
            <?php endif; ?>
            <form action="login" method="post">
                <h1>ENTRAR</h1>
                <?php echo csrf_field(); ?>
                <input type="email" placeholder="Username ou email" name="email" required>
                <input type="password" name="password" id="" placeholder="senha" required>

                <button class="btn btn_login" type="submit">ENTRAR</button>

                <p>Siga nos em uma das plataformas sociais</p>
                <div class="redes_s">
                    <span class="icon"></span>
                    <span class="icon"></span>
                    <span class="icon"></span>
                    <span class="icon"></span>
                </div>
            </form>
        </div>
    </main>
</body>

</html><?php /**PATH /home/monarca/Desktop/Laravel/PortalDoAluno/resources/views/login.blade.php ENDPATH**/ ?>