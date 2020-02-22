<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <style>
        .container {
            padding-left: 100px;
            padding-right: 100px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <div class="container">
        <h1>Efetuar login</h1>
        <form action="verificarSenha.php" method="post" name="login">
            <label for="login">Login</label>
            <input type="text" name="login" required>
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" required>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>