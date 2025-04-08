
<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-700 text-center">Minhas Notas</h2>
    
    <div class="mt-4">
        <table class="w-full bg-white border rounded-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Disciplina</th>
                    <th class="p-2 border">Nota</th>
                </tr>
            </thead>

            <?php
                    
                    include 'conexao.php';

                    if(isset($_SESSION['usuario_logado'])) {

                        $usuarioLogado = $_SESSION['usuario_logado'];

                        $sql_consulta = "SELECT * FROM notas WHERE usuario_aluno = '$usuarioLogado'";
                        $sql_query = $mysqli->query($sql_consulta) or die("Falha na consulta: " . $mysqli->error);

                        $consulta_realizada[] = null;

                        for($i = 0; $i < $sql_query->num_rows; $i++) {
                            $consulta_realizada[$i] = $sql_query->fetch_assoc();
                        }
                        
                        foreach($consulta_realizada as $consulta) {

                            if (!empty($usuarioLogado)) {


                            
                        
                    
                    

                    ?>
            <tbody>
                <tr>
                    <td class="p-2 border"><?= $consulta['disciplina'] ?></td>
                    <td class="p-2 border text-center"><?= $consulta['nota'] ?></td>
                </tr>

                <?php }}} ?>
            </tbody>
        </table>
    </div>
</div>
