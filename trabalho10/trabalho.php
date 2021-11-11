<?php

    SESSION_START ();
    include 'servidor.php';
}
if (isset($_POST['logar'])) {
    if (consultaUsuario($_POST)

    ) {
        $_SESSION['usuario'] = 'Emanuel Marchi Fleisner';
        echo '<a href="trabalho_sistema.php"> Accessar</a>';
    } else {
        echo 'Login ou senha incorreto"';
    }
}
?>

<form method="POST">
    <label>
        <input type="text" name="login"
              <?$_POST['login']?>
    </label>
    <br>
    <label>
        <input type="password" name="senha"
               <?$_POST['senha']?>
    </label>
    <br>
    <input type="submit" name="login"/>
</form>