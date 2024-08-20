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
    <h1>Alteração</h1>
    <?php
    include('Includes/Conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
    $sql = "UPDATE fluxo_caixa SET
                data = '$data',
                tipo = '$tipo',
                valor = '$valor',
                historico = '$historico',
                cheque = '$cheque'
            WHERE id = $id";
    
    $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<h2>Dados alterados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao alterar dados!</h2>";
            echo mysqli_error($con);
        }
    ?>
    <p></p>
    <a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>