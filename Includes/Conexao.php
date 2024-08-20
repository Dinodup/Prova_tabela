<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = ''; //mudar para nulo
    $database = 'PROVA2';
    $port     = 3307; //3307

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro conexão: %s", mysqli_connect_error());
        exit();
    }

?>