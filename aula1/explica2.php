<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica2.php" method="get">
        Digite o primeiro numero:<br/>
        <input type="text" name="numero1" id=""/>
        <br/> <br/>
         Digite o segundo numero:<br/>
        <input type="text" name="numero2" id=""/>
        <br/> <br/>
        <input type="submit" value="Calcular">
    </form>

    <?php
    //entrada
        $n1=$_GET["numero1"];
        $n2=$_GET["numero2"];
        //processamento
        $auxsoma = $n1+$n2;
        $auxsub = $n1-$n2;
        $auxmult = $n1*$n2;
        $auxdiv = $n1/$n2;
        //saida

        //a funcao do ponto é de concatenação
        //junta o rotudo a variavel
        echo "Primeriro numero digitado: ".$n1;
        echo "<br/>Segundo numero digitado: ".$n2;
        echo "<br/> A soma dos dois numeros é :".($n1+$n2);
        echo "<br/> A soma dos dois numeros é :".$auxsoma;
        echo "<br/> A subtração dos dois numeros é :".$auxsub;
        echo "<br/> A multiplicação dos dois numeros é :".$auxmult;
        echo "<br/> A divisão dos dois numeros é :".$auxdiv;
    ?>
</body>
</html>