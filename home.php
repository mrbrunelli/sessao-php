<?php
include 'fn.php';

//verificar se o usuario esta na sessao
verificarSession();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Home do seu Sistema</h1>
    <?php
    // print_r($_SESSION);
    $usuario = $_SESSION['usuario']['login'];

    echo "<p>Olá $usuario seja bem-vindo mano!</p>";
    ?>

    <a href="./sair.php">Sair do Sistema</a>
</body>

</html>