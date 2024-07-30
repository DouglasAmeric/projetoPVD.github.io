<?php
// forma de conexão new MysQli 1-host 2-usuario 3-senha 4-database 5-porta do database
    $host = 'localhost';
    $usuario = 'root';
    $senha = 'bancoDeDados@1';
    $database = 'pvd';
    

    $con = new mysqli($host, $usuario, $senha, $database);
    if ($con -> connect_errno){
        echo 'erro';
    }
