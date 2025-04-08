<?php
if (isset($_GET['login']) && $_GET['login'] == 'erro') {
        $erro = 'Usuário ou senha incorretos.';
    } else if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
        $erro = 'Você precisa logar para acessar o serviço.';
    }
?>

<div class="box">
    <form action="controller/validaLogin.php" method="POST">
        <h2 id="title">Sistema Escolar</h2>

        <div class="inputBox">
            <input type="text" name="usuario" id="usuario" required>
            <span class="inputs">Usuário</span>
            <i></i>
        </div>

        <div class="inputBox">
            <input type="password" name="senha" id="senha" required>
            <span class="inputs">Senha</span>
            <i></i>

            <!--Botão de visualização de senha-->
            <button type="button" id="togglePassword" class="password-toggle">
                <span id="eyeIcon">👁</span>
            </button>
        </div>
        
        <?php if (!empty($erro)) { ?>
            <p id="errorMessage" class="text-red-700 pt-2 text-sm text-center shake"><?php echo $erro; ?></p>
        <?php } ?>
        
        <div class="inputBox">
            <button type="submit">Entrar</button>
        </div>
    </form>
</div>

<script>
        //Script para exbir/ocultar a senha
    document.addEventListener("DOMContentLoaded", function () {
        const togglePassword = document.getElementById("togglePassword");
        const senhaInput = document.getElementById("senha");
        const eyeIcon = document.getElementById("eyeIcon");

        togglePassword.addEventListener("click", function () {
            if (senhaInput.type === "password") {
                senhaInput.type = "text";
                eyeIcon.textContent = "🙈";
            } else {
                senhaInput.type = "password";
                eyeIcon.textContent = "👁";
            }
        });
    });
</script>
