<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('Includes/Conexao.php');

    $data = $_POST['data'];
    $tipo = intval($_POST['tipo']);
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Dados do caixa</h1>";
    echo "Data: $data<br>";
    echo "Tipo: " . ($tipo ? "Entrada" : "Saída") . "</br>";
    echo "Valor: $valor<br>";
    echo "Histórico: $historico<br>";
    echo "Cheque: $cheque<br>";
    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";
    $sql .= " VALUES('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
    echo $sql;

    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h2>Dados cadastrados com sucesso!!</h2>";
    }
    else{
        echo "<h2>Erro ao cadastrar!</h2>";
        echo mysqli_error($con);
    }
    ?>
    <h3><a href="index.html">Voltar</a></h3>
</body>
</html>