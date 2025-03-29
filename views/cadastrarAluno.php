<main class="flex-1 p-6">
    <div class="bg-gray-100 p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-700 text-center">Gerenciar Alunos</h2>
            
            <!-- Formulário de Cadastro/Atualização -->
            <form action="aluno.php" method="POST" class="mt-4">
                <input type="hidden" name="id" id="alunoId">
                
                <label class="block">
                    <span class="text-gray-700">Nome</span>
                    <input type="text" name="nome" id="nome" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                </label>

                <label class="block">
                    <span class="text-gray-700">Data de Nascimento</span>
                    <input type="text" name="nome" id="nome" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                </label>
                
                <label class="block mt-3">
                    <span class="text-gray-700">Matrícula</span>
                    <input type="text" name="matricula" id="matricula" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                </label>
                
                <div class="justify-self-center">
                    <button type="submit" name="action" value="cadastrar" class="w-64 mt-4 p-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Cadastrar</button>
                </div>
                
            </form>
            
            <!-- Lista de Alunos -->
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
                        <!-- Exemplo de linha de aluno -->
                        <tr>
                            <td class="p-2 border text-center">1</td>
                            <td class="p-2 border">João Silva</td>
                            <td class="p-2 border text-center">123456</td>
                            <td class="p-2 border text-center">25/12/2004</td>
                            <td class="p-2 border text-center">
                                <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>