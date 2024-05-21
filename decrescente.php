<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ordem descrecente</title>
</head>
<body class="container bg-success text-white">
    <h1>Descrecente</h1>

<form action="" method="get">

    <label for="numero1">Insira o primeiro número: </label>
    <input type="number" name="numero1" id="numero1">
    <br><br>
    <label for="numero2">Insira o segundo número: </label>
    <input type="number" name="numero2" id="numero2">
    <br><br>
    <label for="numero3">Insira o terceiro número: </label>
    <input type="number" name="numero3" id="numero3">
    <br><br>
    <input type="submit" value="Enviar">

</form>

<?php

    if(isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['numero3'])) {
        
        $n1 = $_GET['numero1'];
        $n2 = $_GET['numero2'];
        $n3 = $_GET['numero3'];
    
        
        function comparar($a, $b) {
            return $b - $a;
        }
    
        
        $numeros = array($n1, $n2, $n3);
    
        
        usort($numeros, 'comparar');
    
        
        echo "<br>Números ordenados em ordem decrescente: ";
        foreach ($numeros as $numero) {
            echo "$numero ";
        }
    }

?>

</body>
</html>