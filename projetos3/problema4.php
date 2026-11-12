<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado - Problema 4</title>
</head>
<body>
<?php
function maiorValor($array) {
    $maior = $array[0];
    foreach ($array as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
    return $maior;
}

$texto = $_POST["numeros"];
$numeros = explode(",", $texto);

echo "Maior valor: " . maiorValor($numeros);
?>
<br><br>
</body>
</html>