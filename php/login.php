<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles-cad_login.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>ConectAI</title>
</head>

<body>

    <div class="login-page">
        <div>
            <h1 class="titulo">ConetAI Login</h1>
        </div>
        <div class="form">
            <form class="login-form" action="testeLogin.php" method="POST">
                <input type="text" name="usuario" placeholder="Usuário" />
                <input type="password" name="senha" placeholder="Senha" />
                <button type="submit" name="submit">Entrar</button>
                <p class="message">Não possui conta? <a href="cadastro.php">Cadastre-se</a></p>
            </form>
        </div>
    </div>

</body>

</html>