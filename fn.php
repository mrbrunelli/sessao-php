<?php
function verificarSession()
{
    session_start();
    
    if (!isset($_SESSION['usuario']['login'])) {
        header('location: ./index.php');
    }
}
