
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Dados do cliente resultado:</h1>
    <?php
        $nome=$_POST['nome'];
        $idade=$_POST['idade'];

        echo("Seu nome é $nome <br><br>");
        echo("Sua idade é $idade");
    ?> 
</body>
</html>
