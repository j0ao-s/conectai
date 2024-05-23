<?php

if (isset($_POST['submit'])) {

    // print_r($_POST['nome']);
    // print_r($_POST['cpf']);
    // print_r($_POST['telefone']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "INSERT INTO usuarios(nome, cpf, telefone, endereco, usuario, senha, email) VALUES('$nome', '$cpf', '$telefone', '$endereco', '$usuario', '$senha', '$email')");
}

?>

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
            <h1 class="titulo">ConetAI Cadastro</h1>
        </div>
        <div class="form">
            <form class="login-form" action="cadastro.php" method="POST">
                <input type="text" name="nome" id="nome" placeholder="Nome" />
                <input type="text" name="cpf" id="cpf" placeholder="CPF" />
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" />
                <input type="text" name="endereco" id="endereco" placeholder="Endereço" />
                <input type="text" name="usuario" id="usuario" placeholder="Nome de usuário" />
                <input type="password" name="senha" id="senha" placeholder="Senha" />
                <input type="email" name="email" id="email" placeholder="Email" />
                <button type="submit" name="submit">Cadastrar</button>
                <p class="message">Já possui conta? <a href="login.php">Voltar</a></p>
            </form>
        </div>
    </div>
</body>

</html>