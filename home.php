<?php
session_start();
require_once 'verificaAutenticacao.php';
require_once 'controller/carregaTela.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema Escolar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-row bg-gray-100">

    
    <aside class="w-64 h-full flex flex-col bg-blue-500 text-white p-6">
        <h2 class="text-2xl font-bold mb-4">Sistema Escolar</h2>
        
        <nav class="flex-grow">
            <form  method="POST" class="space-y-2">
                <button name="bemVindo" value="bemVindo.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Início</button>
                <button name="cadastrarAluno" value="cadastrarAluno.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Cadastrar Aluno</button>
                <button name="atribuirNota" value="atribuirNota.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Atribuir Nota</button>
                <button name="visualizarNota" value="visualizarNota.php" type="submit" class="block w-full text-left p-2 rounded hover:bg-blue-600">Minhas Notas</button>
            </form>
        </nav>

        

        <!-- Botão Sair fixo no final -->
        
        <a href="controller/logout.php" class="text-center mt-auto bg-red-500 p-2 rounded hover:bg-red-600 w-full">Sair</a>
        
        
    </aside>

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6 overflow-auto">
        <?php
        if ($tela_em_exibicao != null) {
            include 'views/' . $tela_em_exibicao;
        } else {
            include 'views/bemVindo.php';
        }
        ?>
    </main>

</body>
</html>
