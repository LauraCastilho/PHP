<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "exercicio";
    
    $conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");
    $conexao->set_charset("utf8");
    if ($conexao->connect_error) {
        echo "ERRO DE CONEXÃO";
    }
    else {
        echo "CONEXÃO BEM SUCEDIDA";
    }
?>