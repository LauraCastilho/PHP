<?php
    //Organiza as variáveis em ordem crescente
    
    //Definindo variáveis
    $a = 100;
    $b = 5;
    $c = 30;

    //Definindo a ordem de exibição das variáveis
    if($a<$b && $b<$c){
        echo "$a, $b, $c";
    }

    if($a<$c && $c<$b){
        echo "$a, $c, $b";
    }

    if($c<$a && $a<$b){
        echo "$c, $a, $b";
    }

    if($c<$b && $b<$a){
        echo "$c, $b, $a";
    }

    if($b<$c && $c<$a){
        echo "$b, $c, $a";
    }

    if($b<$a && $a<$c){
        echo "$b, $a, $c";
    }

    echo "<br></br>";

    if($a==$c && $c==$b){
        echo "Os números são iguais";
    }

    if($a==$c && $c!=$b || $c==$b && $b!=$a || $b==$a && $a!=$c){
        echo "Dois números são iguais e um é diferente";
    }
?>
