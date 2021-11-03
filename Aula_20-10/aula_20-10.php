<?php
 session_start();
 if (isset($_POST['salvar'])) {
     $_SESSION ['valor'] = $_POST['valor'];
     echo "valor alterado com sucesso";
 }
 ?>

<a href="script2.php"> teste</a>

<hr>
<form method="post">
    <input type="text" name="valor">
    <input type="submit" name="salvar">
</form>
