<main class="flex-1 p-6">
    <div class="bg-gray-100 p-4">
        <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-700 text-center">Gerenciar Alunos</h2>            
            
            <form action="../controller/cadastraAluno.php" method="POST" class="mt-4">
                <input type="hidden" name="id" id="alunoId">
                
                <label class="block">
                    <span class="text-gray-700">Nome</span>
                    <input type="text" name="nome" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                </label>

                <label class="block">
                    <span class="text-gray-700">Data de Nascimento</span>
                    <input type="date" name="data_nascimento" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                </label>
                
                <div class="justify-self-center">
                    <button type="submit" name="action" value="cadastrar" class="w-64 mt-4 p-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Cadastrar</button>
                </div>
                
            </form>            
            
            <div class="mt-6">
                <hr>
                <h3 class="py-4 justify-self-center text-xl font-semibold text-gray-700">Lista de Alunos</h3>
                <table class="w-full mt-2 bg-white border rounded-lg">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 border">ID</th>
                            <th class="p-2 border">Nome</th>
                            <th class="p-2 border">Matrícula</th>
                            <th class="p-2 border">Data de Nascimento</th>
                            <th class="p-2 border">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        
                        include 'conexao.php';

                        $sql_consulta = "SELECT * FROM aluno";
                        $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);

                        $consulta_realizada[] = null;

                        for($i = 0; $i < $sql_query->num_rows; $i++) {
                            $consulta_realizada[$i] = $sql_query->fetch_assoc();
                        }
                        
                        foreach($consulta_realizada as $consulta) {                        
                            if( !empty($consulta) ) {
                        ?>
                        
                        <tr>
                            <td class="p-2 border text-center"><?= $consulta['id'] ?></td>
                            <td class="p-2 border"><?= $consulta['nome'] ?></td>
                            <td class="p-2 border text-center"><?= $consulta['matricula'] ?></td>
                            <td class="p-2 border text-center"><?= $consulta['data_nascimento'] ?></td>
                            <td class="p-2 border text-center">
                                <form action="controller/acoes.php" method="POST">
                                    <button name="editarAluno" value="<?= $consulta['id'] ?>" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</button>
                                    <button name="deletarAluno" value="<?= $consulta['id'] ?>" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Excluir</button>
                                </form>
                            </td>
                        </tr>

                        <?php }} ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>