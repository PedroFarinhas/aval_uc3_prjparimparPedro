<?php

    $digitenumero=filter_input (INPUT_GET,"digitenumero", FILTER_VALIDATE_FLOAT); //FILTER_VALIDATE_INT
    $digite=$_GET["digite"];
    $resultado="";

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
        <p> <?php  echo  $resultado . "" . $digite ?>  </p>
        <a href="../index.html">VOLTAR</a>
    </div>
</body>
</html>