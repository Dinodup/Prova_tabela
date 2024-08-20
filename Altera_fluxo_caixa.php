<?php
    include('Includes/Conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Altera_fluxo_caixa_exe.php" method="post">
    <fieldset>
            <legend>Cadastro Fluxo Caixa</legend>

            <div>
                <label for="data">Data: </label>
                <input type="date" name="data" id="data" value="<?php echo $row['data']?>">
            </div><p></p>

            <h3>Tipo</h3>
            <div class="inline">
                <input type="radio" name="tipo" id="tipoE" value="1" <?php echo $row['tipo'] == 1 ? "checked" : "" ?> /><label id="tipoE">Entrada</label>
                <input type="radio" name="tipo" id="tipoS" value="0" <?php echo $row['tipo'] == 0 ? "checked" : "" ?> /><label id="tipoS">Saída</label>
            </div><p></p>

            <div>
                <label for="valor">Valor: </label>
                <input type="number" name="valor" id="valor" value="<?php echo $row['valor']?>">
            </div><p></p>

            <div>
                <label for="historico">Histórico: </label>
                <input type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
            </div><p></p>

            <div>
            <label for="cheque">Cheque: </label>
            <select name="cheque" id="cheque">
                <option value="sim"
                <?php echo $row['cheque'] == "sim" ? "selected" : "" ?>>Sim</option>
                <option value="nao"
                <?php echo $row['cheque'] == "nao" ? "selected" : "" ?>>Não</option>
            </select>
        </div>

        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </fieldset>
    </form>
    <a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>