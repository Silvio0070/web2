<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Página de login</h2>
    <?php
        $login = $_POST["txtlogin"];
        $senha = $_POST["txtsenha"];
        print "Seu login> <b>$login</b><br>";
        print "Sua senha> <b>$senha</b><br>";

?>
</body>
</html>