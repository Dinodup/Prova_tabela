<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Caixas</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php
        include('Includes/Conexao.php');

        // Consulta SQL
        $sql = "SELECT id, data, tipo, valor, historico, cheque
                FROM fluxo_caixa";

        // Executa a consulta
        $result = mysqli_query($con, $sql);

        // Verificar se a consulta foi bem-sucedida
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }
    ?>

    <div class="container">
        <h1>Lista de Caixas</h1>
        <a href="Cadastro_fluxo_caixa.html">Cadastrar outro</a><br>
        <a href="index.html">Voltar para a Tela Inicial</a>

        <table class="n-table">
            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Histórico</th>
                <th>Cheque</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
            <?php //mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".($row['tipo'] ? 'Entrada' : 'Saída')."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
