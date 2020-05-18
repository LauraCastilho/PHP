<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Sorveteria</title>
</head>
<body>
<h1>Veja as opções no menu abaixo e escolha o que desejar</h1>
<h2>1- Casquinha </h2>
<h2>2- Sundae </h2>
<h2>3- Milkshake </h2>
<h2>Digite o número que corresponde com a sua escolha:</h2>
<form method="post">
<input type="text" name="opcao">
<br>
<br>
<input type="submit" value="Enviar">
<br>
<br>

<?php
$escolha = '';
if (!empty($_POST)) {
    $escolha = $_POST['opcao'];

    switch ($escolha) {
        case 1:
          echo "A Casquinha custa R$ 2,00 <br><br>";
        break;
        case 2:
          echo "O Sundae Custa R$ 5,00 <br><br>";
        break;
        case 3:
          echo "O Milkshake Custa R$  7,00 <br>";
        break;
        default:
        echo "Essa opção não é válida!<br><br>";
    break;
                
    }
}

?>
<img src="img/IceCream.png" alt="">

</form>
</body>
</html>