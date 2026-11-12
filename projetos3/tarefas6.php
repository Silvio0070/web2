<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tarefas6.php" method="post">
        <label for="n">Insira 10 números: </label>
        <input type="text" name="n" id="n">
    </form>

    <?php
    class exercicios{
        function quadrado(){
                $i = $_POST["n"];
                $i = explode(",", $i);
                foreach($i as $h){
                    echo $h*$h;
                    echo "<br>";
                };
        }
    }
    $questoes = new exercicios();
    $questoes -> quadrado();
    ?>
</body>
</html>