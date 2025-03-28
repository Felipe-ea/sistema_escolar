<main class="flex-1 p-6">
    <div class="bg-gray-100 p-6">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-700 text-center">Atribuir Nota</h2>
            
            <form action="notas.php" method="POST" class="mt-4">
                <label class="block">
                    <span class="text-gray-700">Aluno</span>
                    <select name="aluno_id" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                        <option value="">Selecione um aluno</option>
                        <option value="1">João Silva</option>
                        <option value="2">Maria Oliveira</option>
                        <option value="3">Carlos Souza</option>
                    </select>
                </label>
                
                <label class="block mt-3">
                    <span class="text-gray-700">Disciplina</span>
                    <select name="disciplina_id" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                        <option value="">Selecione uma disciplina</option>
                        <option value="1">Matemática</option>
                        <option value="2">Português</option>
                        <option value="3">História</option>
                    </select>
                </label>
                
                <label class="block mt-3">
                    <span class="text-gray-700">Nota</span>
                    <input type="number" name="nota" step="0.1" min="0" max="10" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
                </label>
                
                <button type="submit" class="w-full mt-4 p-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Salvar Nota</button>
            </form>
        </div>
    </div>
</main>