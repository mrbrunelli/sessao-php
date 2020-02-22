<?php

//sair do sistema - apagar a sessao
session_start();

//apagar o usuario da sessao
unset($_SESSION['usuario']);

//redirecionar para o index
header('location: index.php');
