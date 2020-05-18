<?php
    //Define o dia da semana

    //Definição da variável
    $n=1;

    //Possibilidades
    switch($n){

        case 1:
            echo "É domingo";
        break;

        case 2:
            echo "É segunda-feira";
        break;

        case 3:
            echo "É terça-feira";
        break;

        case 4:
            echo "É quarta-feira";
        break;

        case 5:
            echo "É quinta-feira";
        break;

        case 6:
            echo "É sexta-feira";
        break;

        case 7:
            echo "É sábado";
        break;
        
        default:
            echo "Dia não identificado, por favor verifique se há algo errado";
        break;
    }
?>