<?php
    //Média do aluno

    //Definindo as variáveis
    $nota1 = 5;
    $nota2 = 2;
    $soma = $nota1+$nota2;
    $media = $soma/2;

    //Caso se a nota for maior que 10 ou menor que 0
    if($nota1<0 || $nota1>10 || $nota2<0 || $nota2>10){
        echo "Nota inválida!";
    }

    //Caso se a nota for entre 0 e 10
    else{
        echo "As notas do aluno foram: $nota1 e $nota2";
        echo "<br></br>";
        echo "A média do aluno foi: $media";
        echo "<br></br>";
        
        //Definindo o conceito
        if($media>=0 && $media<4.0){
            echo "O conceito do aluno é E, e ele está reprovado!";
        }
        if($media>=4.0 && $media<6.0){
            echo "O conceito do aluno é D, e ele está reprovado!";
        }
        if($media>=6.0 && $media<7.5){
            echo "O conceito do aluno é C, e ele está aprovado!";
        }
        if($media>=7.5 && $media<9.0){
            echo "O conceito do aluno é B, e ele está aprovado!";
        }
        if($media>=9.0 && $media<=10){
            echo "O conceito do aluno é A, e ele está aprovado!";
        }
    }

?>