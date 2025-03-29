<?php

$tela_em_exibicao = null;

if(isset($_POST['cadastrarAluno'])) {
    $tela_em_exibicao = $_POST['cadastrarAluno'];
}

if(isset($_POST['atribuirNota'])) {
    $tela_em_exibicao = $_POST['atribuirNota'];
}

if(isset($_POST['visualizarNota'])) {
    $tela_em_exibicao = $_POST['visualizarNota'];
}

if(isset($_POST['bemVindo'])) {
    $tela_em_exibicao = $_POST['bemVindo'];
}


?>