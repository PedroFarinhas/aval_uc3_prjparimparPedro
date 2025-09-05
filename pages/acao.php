<?php

    $num1=filter_input (INPUT_GET,"num1", FILTER_VALIDATE_FLOAT); //FILTER_VALIDATE_INT
    $num2=filter_input (INPUT_GET,"num2", FILTER_VALIDATE_FLOAT); //FILTER_VALIDATE_INT
    $num3=filter_input (INPUT_GET,"num3", FILTER_VALIDATE_FLOAT); //FILTER_VALIDATE_INT
    $totalpar=0;
    $totalimpar=0;
    $resposta1="";
    $resposta2="";
    $resposta3="";

    if ($num1%2==0) {
        
            $totalpar = $totalpar+1;
            $resposta1 = "NÚMERO 1 É PAR (" . $num1 . ")"; 

    } else {
       $totalimpar = $totalimpar + 1;
       $resposta1 = "NÚMERO 1 É IMPAR (" . $num1 . ")"; 

    }
    
    if ($num2%2==0) {
        
            $totalpar = $totalpar+1;
            $resposta2 = "NÚMERO 2 É PAR (" . $num2 . ")"; 

    } else {
       $totalimpar = $totalimpar + 1;
       $resposta2 = "NÚMERO 2 É IMPAR (" . $num2 . ")"; 

    }
    
    if ($num3%2==0) {
        
            $totalpar = $totalpar+1;
            $resposta3 = "NÚMERO 3 É PAR (" . $num3 . ")"; 

    } else {
       $totalimpar = $totalimpar + 1;
       $resposta3 = "NÚMERO 3 É IMPAR (" . $num3 . ")"; 

    }
    

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> PÁGINA RESPOSTA </title>
    
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>

    <div class="mostrar">

        <p> <?php  echo  $resposta1 . " - " .  $resposta2 . " - " . $resposta3 . "- TOTAL PARES:" . $totalpar . " - TOTAL IMPARES:" . $totalimpar ?>  </p>

        <a href="../index.html">VOLTAR</a>

    </div>
</body>
</html>