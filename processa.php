<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Calculando uma equação de segundo grau</h1>
    <p>Digite os valores</p>
    <form  method="POST">
        Digite o valor de A: <input type="text" name="a">
        <br>
        <br>
        Digite o valor de B: <input type="text" name="b">
        <br>
        <br>
        Digite o valor de C: <input type="text" name="c">
        <br>
        <br>
        <input type="submit" value="Calcular">
        <br>
        <br>
    </form>
    <p>Resultado<p>

    <?php
        $a="";
        $b="";
        $c="";

        if(!empty($_POST)){
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
    
        $delta= ($b*$b) - 4*$a*$c;
        $raiz = sqrt($delta);
        $x1= (-$b + $raiz)/2*$a;
        $x2= (-$b - $raiz)/2*$a;

        if($delta<0){
            echo("Delta é: $delta <br>");
            echo("Raiz não existente pois o delta é negativo");
        }
        else if($delta>0){
            echo("Delta é: $delta <br>");
            echo("X1 é: $x1 <br>");
            echo("X2 é: $x2 <br>");
        }
        else{
            echo("Há apenas uma raiz <br>");
            echo("X é: $x1");
        }
    }
    ?>
</body>
</html>
