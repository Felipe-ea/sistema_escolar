<?php

include '../conexao.php';

if(isset($_POST['usuario_aluno']) && isset($_POST['id_disciplina']) && isset($_POST['nota'])) {

    $disciplina = '';

        switch ($_POST['id_disciplina']) {

            case '1':
                $disciplina = 'Matemática';
                break;
            case '2':
                $disciplina = 'Português';
                break;
            case '3':
                $disciplina = 'História';
                break;
            case '4':
                $disciplina = 'Geografia';
                break;
            case '5':
                $disciplina = 'Artes';
                break;
            case '6':
                $disciplina = 'Química';
                break;
            
        }

    
    $usuarioAluno = $mysqli->real_escape_string($_POST['usuario_aluno']);
    $nota = $mysqli->real_escape_string($_POST['nota']);

    $sql_consulta = "INSERT INTO `notas` (`usuario_aluno`, `disciplina`, `nota`) VALUES ('$usuarioAluno', '$disciplina', '$nota')";
    $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);

    
    
    header('location: ../home.php');
}

?> 