<?php 

    include '../conexao.php';

    if(isset($_POST['deletarAluno']) || isset($_POST['editarAluno']) ) {
        
        if(isset($_POST['deletarAluno'])) {
            //aluno deve ser deletado
            
            $idDeletar = $mysqli->real_escape_string($_POST['deletarAluno']);

            $sql_consulta = "DELETE FROM aluno WHERE id = '$idDeletar'";
            $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);
            
            header('location: ../home.php'); 
            
        } else {
            // aluno deve ser editado
        }
    }

    if(isset($_POST['deletarProfessor']) || isset($_POST['editarProfessor']) ) {
        
        if(isset($_POST['deletarProfessor'])) {
            //professor deve ser deletado
            
            $idDeletar = $mysqli->real_escape_string($_POST['deletarProfessor']);

            $sql_consulta = "DELETE FROM professor WHERE id = '$idDeletar'";
            $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);
            
            header('location: ../home.php'); 
            
        } else {
            // professor deve ser editado
        }
    }

?>