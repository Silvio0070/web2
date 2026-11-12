<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadcliengte</title>
</head>
<body>
    <h1>OS dados informados são:</h1>
    <?php
        $nome = $_POST["txtNome"];
        $ender = $_POST["txtEndereco"];
        $cpf = $_POST["txtCPF"];
        $estado = $_POST["listEstados"];
        $dtNasc = $_POST["txtData"];
        $sexo = $_POST["sexo"];
        $cinema = $_POST["checkCinema"];
        $musica = $_POST["checMusica"];
        $info = $_POST["checkInfo"];
        $login = $_POST["txtLogin"];
        $senha2 = $_POST["txtSenha1"];
        $senha1 = $_POST["txtSenha2"];
      
        $CamposOK =true;
        if($nome == ""){
            echo "Informe o NOME. <br>";
            $CamposOK = false;
        }

        if($ender == ""){
            echo "Informe o ENDEREÇO.<br>";
            $CamposOK = false;
        }

        if($senha1!=$senha2){
            echo "As senhas não coincidem";
            $CamposOK = false;
        }

        if ($CamposOK){
            echo "<table border='0' cellpadding='5'>";
            echo "<tr><td>Nome:</td><td><b> $nome </b> </td></tr>;";
            echo "<tr><td>Cpf:</td><td><b> $cpf </b> </td></tr>";
            echo "<tr><td>Endereço:</td><td> <b> $ender </b> </td></tr>";
            echo "<tr><td>Estado:</td><td><b>$estado </b> </td></tr>";
            echo "<tr><td>Data. Nasc:</td><td> <b>$dtNasc </b> </td></tr>";
            echo "<tr><td>Sexo:</td><td> <b>$sexo </b> </td></tr>";
            echo "<tr><td>Login:</td><td><b> $login </b> </td></tr>";
            echo "<tr><td>Senha:</td><td><b> $senha1 </b> </td></tr>";
            
            echo " <tr><td>Areas de interesse </td><td><b>"; 
            if($cinema==true){
                echo "cinema <br>";
            };
            if($musica==true){
                echo "musica <br>";
            }
            if($info==true){
                echo "Informatixa <br>";
            }
            echo "</b></td></table>";

        }

    ?>
</body>
</html>