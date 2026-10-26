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

if (trim($nome) == '') {
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
    $erros[] = "Site inválido (use http:// ou https://).";
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
if (trim($end) == '') {
    $erros[] = "Informe o endereço.";
}
if (!preg_match('/^\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}$/', $telef)) {
    $erros[] = "Telefone inválido.";
}
if (!preg_match('/^\([0-9]{2}\) [0-9]{5}-[0-9]{4}$/', $cel)) {
    $erros[] = "Celular inválido.";
}

if (count($erros) > 0) {
    // Mostra os erros
    echo "<h1>Erros no formulário</h1>";
    foreach ($erros as $erro) {
        echo "<p>$erro</p>";
    }
    echo "<a href='curriculo.html'>Voltar</a>";
} else {
    // Mostra os dados
    echo "<h1>Dados do Currículo</h1>";
    echo "<h2>Informações Pessoais</h2>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Data de Nascimento: " . date('d/m/Y', strtotime($nasc)) . "<br>";
    echo "Altura: " . htmlspecialchars($alt) . " m<br>";
    echo "Site: " . ($site != '' ? htmlspecialchars($site) : 'Não informado') . "<br>";
    echo "Estado Civil: " . htmlspecialchars($ec) . "<br>";
    echo "Sexo: " . htmlspecialchars($sexo) . "<br>";

    echo "<h2>Endereço</h2>";
    echo "CEP: " . htmlspecialchars($cep) . "<br>";
    echo "Endereço: " . htmlspecialchars($end) . "<br>";

    echo "<h2>Contato</h2>";
    echo "Telefone: " . htmlspecialchars($telef) . "<br>";
    echo "Celular: " . htmlspecialchars($cel) . "<br>";

    echo "<h2>Conhecimentos</h2>";
    if (count($conhecimentos) > 0) {
        echo implode(", ", $conhecimentos) . "<br>";
    } else {
        echo "Nenhum selecionado<br>";
    }
    echo "Mais conhecimentos: " . htmlspecialchars($mais) . "<br>";

    echo "<br><a href='curriculo.html'>Voltar</a>";
}
?>
</body>
</html>
