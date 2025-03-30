<?php

include '../conexao.php'; 

if(isset($_POST['usuario']) && isset($_POST['senha'])) {

    if(strlen($_POST['usuario']) == 0 || strlen($_POST['senha'] == 0)) {
        // ha algum campo vazio
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);

        if($sql_query->num_rows == 1) {

            $usuario_logado = $sql_query->fetch_assoc();

            session_start();

            $_SESSION['id_usuario_logado'] = $usuario_logado['id'];
            $_SESSION['usuario_logado'] = $usuario_logado['usuario'];
            $_SESSION['id_grupo_usuario_logado'] = $usuario_logado['id_grupo'];
            $_SESSION['autenticado'] = 'SIM';
           

            header('location: ../home.php');       

        } else {
            header('location: ../index.php?login=erro');
        }
    }

    /*
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($usuario === 'admin' && $senha === '1234') {
    header('location: ../home.php');
    }
    */
}

?>