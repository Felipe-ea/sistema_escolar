<?php
 
include '../conexao.php';

if(isset($_POST['nome']) && isset($_POST['data_nascimento']) && isset($_POST['disciplina'])) {
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $matricula = rand(100000, 999999);
    $dataNascimento = $mysqli->real_escape_string($_POST['data_nascimento']);
    $disciplina = $mysqli->real_escape_string($_POST['disciplina']);
    $idGrupo = '1';
    $senha = '1234';

    $sql_consulta = "INSERT INTO `professor` (`nome`, `matricula`, `data_nascimento`, `disciplina`) VALUES ('$nome', '$matricula', '$dataNascimento', '$disciplina')";
    $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);

    $sql_consulta = "INSERT INTO `usuarios` (`id_grupo`, `usuario`, `senha`) VALUES ('$idGrupo', '$matricula', '$senha')";
    $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);
    
    header('location: ../home.php');
}

?>