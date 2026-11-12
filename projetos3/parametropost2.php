<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Página de login</h2>
    <?php
        function ValidarSenha($senha, $senha2){
            $login = $_POST["txtlogin"];
            $senha = $_POST["txtsenha"];
            $senha2 = $_POST["txtsenha2"];
            if($senha==$senha2){
                echo "A senha esta correta<br>";
                print "Seu login: <b>$login</b><br>";
                print "Sua senha: <b>$senha</b><br>";
            } else {
                echo "Senhas incorretas. Por favor, tente novamente";
            }
        }
        ValidarSenha($senha, $senha2);
?>
</body>
</html>