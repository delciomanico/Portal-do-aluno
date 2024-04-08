<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <div class="container p-4 ">
    <div class="container p-2 ">

        <form action="login" method="post" class="row border g-4" style="width:300px;">
            <div class="col-12">
                <h1 class="title">Login</h1>
            </div>
            @csrf
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Nome" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Nome" class="form-control" required>
            </div>
            <div class="col-12">
                <input type="submit" value="Entrar" class=" btn btn-primary">
            </div>
        </form>
    </div>
    </div>
        <script src="js/bootstrap.js"></script>
</body>
</html>