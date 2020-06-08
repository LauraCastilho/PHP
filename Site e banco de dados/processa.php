<?php
    include 'conecta.php';

    $email = $_POST['username'];
    $senha = $_POST['password'];

    $consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultado = $conexao->query($consulta);

    $registros = $resultado->num_rowns;
    $resultado_usuario = mysqlli_fetch_assoc($resultado);
    //Utilizaremos $resultado_usuario para criar sessão no PHP

    if ($registros == 1){
        header('Location: restrita.php');
    }
    else{
        header('Location: index.html');
    }
?>