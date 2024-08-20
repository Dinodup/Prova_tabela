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

    $tipo = $_POST['tipo'];

    if($tipo == 'entrada') {
        $sql="SELECT sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    } 
    else if($tipo == 'saida') {
        $sql="SELECT sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    } 
    else if($tipo == 'saldo') {
        $sql="SELECT sum(case when tipo = 'entrada' then valor else 0 end) -
                     sum(case when tipo = 'saida' then valor else 0 end) as valor
                    from fluxo_caixa";
    }

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualizar dados\n"
        .mysqli_error($con);
    ?>

    <h3><a href="index.html">Voltar</a></h3>
</body>
</html>