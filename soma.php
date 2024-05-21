<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Soma</title>
</head>
<body class="container bg-success text-white">
    <h1>Soma de números</h1>

<form action="" method="get">

    <label for="Numero1">Insira o primeiro número: </label>
    <input type="number" name="Numero1" id="Numero1">
    <br><br>
    <label for="Numero2">Insira o segundo número: </label>
    <input type="number" name="Numero2" id="Numero2">
    <br><br>
    <input type="submit" value="Enviar">

</form>

<?php

    $n1 = $_GET['Numero1'];
    $n2 = $_GET['Numero2'];

    $resultado = $n1 + $n2;

    if($resultado > 20){
        $resultado += 8;
        echo "<br><br> O resultado da soma dos números é: $resultado";
    }
    else{

    $resultado -= 5;
    echo "<br><br> O resultado da soma dos números é: $resultado";   
    
    }

?>

</body>
</html>