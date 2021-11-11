<?php

/*   try {
       $conn = new PDO('mysql:host=localhost;dbname=aulawebi','root', '');
       $stmt = $conn->prepare('select current_date');
       $stmt->execute();
       $result = $stmt->fetchAll();
       print_r($result);
   } catch (PDOException $e) {
       echo $e->getMessage();
   }*/



function consultaUsuario($usuario, $senha){ //function parameters, two variables.
    $conn = new PDO('mysql:host=localhost;dbname=novapasta','root', '');
    $stmt = $conn->prepare('SELECT *
                                      from usuarios
                                      where login = ' . $usuario .
        ' and password = ' . $senha);
    $stmt->execute();
    return !empty($stmt->fetchAll());
}