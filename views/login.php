    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700">Sistema Escolar</h2>
        <form action="controller/validaLogin.php" method="POST" class="mt-4">
            <label class="block">
                <span class="text-gray-700">Usuário</span>
                <input type="text" name="usuario" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
            </label>
            <label class="block mt-3">
                <span class="text-gray-700">Senha</span>
                <input type="password" name="senha" class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" required>
            </label>
            <?php
                
                if(isset($_GET['login']) && $_GET['login'] == 'erro') {            
                
                ?>
            
                <p class="text-red-700 pt-[10px]">Usuário ou senha incorretos.</p>

            <?php } ?>

            <?php
                
                if(isset($_GET['login']) && $_GET['login'] == 'erro2') {            
                
                ?>
            
                <p class="text-red-700 pt-[10px]">Você precisa logar para acessar o serviço.</p>

            <?php } ?>
            <button type="submit" class="w-full mt-4 p-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Entrar</button>
        </form>
    </div>


