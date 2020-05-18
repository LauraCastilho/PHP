<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Calculando o índice de massa córporea</h1>
    <p>Preencha os campos abaixo</p>
    <form  method="POST">
        Digite o peso do indivíduo: <input type="text" name="peso">
        <br>
        <br>
        Digite a altura do indivíduo: <input type="text" name="altura">
        <br>
        <br>
        <input type="submit" value="Calcular">
        <br>
        <br>
    </form>
    <br>
    <br>
    <p>Resultado<p>

    <?php
        $peso="";
        $altura="";
        $imc="";

        if(!empty($_POST)){
            $peso=$_POST['peso'];
            $altura=$_POST['altura'];
            $imc=$peso/($altura*$altura);

            

            if($peso<0 || $altura<0){
                echo "O peso ou a altura não podem ser negativos";
            }
            else{
                echo "O índice de massa corpórea é: $imc Kg/m<sup>2</sup> <br>";

                if($imc<20){
                        echo "O indivíduo está abaixo do peso";
                    }
                else {
                    if($imc<=20 && $imc<25){
                        echo "Peso normal";
                    }
                    else {
                        if($imc<=25 && $imc<30){
                                echo "O indivíduo está com sobre peso";
                            }
                        else{
                            if($imc<=30 && $imc<40){
                                    echo "O indivíduo está obeso";
                                }
                            else{
                                    echo "O indivíduo está obeso mórbido";
                                }
                        }
                        }

                }
                
                
                }
            }

    ?>
</body>
</html>