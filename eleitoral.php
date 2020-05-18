<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Preencha o campo abaixo</h1>
    
    <form  method="POST">
        Digite a idade do indivíduo: <input type="text" name="idade">
        <br>
        <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <br>
    <p>Resultado:</p>
    <?php
        $idade="";
        if(!empty($_POST)){

            $idade= $_POST['idade'];

            if($idade<16){
                echo "Não pode votar<br><br>";
            }
            else {
                if($idade>=18 && $idade<65){
                echo "O voto é obrigatorio<br><br>";
            }
                else{
                    if($idade>=16 && $idade<18){
                        echo "O voto é facultativo<br><br>";
                    }
                    else{
                        echo "O voto é facultativo <br><br>";
                    }
                }
            }
        }
    ?>
    <img src="velhinhos.jpg">
</body>
</html>