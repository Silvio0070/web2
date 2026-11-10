<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado - Problema 3</title>
</head>
<body>
<?php
function paraSegundos($h, $m, $s) {
    return $h * 3600 + $m * 60 + $s;
}

$horas = $_POST["horas"];
$minutos = $_POST["minutos"];
$segundos = $_POST["segundos"];

$total = paraSegundos($horas, $minutos, $segundos);

echo $horas . "h" . $minutos . "min" . $segundos . "seg = " . $total . " segundos";
?>
<br><br>
</body>
</html>