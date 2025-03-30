<?php


$grupo_usuario = $_SESSION['id_grupo_usuario_logado'];




if($grupo_usuario == 0) {
    include 'views/botoes/btnInicio.php';
    include 'views/botoes/btnCadastrarProfessor.php';
    include 'views/botoes/btnCadastrarAluno.php';
    include 'views/botoes/btnAtribuirNota.php';
}

if($grupo_usuario == 1) {
    include 'views/botoes/btnInicio.php';
    include 'views/botoes/btnCadastrarAluno.php';
    include 'views/botoes/btnAtribuirNota.php';
}

if($grupo_usuario == 2) {
    include 'views/botoes/btnInicio.php';
    include 'views/botoes/btnVisualizarNotas.php';
}
    
?>