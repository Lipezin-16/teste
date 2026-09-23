<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Instagram</h1>

    <section>
    <div>
        <h3>Seja Bem Vindo!</h3>
        <br> <br>
        <form action="verificar-login.php" method="post">
            Email: <br>
            <input type="email" name="email" value=" <?php echo $email; ?>" placeholder="email@gmail.com">
            <br> <br>
            Senha: <br>
            <input type="text" name="senha"> <br> <br>

            <input type="submit" value="Entrar">

        </form>
        <p>Novo no Intagram?</p><a href="cad-usuario.php">Cadastrar</a>
    </div>
    </section>
</body>
</html>