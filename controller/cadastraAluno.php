<?php

include '../conexao.php';

if(isset($_POST['nome']) && isset($_POST['data_nascimento'])) {
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $matricula = rand(100000, 999999);
    $dataNascimento = $mysqli->real_escape_string($_POST['data_nascimento']);

    $idGrupo = '2';
    $senha = '1234';

    $sql_consulta = "INSERT INTO `aluno` (`nome`, `matricula`, `data_nascimento`) VALUES ('$nome', '$matricula', '$dataNascimento')";
    $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);

    $sql_consulta = "INSERT INTO `usuarios` (`id_grupo`, `usuario`, `senha`) VALUES ('$idGrupo', '$matricula', '$senha')";
    $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);
    
    header('location: ../home.php');
}

?> 