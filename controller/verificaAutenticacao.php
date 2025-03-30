<?php
    if($_SESSION['autenticado'] != 'SIM') {
        session_start();
        header('location: index.php?login=erro2');
    }

?>