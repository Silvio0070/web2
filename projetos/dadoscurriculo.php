<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados do Currículo</title>
</head>
<body>
<?php
$nome  = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$nasc  = $_POST['nasc'] ?? '';
$alt   = $_POST['alt'] ?? '';
$site  = $_POST['site'] ?? '';
$ec    = $_POST['ec'] ?? '';
$sexo  = $_POST['sexo'] ?? '';
$cep   = $_POST['cep'] ?? '';
$end   = $_POST['end'] ?? '';
$telef = $_POST['telef'] ?? '';
$cel   = $_POST['celular'] ?? '';
$mais  = $_POST['mais'] ?? '';
$conhecimentos = $_POST['conhecimentos'] ?? [];

// Validação
$erros = [];

if ($nome == '') {
    $erros[] = "Informe o nome.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "Email inválido.";
}
if ($nasc == '') {
    $erros[] = "Informe a data de nascimento.";
}
if (!is_numeric($alt) || $alt <= 0 || $alt > 2.5) {
    $erros[] = "Altura inválida.";
}
if ($site != '' && !filter_var($site, FILTER_VALIDATE_URL)) {
    $erros[] = "Site inválido.";
}
if ($ec == '') {
    $erros[] = "Selecione o estado civil.";
}
if ($sexo == '') {
    $erros[] = "Selecione o sexo.";
}
if (!preg_match('/^[0-9]{5}-?[0-9]{3}$/', $cep)) {
    $erros[] = "CEP inválido.";
}
if ($end == '') {
    $erros[] = "Informe o endereço.";
}
if (!preg_match('/^\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}$/', $telef)) {
    $erros[] = "Telefone inválido.";
}
if (!preg_match('/^\([0-9]{2}\) [0-9]{5}-[0-9]{4}$/', $cel)) {
    $erros[] = "Celular inválido.";
}

if (count($erros) > 0) {
    echo "<h1>Erros no formulário</h1>";
    foreach ($erros as $erro) {
        echo "$erro <br>";
    }
} else {
    // Ajustes simples antes de mostrar
    $nasc = date('d/m/Y', strtotime($nasc));
    if ($site == '') {
        $site = "Não informado";
    }
    $lista = implode(", ", $conhecimentos);

    echo "<h1>Dados do Currículo</h1>";
    echo $nome . "<br>";
    echo $email . "<br>";
    echo $nasc . "<br>";
    echo $alt . "<br>";
    echo $site . "<br>";
    echo $ec . "<br>";
    echo $sexo . "<br>";
    echo $cep . "<br>";
    echo $end . "<br>";
    echo $telef . "<br>";
    echo $cel . "<br>";
    echo $lista . "<br>";
    echo $mais . "<br>";
}
?>
<br>
<a href="curriculo.html">Voltar</a>
</body>
</html>
