<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindos ao PHP!!!</h1>
    <?php
    //comando de entrada no php 
    echo"<h1>Bem vindos ao PHP2!</h1>";

    $nome = "Aline";//string
    $idade = 25; //inteiro
    $salario = 4000.27; //real float
    echo"Nome:".$nome."<br/>";
    $nome = strtoupper($nome);
    echo"Nome:".$nome."<br/>";
    $nome = strtolower($nome);
    echo"Nome:".$nome."<br/>";
    echo"Idade:".$idade;
    echo"<br>Salário:".$salario;

    //comando de saida
    ?>
</body>
</html>