<?php
session_start();

if (isset($_GET['desconectar'])) {
    // $_SESSION['usuario'] =null;
    session_destroy();
    header("Location: autenticacao.php");
}

if (!isset ($_SESSION['usuario'])) {
    include 'trabalho.php'; }
else {
    include 'trabalho_sistema.php';
}

