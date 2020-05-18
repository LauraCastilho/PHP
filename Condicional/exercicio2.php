<?php
    //Aumento dos salários

    //Definindo variáveis
    $salario = -800;
    $p = 0;

    //Caso o salário for negativo
    if($salario<0){
        echo ("O salário não pode ser negativo");
    }

    //Definindo o percentual de aumento
    else{

        if($salario <=280){
            $p = 0.2;
        }
        if ($salario > 280 && $salario <=700){
            $p = 0.15;
        }
        if ($salario > 700 && $salario <= 1500){
            $p = 0.1;
        }

        if ($salario > 1500){
            $p = 0.05;
        }
    
        //Definindo o aumento e o salário novo
        $a= $salario * $p;
        $percentual=$p*100;
        $n = $salario + $a;

        //Resultado
        echo ("O salário antes do reajuste é: $salario");
        echo ("<br></br>");

        echo ("O percentual de aumento aplicado foi de: $percentual%");
        echo ("<br></br>");

        echo ("O valor do aumento foi de: $a");
        echo ("<br></br>");

        echo ("O novo salário após o aumento ficou: $n");
        echo ("<br></br>");
    }
?>
