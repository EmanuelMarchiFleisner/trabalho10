<?php
    if (isset($_POST['logar'])) {
        //select no usuario
        //select *
        //from usuarios
        //where login = '123456'
        //and password = md5('teste')
        if (($_POST['login']=='admin')
            &&($_POST['senha']=='admin')) {
            $_SESSION['usuario'] = 'Emanuel Marchi Fleisner';
            echo '<a href="sistema.php"> Accessar</a>';
        }
        else {
    echo 'Login ou senha incorreto"';
        }
    }
?>

 <form method="post">
    <input type="text" name="login"
    Placeholder ="login"/>
    <br>
    <input type ="password" name="senha"
    Placeholder="senha"/>
    <br>
     <input type="submit" name="login"/>
 </form>