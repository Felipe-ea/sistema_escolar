<?php

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'sistema_escola';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error) {
        die("Falha ao conectar ao banco de dados: " . $mysqli->error);
    }

?>