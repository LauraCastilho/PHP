<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Pizzaria</title>
</head>
<body>
<h1>Calculando o valor de uma pizza</h1>
<h2> Preencha os campos abaixo</h2>

<form method="post">
<h3>Valor da pizza:</h3>
<input type="text" name="valor">
<h3>Sabor da pizza:</h3>
<input type="text" name="sabor">
<h3>Quantidade de pessoas que dividirão a conta:</h3>
<input type="text" name="quantidade">
<h3>Valor máximo aceito pelas pessoas que dividirão a conta:</h3>
<input type="text" name="qtdporvalor">
<br>
<br>
<input type="submit" value="Enviar">
<br>
<br>


<?php
$valor = '';
$sabor = '';
$quantidade = '';
$qtdporvalor = '';

if (!empty($_POST)) {
  $valor = $_POST['valor'];
  $sabor = $_POST['sabor'];
  $quantidade = $_POST['quantidade'];
  $qtdporvalor = $_POST['qtdporvalor'];
  
  $racha = $quantidade*$qtdporvalor;
  $precodividido = $valor/$quantidade;
  $falta=$valor-$racha;
  
  if($valor>=0 && $quantidade>0 && $qtdporvalor>=0){
    if ($racha >= $valor){
      echo "<br><br>A Pizza de $sabor custa R$ $valor e será dividida entre $quantidade pessoas, então cada pessoa terá de pagar R$ $precodividido "; 
    }
    if ($racha < $valor){
      echo "<br><br>Não será possível realizar a compra pois a pizza deveria custar R$ $falta a menos"; 
    }
  }
  else{
    echo "<br><br>Os valores não podem ser negativos";
  }
}
?>
</form>
<img src="img/pizza.png">
<br>
</body>
</html>