<?php

if(isset($_SESSION['usuario'])) {
    echo 'falha no sistema<br>';
    echo 'você precisa se autenticar!<br>';
    echo '<a href="autenticacao.php"> Voltar <a/>';
    exit ();
}
?>
    <a href="?desconectar=true"> Desconectar</a>
    <hr>

<h1>Olá <?$_SESSION['usuario']?> </h1>
