<?php
//Iniciar uma sessão
session_start();

//Verificar se existe um POST
if ($_POST) {
    //Iniciar as variaveis
    $login = $senha = "";

    //Mostrar conteudo do array
    //print_r( $_POST);

    //Recuperar as variaveis
    foreach ($_POST as $key => $value) {
        if (isset($_POST[$key])) {
            $$key = trim($value);
        }
    }

    //Verificar se os campos estao em branco
    if (empty($login)) {
        echo 'Preencha o login';
    } else if (empty($senha)) {
        echo 'Preencha a senha';
    } else {
        //Gravar a sessão usuario
        $_SESSION['usuario'] = array("login" => $login, "senha" => $senha);

        //Redirecionar
        header('location: ./home.php');
    }
} else {
    //Redirecionar para o index.php
    //Não preencheu o form
    //Para usar o header não pode haver texto sendo mostrado na página
    header('location: ./index.php');
}
