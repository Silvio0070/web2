<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado - Problema 6</title>
</head>
<body>
<?php
function calcularImposto($renda, $dependentes, $salario) {
    $desconto = 0.05 * $salario * $dependentes;
    $liquida = $renda - $desconto;

    $qtd = $liquida / $salario;

    if ($qtd <= 2) {
        $aliquota = 0;
        $liquida= $renda;
    } else if ($qtd <= 3) {
        $aliquota = 5;
    } else if ($qtd <= 5) {
        $aliquota = 10;
    } else if ($qtd <= 7) {
        $aliquota = 15;
    } else {
        $aliquota = 20;
    }

    $imposto = $liquida * $aliquota / 100;

    echo "Renda líquida: R$ " . $liquida . "<br>";
    echo "Alíquota: " . $aliquota . "%<br>";
    echo "Imposto: R$ " . $imposto;
}

$cpf = $_POST["cpf"];
$dependentes = $_POST["dependentes"];
$renda = $_POST["renda"];
$salario = $_POST["salario"];

echo "CPF: " . $cpf . "<br>";
echo "Dependentes: " . $dependentes . "<br>";
echo "Renda mensal: R$ " . $renda . "<br>";

calcularImposto($renda, $dependentes, $salario);
?>
<br><br>
</body>
</html>