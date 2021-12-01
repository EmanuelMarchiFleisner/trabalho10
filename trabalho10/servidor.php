<?php

function consultaUsuario($usuario, $senha){ //function parameters, two variables.
    $conn = new PDO('mysql:host=localhost;dbname=novapasta','root', '');
    $stmt = $conn->prepare('SELECT *
                                      from usuarios
                                      where login = ' . $usuario .
        ' and password = ' . $senha);
    $stmt->execute();
    return !empty($stmt->fetchAll());}