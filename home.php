<?php

require_once 'carregaTela.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema Escolar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100">
    
    <aside class="w-64 bg-blue-500 text-white p-6">
        <a  class="text-2xl font-bold">Sistema Escolar</a>
        <nav class="mt-6">
            <form method="POST">
                <button name="cadastrarAluno" value="cadastrarAluno.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Cadastrar Aluno</button>
                <button name="atribuirNota" value="atribuirNota.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Atribuir Nota</button>
                <button name="visualizarNota" value="visualizarNota.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Minhas Notas</button>
            </form>
        </nav>
    </aside>
    
    
    <main class="flex-1 p-6">
        
        <?php

        
        if($tela_em_exibicao != null) {

            include 'views/' . $tela_em_exibicao;

        }else {
            include 'views/bemVindo.php';
        }     
              
       //echo $tela_em_exibicao;
        
        ?>


    </main>
    
    




</body>
</html>
