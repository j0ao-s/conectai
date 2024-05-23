<?php

//print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

    $result = $conn->query($sql);

    if (mysqli_num_rows($result) < 1) {
        header('Location: login.php');
    } else {
        header('Location: ../index.html');
    }
} else {
    header('Location: login.php');
}
